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
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sample Product 1</h5>
                                    <p class="card-text">Description of sample product 1.</p>
                                    <p class="card-text">$99.99</p>
                                    <a href="#" class="btn btn-primary">View Product</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sample Product 2</h5>
                                    <p class="card-text">Description of sample product 2.</p>
                                    <p class="card-text">$149.99</p>
                                    <a href="#" class="btn btn-primary">View Product</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sample Product 3</h5>
                                    <p class="card-text">Description of sample product 3.</p>
                                    <p class="card-text">$79.99</p>
                                    <a href="#" class="btn btn-primary">View Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection