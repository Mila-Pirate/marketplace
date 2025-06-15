@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Welcome to {{ config('app.name', 'Marketplace') }}</h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <p>Your marketplace is ready! Start building.</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </section>
    </div>
@endsection