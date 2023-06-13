<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/tours', [PageController::class, 'tours']);
Route::get('/types', [PageController::class, 'types']);
Route::get('/relocation', [PageController::class, 'relocation']);
Route::get('/reviews', [PageController::class, 'reviews']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/order', [PageController::class, 'order']);

Route::view('swiper', 'swiper');
