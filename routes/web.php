<?php

use App\Models\Konsultasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KonsultasiController;

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

// Routes Admin
Route::get('/admin', function () {
    return view('admin');
});

//Routes Login, Register, dan Logout
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/storage/images/{filename}', function ($filename) {
    $filePath = storage_path('app/public/images/' . $filename);
    if (file_exists($filePath)) {
        return response()->file($filePath);
    }
    abort(404);
});

// Routes Katalog
Route::get('/adminkatalog', [KatalogController::class, 'adminkatalog'])->name('adminkatalog');
Route::get('/addkatalog', [KatalogController::class, 'tambahKatalog'])->name('addkatalog');
Route::post('/simpankatalog', [KatalogController::class, 'simpanKatalog'])->name('simpankatalog');
Route::get('/delete-katalog/{id}', [KatalogController::class, 'delete'])->name('delete-katalog');
Route::get('/detail/{id}', [KatalogController::class, 'detail'])->name('detail');
Route::get('/', [KatalogController::class, 'katalog']);
Route::get('/editkatalog/{id}', [KatalogController::class, 'tampilkankatalog'])->name('editkatalog');
Route::post('/updatekatalog/{id}', [KatalogController::class, 'updateKatalog'])->name('updatekatalog');

//Routes Pesanan
Route::group(['middleware' => ['auth']], function () {
    Route::get('/pesan', [PesanController::class, 'formpemesanan'])->name('pesan');
    Route::post('/tambahdata', [PesanController::class, 'tambahdata'])->name('tambahdata');
    Route::get('/tabelpesan', [PesanController::class, 'pemesan'])->name('tabelpesan');
    Route::get('/editpesan/{id}', [PesanController::class, 'tampilkandata'])->name('editpesan');
    Route::post('/updatedata/{id}', [PesanController::class, 'updatedata'])->name('updatedata'); 
    Route::get('/delete-pesan/{id}', [PesanController::class, 'deletePesan'])->name('delete-pesan');
    Route::get('/history',[PesanController::class, 'historypesanan'])->name('history');
     Route::get('/laporan',[PesanController::class, 'laporan'])->name('laporan');
     Route::get('/export-pdf', [PesanController::class, 'exportPDF'])->name('export.pdf');

});

//Routes Kontak & Profile
Route::get('/kontak', [ProfileController::class, 'kontakkami'])->name('kontak');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/tambahprofile', [ProfileController::class, 'tambahprofile'])->name('tambahprofile');
Route::post('/simpanprofile', [ProfileController::class, 'simpanprofile'])->name('simpanprofile');
Route::get('/editprofile/{id}', [ProfileController::class, 'editprofile'])->name('editprofile');
Route::post('/updateprofile/{id}', [ProfileController::class, 'updateprofile'])->name('updateprofile');
Route::get('/delete-profile/{id}', [ProfileController::class, 'delete'])->name('delete-profile');