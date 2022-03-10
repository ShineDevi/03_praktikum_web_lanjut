<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return "Ini adalah halaman awal Home";
// });
Route::get('/', function () {
    return view('master',[
        'title'=>'Halaman Home'
    ]);
})->name('home');

Route::get('about', function () {
    return view('about',[
        'title'=>'Halaman About'
    ]);
})->name('about');

Route::get('rooms', function () {
    return view('rooms',[
        'title'=>'Halaman Rooms'
    ]);
})->name('rooms');

Route::get('news', function () {
    return view('news',[
        'title'=>'Halaman News'
    ]);
})->name('news');

Route::get('dinning', function () {
    return view('dinning',[
        'title'=>'Halaman Dinning'
    ]);
})->name('dinning');

Route::get('contact', function () {
    return view('contact',[
        'title'=>'Halaman Contact'
    ]);
})->name('contact');

// Route::prefix('/category')->group(function () {
//     Route::get('/marbel-edu-games', function () {
//         return "Ini adalah halaman daftar product Marbel Edu Games";
//     });
//     Route::get('/marbel-and-friends-kids-games', function () {
//         return "Ini adalah halaman daftar product Marbel and Friends Kids Games";
//     });
//     Route::get('/riri-story-books', function () {
//         return "Ini adalah halaman daftar product Riri Story Books";
//     });
//     Route::get('/kolak-kids-songs', function () {
//         return "Ini adalah halaman daftar product Kolak Kids Songs";
//     });
// });
// // Menampilkan daftar product ( route prefix)
// // https://www.educastudio.com/category/marbel-edu-games
// // https://www.educastudio.com/category/marbel-and-friends-kids-games
// // https://www.educastudio.com/category/riri-story-books
// // https://www.educastudio.com/category/kolak-kids-songs


// // Menampilkan Daftar berita (route param)
// // https://www.educastudio.com/news
// // https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19

// Route::prefix('/program')->group(function () {
//     Route::get('/karir', function () {
//         return '<a href="https://www.educastudio.com/program/karir">
//         Ini adalah halaman Program Karir EducaStudio</a>';
//     });
//     Route::get('/magang', function () {
//         return '<a href="https://www.educastudio.com/program/magang">
//         Ini adalah halaman Program Magang EducaStudio</a>';
//     });
//     Route::get('/kunjungan-industri', function () {
//         return '<a href="https://www.educastudio.com/program/kunjungan-industri">
//         Ini adalah halaman Program Kunjungan Industri EducaStudio</a>';
//     });
// });
// // Halaman Program
// // Menampilkan Daftar Program (route prefix)
// // https://www.educastudio.com/program/karir
// // https://www.educastudio.com/program/magang
// // https://www.educastudio.com/program/kunjungan-industri

// Route::get('/about-us', function () {
//     return '<a href="https://www.educastudio.com/about-us">
//     Ini adalah halaman About Us Educa Studio</a>';
// });
// // Menampilkan About Us (route biasa)
// // https://www.educastudio.com/about-us

// Route::resource('/contact-us', ContactController::class)->only('store');
// // Halaman Contact Us
// // Menampilkan Contact Us (route resource only)
// // https://www.educastudio.com/contact-us
// // (Bisa Post kontak ke backend)