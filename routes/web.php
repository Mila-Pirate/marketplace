<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.index');
});