<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Post;

Route::get('/', function () {
    return view('public.home');
});

Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.attempt');
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');


Route::get('/layanan', function () {
    return view('public.layanan', ['title' => 'Layanan']);
});
Route::get('/tentang', function () {
    return view('public.tentang', ['title' => 'Tentang Kami']);
});
Route::get('/kontak', function () {
    return view('public.kontak', ['title' => 'Kontak Kami']);
});
Route::get('/alur', function () {
    return view('public.alur', ['title' => 'Alur']);
});

Route::get('/berita', function () {
    return view('public.berita', [
        'title' => 'Berita',
        'posts' => Post::query()->latest()->get(),
    ]);
});

Route::get('/berita/{post:slug}', function (Post $post) {
    return view('public.berita', [
        'title' => 'Detail Berita',
        'post' => $post
    ]);
});
