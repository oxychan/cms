<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ExperienceController;

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
// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::prefix('category')->group(function () {
//     Route::get('/{title}', [ProductController::class, 'view']);
// });

// Route::get('/news', [NewsController::class, 'index']);
// Route::get('/news/{title}', [NewsController::class, 'view']);

// Route::prefix('program')->group(function () {
//     Route::get('/{title}', [ProgramController::class, 'view']);
// });

// Route::get('/about', [AboutController::class, 'index']);

// Route::prefix('contact-us')->group(function () {
//     Route::resource('/', ContactController::class)->only([
//         'index', 'create'
//         ]);
//     Route::get('/{name}/{email}/{msg}', [ContactController::class, 'store'])->name('post-contact');
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route ke home
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');

Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::get('/company', [CompanyController::class, 'index'])->name('company');

Route::get('/events', [EventsController::class, 'index'])->name('events');

Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/single', [SingleController::class, 'index'])->name('single');

Route::get('/single/{slug}', [SingleController::class, 'slug'])->name('single.slug');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
