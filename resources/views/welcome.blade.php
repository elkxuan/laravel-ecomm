@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://127.0.0.1:8000/assets/images/strawberry-tiramisu.png" class="d-block w-100" alt="Slide 1"
                style="max-height:600px">
            <div class="carousel-caption">
                <a class="btn order-btn" href="#" role="button">SHOP NOW</a>
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
        <h3>Our Products</h3>
        @for ($i = 1; $i <= 6; $i++)
            <div class="col-md-4 mt-4 mb-4">
                <div class="card h-100 shadow">
                    <img src="http://127.0.0.1:8000/assets/images/hokkaido-cupcakes.png" alt="product">
                    <div class="card-body">
                        <h5 class="card-title">Hokkaido Chiffon Cupcake</h5>
                        <p class="card-text">Description</p>
                        <p class="card-text">RM 100.00</p>
                        <a href="#" class="btn add-to-cart-btn" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>

            @if ($i % 3 == 0)
                </div><div class="row"> <!-- Start a new row after every 3 items -->
            @endif
        @endfor
    </div>
</div>

<div class="container mt-4 mb-5">
    <div class="row">
        <h3>Limited Editions</h3>
        @for ($i = 1; $i <= 3; $i++)
            <div class="col-md-4 mt-4 mb-4">
                <div class="card h-100 shadow">
                    <img src="http://127.0.0.1:8000/assets/images/hokkaido-cupcakes.png" alt="product">
                    <div class="card-body">
                        <h5 class="card-title">X'mas Gift Set</h5>
                        <p class="card-text">Description</p>
                        <p class="card-text">RM 100.00</p>
                        <a href="#" class="btn add-to-cart-btn" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>

            @if ($i % 3 == 0)
                </div><div class="row"> <!-- Start a new row after every 3 items -->
            @endif
        @endfor
    </div>
</div>
@endsection