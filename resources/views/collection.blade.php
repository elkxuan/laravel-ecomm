@extends('layouts.master')
@section('title', '{{$category}}')
@section('content')
<div class="container mt-4 mb-5">
    <div class="row">
        <h3>{{ ucwords($category) }}</h3>
        @foreach($products as $product) 
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
            @endforeach
    </div>
</div>
@endsection