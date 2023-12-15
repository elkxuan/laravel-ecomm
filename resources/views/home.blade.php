@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://127.0.0.1:8000/assets/images/strawberry-tiramisu.png" class="d-block w-100" alt="Slide 1"
                style="max-height:600px">
            <div class="carousel-caption translate-middle-y" style="left: 28%; top: 50%">
                <!-- <h2 id="typewriter-heading"><span></span></h2> -->
                <!-- <h2 class="animate__animated animate__fadeInUp animate__slow">Everyone loves dessert</h2> -->
                <h6 class="animate__animated animate__fadeInUp animate__slower">Indulge in our delightful creations<br> & sweeten your moments</h6>
                <a class="btn order-btn animate__animated animate__fadeInUp animate__delay-2s animate__slow" href="/collections/best-sellers" role="button">@lang('home.shop_now')</a>
            </div>
        </div>
        <!-- <div class="carousel-item">
            <img src="http://127.0.0.1:8000/assets/images/cake.png" class="d-block w-100" alt="Slide 2"
                style="max-height:600px">
        </div> -->
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
</div>

<div class="container mt-4 mb-5">
    <div class="row">
        <h3>@lang('home.our_products')</h3>
        @php
        $itemCount = 0;
        @endphp

        @foreach ($products as $product)
        @if ($itemCount < 9) 
        <div class="col-md-4 mt-4 mb-4">
            <div class="card h-100 shadow">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="card-img-top product-image">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-muted">{{ $product->description }}</p>
                    <p class="card-text">RM {{ $product->price }}</p>
                    <!-- <a href="#" class="btn add-to-cart-btn" role="button">Add to Cart</a> -->
                </div>
            </div>
        </div>
        @endif

        @php
            $itemCount++;
        @endphp
        @endforeach

        @if (count($products) > 9)
        <div class="col-md-12 mt-3 mb-3 text-center">
            <a href="#" class="btn view-btn">View More</a>
        </div>
        @endif
    </div>
</div>

<div class="container mt-4 mb-5">
    <div class="row">
        <h3>@lang('home.limited_editions')</h3>
        @foreach ($limited_editions as $limited_edition)
        <div class="col-md-4 mt-4 mb-4">
            <div class="card h-100 shadow">
                <img src="{{ $limited_edition->image }}" alt="{{ $limited_edition->name }}"
                    class="card-img-top product-image">
                <div class="card-body">
                    <h5 class="card-title">{{ $limited_edition->name }}</h5>
                    <p class="card-text">{{ $limited_edition->description }}</p>
                    <p class="card-text">RM {{ $limited_edition->price }}</p>
                    <!-- <a href="#" class="btn add-to-cart-btn" role="button">Add to Cart</a> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var words = ["Everyone", " " , "loves", " " , "dessert"];

        var index = 0;
        var wordIndex = 0;
        var speed = 150;

        function typeWriter() {
            if (index < words[wordIndex].length) {
                document.getElementById("typewriter-heading").lastElementChild.innerHTML += words[wordIndex].charAt(index);
                index++;
                setTimeout(typeWriter, speed);
            } else {
                index = 0;
                wordIndex++;
                setTimeout(typeWriter, 100);
            }
        }

        typeWriter(); 
    });
</script>
@endsection