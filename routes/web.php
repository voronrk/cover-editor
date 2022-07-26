<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackgroundController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/result', function () {
    return view('result');
})->name('result');

// Route::post('/add-text', function () {
//     return view('editor');
// })->name('add-text');
