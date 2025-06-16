@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Welcome to {{ config('app.name', 'Marketplace') }}</h1>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>Featured Products</h3>
                    <div class="row">
                        @forelse ($products as $product)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                                        <p class="card-text">${{ number_format($product->price, 2) }}</p>
                                        <p class="card-text"><small>Category: {{ $product->category ? $product->category->name : 'None' }}</small></p>
                                        <a href="#" class="btn btn-primary">View Product</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                <p>No products available.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection