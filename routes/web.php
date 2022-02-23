<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

// PRAKTIKUM 1
// Route::get('/', function () {
//     // return view('welcome');
//     echo "Selamat Datang";
// });

// Route::get('/about', function() {
//     echo "NIM: 2041720010 <br>";
//     echo "Nama: Taufik Anwar";
// });

// Route::get('/articles/{id}', function($id) {
//     echo "Halaman artikel dengan id " . $id; 
// });

// // PRAKTIKUM 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// PRAKTIKUM 3
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);
