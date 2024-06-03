@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<div class="container mx-auto p-4 bg-gray-300 p-9">
    <div class="slideshow-container relative overflow-hidden">
        <div class="slide-wrapper flex transition-transform duration-500 ease-in-out" id="slideWrapper">
            <a class="slide w-full flex-shrink-0">
                <img src="images/film7.jpg" class="w-full h-80" alt="Film 7">
            </a>
            <a href="{{ route('film/film2') }}"class="slide w-full flex-shrink-0">
                <img src="images/film10.jpg" class="w-full h-80" alt="Film 10">
            </a>
            <a class="slide w-full flex-shrink-0">
                <img src="images/film9.jpg" class="w-full h-80" alt="Film 9">
            </a>
        </div>

        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full cursor-pointer" onclick="prevSlide()">
            &#8249;
        </div>
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full cursor-pointer" onclick="nextSlide()">
            &#8250;
        </div>
    </div>

    <div class=" grid grid-cols-3 gap-3 mt-6">
        <a href="{{ route('film/film1') }}" class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
            <img src="images/film1.jpg" alt="Film 1" class="w-full h-auto">
            <h6 class="text-center mt-2">Kung Fu Panda 4</h6>
        </a>
        <div class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
            <img src="images/film2.jpg" alt="Film 2" class="w-full h-auto">
            <h6 class="text-center mt-2">Dune: Part Two</h6>
        </div>
        <div class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
            <img src="images/film3.jpg" alt="Film 3" class="w-full h-auto">
            <h6 class="text-center mt-2">Land Of Bad</h6>
        </div>
        <div class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
            <img src="images/film4.jpg" alt="Film 4" class="w-full h-auto">
            <h6 class="text-center mt-2">Perjalanan Pembuktian Cinta</h6>
        </div>
        <div class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
            <img src="images/film5.jpg" alt="Film 5" class="w-full h-auto">
            <h6 class="text-center mt-2">Pasar Setan</h6>
        </div>
        <div class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
            <img src="images/film6.jpg" alt="Film 6" class="w-full h-auto">
            <h6 class="text-center mt-2">Madame Web</h6>
        </div>
    </div>
</div>

<script>
    let slideIndex = 0;
    const slideWrapper = document.getElementById('slideWrapper');
    const totalSlides = slideWrapper.children.length;

    function updateSlide() {
        const slideWidth = slideWrapper.children[0].clientWidth;
        slideWrapper.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
    }

    function nextSlide() {
        slideIndex = (slideIndex + 1) % totalSlides;
        updateSlide();
    }

    function prevSlide() {
        slideIndex = (slideIndex - 1 + totalSlides) % totalSlides;
        updateSlide();
    }

    // Auto-slide every 3 seconds
    setInterval(nextSlide, 3000); // Change slide every 3 seconds
</script>

@endsection
