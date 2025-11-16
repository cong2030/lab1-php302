<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes có thể nạp trực tiếp vào view 
// action trong controller 

Route::get('/xinchao', [HomeController::class, 'xinChao']);
Route::get('/tinhtong/{a}/{b}', [HomeController::class, 'tinhTong']);
Route::get('/home', [HomeController::class, 'index']);



Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/trash/list', [ProductController::class, 'trash'])->name('products.trash');
});
