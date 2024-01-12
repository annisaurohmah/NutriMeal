<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\FilterController;


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
    return view('dashboard');
})->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/foodpage', function () {
    return view('foodpage');
})->name('foodpage');
Route::post('/foodpage/result', function () {
    return view('result');
})->name('result');
});

Route::POST('/get-average', [FilterController::class, 'getAverage'])->name('getAveragePage');

Route::get('/get-average/{categoryId}/get-filter', [FilterController::class, 'getFilter']);
