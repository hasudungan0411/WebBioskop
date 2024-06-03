@extends('layouts.user')

@section('title', 'Pembelian Tiket')

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex flex-wrap items-start">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <img src="/images/film1.jpg" alt="Film Poster" class="w-full h-auto rounded-lg">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 pl-6 flex flex-col justify-start">
                <h1 class="text-3xl font-semibold mb-2">Kungfu Panda 4</h1>
                <p class="text-gray-600 mb-4">Animation | Action | Adventure</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 1.5" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    <span>Durasi: 1 jam 34 menit</span>
                </div>
            </div>
        </div>
        
        <div class="mt-6">
            <h2 class="text-2xl font-semibold">BCS MALL XXI BATAM</h2>
            <div class="mt-6">
                <div>
                    <h3 class="text-lg font-medium current-date"></h3>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex space-x-4 session-times">
                            <a href="{{ route('pembelian/beli') }}" data-time="10:30" class="session-link bg-blue-500 text-white px-3 py-2 rounded">10:30</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="15:15" class="session-link bg-blue-500 text-white px-3 py-2 rounded">15:15</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="23:30" class="session-link bg-blue-500 text-white px-3 py-2 rounded">23:30</a>
                        </div>
                        <span>Rp 35.000</span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-6">
        
        <div class="mt-8">
            <h2 class="text-2xl font-semibold">PANBIL MALL XXI BATAM</h2>
            <div class="mt-6">
                <div>
                    <h3 class="text-lg font-medium current-date"></h3>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex space-x-4 session-times">
                            <a href="{{ route('pembelian/beli') }}" data-time="11:15" class="session-link bg-blue-500 text-white px-3 py-2 rounded">11:15</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="14:00" class="session-link bg-blue-500 text-white px-3 py-2 rounded">14:00</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="17:45" class="session-link bg-blue-500 text-white px-3 py-2 rounded">17:45</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="19:45" class="session-link bg-blue-500 text-white px-3 py-2 rounded">19:45</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="23:40" class="session-link bg-blue-500 text-white px-3 py-2 rounded">23:40</a>
                        </div>
                        <span>Rp 35.000</span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-6">
        
        <div class="mt-8">
            <h2 class="text-2xl font-semibold">MEGA XXI BATAM </h2>
            <div class="mt-6">
                <div>
                    <h3 class="text-lg font-medium current-date"></h3>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex space-x-4 session-times">
                            <a href="{{ route('pembelian/beli') }}" data-time="10:50" class="session-link bg-blue-500 text-white px-3 py-2 rounded">10:50</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="13:45" class="session-link bg-blue-500 text-white px-3 py-2 rounded">13:45</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="18:15" class="session-link bg-blue-500 text-white px-3 py-2 rounded">18:15</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="22:40" class="session-link bg-blue-500 text-white px-3 py-2 rounded">22:40</a>
                        </div>
                        <span>Rp 35.000</span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-6">
        
        <div class="mt-8">
            <h2 class="text-2xl font-semibold">STUDIO XXI BATAM</h2>
            <div class="mt-6">
                <div>
                    <h3 class="text-lg font-medium current-date"></h3>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex space-x-4 session-times">
                            <a href="{{ route('pembelian/beli') }}" data-time="12:40" class="session-link bg-blue-500 text-white px-3 py-2 rounded">12:40</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="15:05" class="session-link bg-blue-500 text-white px-3 py-2 rounded">15:05</a>
                            <a href="{{ route('pembelian/beli') }}" data-time="20:45" class="session-link bg-blue-500 text-white px-3 py-2 rounded">20:45</a>
                        </div>
                        <span>Rp 35.000</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const currentDateElements = document.querySelectorAll(".current-date");
    const currentDate = new Date().toLocaleDateString("id-ID", {
        year: "numeric",
        month: "long",
        day: "numeric",
    });
    currentDateElements.forEach((element) => {
        element.textContent = currentDate;
    });

    const currentTime = new Date();

    const sessionLinks = document.querySelectorAll('.session-link');
    sessionLinks.forEach(link => {
        const sessionTimeStr = link.dataset.time;
        const [hour, minute] = sessionTimeStr.split(':').map(Number);
        const sessionDateTime = new Date(currentTime.getFullYear(), currentTime.getMonth(), currentTime.getDate(), hour, minute);

        if (currentTime > sessionDateTime) {
            link.style.backgroundColor = 'gray';
            link.style.cursor = 'not-allowed';
            link.classList.remove('bg-blue-500');
            link.classList.add('bg-gray-500');
            link.onclick = (e) => {
                e.preventDefault();
            };
        }
    // Periksa autentikasi pengguna
    link.addEventListener("click", (e) => {
            e.preventDefault();
            // Logika cek autentikasi pengguna
            const isLoggedIn = document.querySelector("meta[name='user-logged-in']").content === "true";

            if (!isLoggedIn) {
                console.log("User is not logged in. Redirecting to login page.");
                window.location.href = "/login"; // Arahkan ke halaman login
            } else {
                // Jika sudah login, biarkan tautan berfungsi
                window.location.href = link.getAttribute("href");
            }
        });
    });
});
</script>

@endsection
