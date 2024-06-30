<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\Movie;
use App\Models\Seat;
use PDF;

class PembayaranController extends Controller
{
    // Menampilkan halaman pemilihan kursi
    public function show($productId, $movieId)
    {
        $product = Product::findOrFail($productId);
        $movie = Movie::findOrFail($movieId);
        $seats = Seat::where('movie_id', $movieId)->get();

        return view('pilihkursi', compact('product', 'movie', 'seats'));
    }

    // Memproses pembayaran
    public function prosespayment(Request $request)
    {
        $productId = $request->input('product_id');
        $movieId = $request->input('movie_id');
        $selectedSeats = explode(',', $request->input('selected_seats'));
        $totalPrice = count($selectedSeats) * 35000; // Contoh harga per kursi

        // Buat transaksi di database
        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'movie_id' => $movieId,
            'total_price' => $totalPrice,
            'status' => 'sukses',
        ]);

        // Relasi ke kursi
        foreach ($selectedSeats as $seatNumber) {
            $seat = Seat::where('seat_number', $seatNumber)->first();
            if ($seat) {
                $transaction->seats()->attach($seat->id);
                $seat->update(['is_reserved' => true]); // Tandai kursi sebagai reserved
            }
        }

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        $params = [
            'transaction_details' => [
                'order_id' => $transaction->id,
                'gross_amount' => $totalPrice,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        // Dapatkan Snap Token
        $snapToken = Snap::getSnapToken($params);

        // Simpan Snap Token ke database
        $transaction->snap_token = $snapToken;
        $transaction->save();

        // Redirect ke halaman konfirmasi pembayaran
        return redirect()->route('confirmpembayaran', ['transaction' => $transaction->id]);
    }

    // Menampilkan halaman konfirmasi pembayaran
    public function checkout(Transaction $transaction)
    {
        // Ambil data produk terkait
        $product = Product::find($transaction->product_id);

        // Ambil data film terkait
        $movie = Movie::find($transaction->movie_id);

        // Ambil kursi yang terkait dengan transaksi
        $seats = $transaction->seats;  // Pastikan relasi sudah didefinisikan

        $transaction_id = $transaction->id;

        // dd($transaction_id);

        // Pastikan semua data dikirim ke view
        return view('confirmpembayaran', compact('transaction', 'product', 'movie', 'seats', 'transaction_id'));
    }

    // Menangani notifikasi dari Midtrans
    public function handle(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        // Buat instance notifikasi
        $notification = new Notification();

        $transactionStatus = $notification->transaction_status;
        $orderId = $notification->order_id;

        // Dapatkan transaksi berdasarkan order_id
        $transaction = Transaction::find($orderId);

        if ($transaction) {
            switch ($transactionStatus) {
                case 'capture':
                case 'settlement':
                    $transaction->status = 'paid';
                    break;
                case 'pending':
                    $transaction->status = 'pending';
                    break;
                case 'deny':
                case 'expire':
                case 'cancel':
                    $transaction->status = 'failed';
                    break;
                default:
                    $transaction->status = 'unknown';
                    break;
            }
            $transaction->save();
        }

        return response()->json(['message' => 'Notification processed successfully']);
    }

    public function generateTicket($id_transaction)
    {
        // ambil data yang diperlukan untuk query
        $data = Transaction::select('product_id', 'movie_id')->where('id', $id_transaction)->first();

        // Ambil data produk terkait
        $product = Product::findOrFail($data->product_id)->first();
        // Ambil data film terkait
        $movie = Movie::find($data->movie_id)->first();

        // Ambil kursi yang terkait dengan transaksi
        $transaction = Transaction::findOrFail($id_transaction)->with('seats')->first();  // Pastikan relasi sudah didefinisikan

        // Generate PDF tiket
        $pdf = PDF::loadView('ticket', compact('transaction', 'product', 'movie'));

        // Download atau tampilkan PDF kepada penggunaweb
        return $pdf->download('ticket_' . $id_transaction . '.pdf');
    }

    
}
