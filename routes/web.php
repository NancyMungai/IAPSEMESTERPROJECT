<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\payments\mpesa\MPESAController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::get('/news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/singleNews', [App\Http\Controllers\HomeController::class, 'singleNews'])->name('singleNews');
<<<<<<< HEAD
Route::post('/add_to_cart', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('add_to_cart');
=======
Route::get('/singleProduct', [App\Http\Controllers\ProductController::class, 'singleProduct'])->name('singleProduct');
>>>>>>> 911033a5e6f3f24b163bea9a823017905d5c8034
// Route::get('/shop', [App\Http\Controllers\ProductsController::class, 'add_cart'])->name('shop');
Route::get('/singleProduct/{id}', [ProductController::class, 'singleProduct'])->name('singleProduct');



//Route::get('/shop/{id}', 'ProductController@shop')->name('shop');
Route::post('cart/add', 'ProductsController@cartAdd');
//Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::post('/add_to_cart', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');

Route::post('/remove_from_cart', [CartController::class, 'removeFromCart'])->name('remove_from_cart');

Route::delete('/remove_from_cart/{id}', [CartController::class, 'removeFromCart'])->name('remove_from_cart');

    // Your routes that require 2FA for all users

    Route::get('/', [ProductController::class, 'shop']);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');

// routes/web.php or routes/api.php



Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

// routes/web.php or routes/api.php



Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'processCheckout']);
Route::post('/get-token', [MPESAController::class, 'getAccessToken']);
Route::post('/register-urls', [MPESAController::class, 'registerURLS']);

