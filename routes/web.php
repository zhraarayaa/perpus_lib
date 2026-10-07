<?php

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

// Basic Routing
Route::get('/', function () {
    return '<h1>Hello, Laravel</h1>';
});

Route::get('/halo', function () {
    return '<h1>Halo, Gamelab Indonesia</h1>';
});

// Route Parameters
Route::get('/user/{id}', function ($id) {
    return '<h1>Ini adalah halaman user : ' . $id . '</h1>';
});

Route::get('/framework/{framework}/versi/{versi}', function ($framework, $versi) {
    return '<h1>Saya sedang belajar: ' . $framework . ' versi ' . $versi . '</h1>';
});

// Tampilan Daftar Buku (Routing Sederhana dengan Tabel)
Route::get('/books', function () {
    return '
    <h2>Daftar Buku</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Laravel 11</td>
            <td>Dimas</td>
            <td>Framework PHP dengan Laravel 11</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Pemrograman PHP</td>
            <td>Rey</td>
            <td>Pemrograman PHP Tingkat Lanjut</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Belajar Web Dengan Laravel</td>
            <td>Fathan</td>
            <td>Belajar Web dengan Framework PHP Laravel</td>
        </tr>
    </table>
    ';
});