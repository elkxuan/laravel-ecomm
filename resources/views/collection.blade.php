@extends('layouts.master')
@section('title', '{{$category}}')
@section('content')
    <h1>{{ ucfirst($category) }}</h1>
    @foreach($products as $product)
        // Display product details
    @endforeach
@endsection