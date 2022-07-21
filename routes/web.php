<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DeteksiController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});
Route::get('/', function () {
    return view('beranda');
});

Route::get('/foo', function() {Artisan::call('storage:link'); });

Route::get('/login1', [LoginController::class, 'login'])->name('login');
Route::post('/login2', [LoginController::class, 'loginStore']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/rgadmin', [RegisterController::class, 'register']);
Route::post('/rgadmin', [RegisterController::class, 'registerStore']);

Route::get('/dtadmin', [PostController::class, 'indexAdmin']);
Route::get('/dtadmin/edit/{id}', [PostController::class, 'editAdmin']);
Route::post('/dtadmin/update', [PostController::class, 'updateAdmin']);
Route::get('/dtadmin/hapus/{id}', [PostController::class, 'hapusAdmin']);
Route::get('/dtadmin2', [PostController::class, 'searchAdmin']);

Route::get('/dataLK', [PostController::class, 'indexdataLK']);
Route::get('/dataLK/edit/{id}', [PostController::class, 'editdataLK']);
Route::post('/dataLK/update', [PostController::class, 'updatedataLK']);
Route::get('/dataLK/hapus/{id}', [PostController::class, 'hapusdataLK']);
Route::get('/dataLK2', [PostController::class, 'searchdataLK']);

Route::get('/dataTB', [PostController::class, 'indexdataTB']);
Route::get('/dataTB/edit/{id}', [PostController::class, 'editdataTB']);
Route::post('/dataTB/update', [PostController::class, 'updatedataTB']);
Route::get('/dataTB/hapus/{id}', [PostController::class, 'hapusdataTB']);
Route::get('/dataTB2', [PostController::class, 'searchdataTB']);

Route::get('/dataBB', [PostController::class, 'indexdataBB']);
Route::get('/dataBB/edit/{id}', [PostController::class, 'editdataBB']);
Route::post('/dataBB/update', [PostController::class, 'updatedataBB']);
Route::get('/dataBB/hapus/{id}', [PostController::class, 'hapusdataBB']);
Route::get('/dataBB2', [PostController::class, 'searchdataBB']);

Route::get('/deteksi', [DeteksiController::class, 'datalingkar']);
Route::post('/deteksi', [DeteksiController::class, 'datalingkarStore']);

Route::get('/process', [DeteksiController::class, 'python']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'search']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/calender', function () {
    return view('calender');
});

/* ADMIN */
Route::get('/template', function () {
    return view('layouts.template');
});
Route::get('/rguser', function () {
    return view('admin.rg_user');
});
Route::get('/dtuser', function () {
    return view('admin.dt_user');
});


Auth::routes();


