<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [DashboardController::class, 'index']);

Route::post('/login', [HomeController::class, 'login']);

Route::post('/register', [HomeController::class, 'register']);

Route::get('/user', [HomeController::class, 'welcome']);

Route::get('/produk', [HomeController::class, 'produk']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');

Route::get('/nope', [HomeController::class, 'tolak']);

Route::get('/produk', [HomeController::class, 'produk']);



Auth::routes();



Route::group(['middleware' => 'admin'], function () {


    // Route::get('/', [DashboardController::class, 'index']);

    Route::get('/admin', [HomeController::class, 'admin']);

    Route::get('/list', [HomeController::class, 'list'])->name('list');

    Route::get('/input', [HomeController::class, 'input']);

    Route::post('/input/insert', [HomeController::class, 'insert']);

    Route::get('/edit/{id_barang}', [HomeController::class, 'edit']);

    Route::post('/update/{id_barang}', [HomeController::class, 'update']);

    Route::post('/delete/{id_barang}', [HomeController::class, 'delete']);

    Route::get('/search', [HomeController::class, 'search']);

    Route::get('/member', App\Http\Livewire\Post\Index::class)->name('post.index')->middleware('auth');

Route::get('/member/create', App\Http\Livewire\Post\Create::class)->name('post.create')->middleware('auth');

Route::get('/member/edit/{id}', App\Http\Livewire\Post\Edit::class)->name('post.edit')->middleware('auth');

Route::get('/stock', App\Http\Livewire\Post\Listba::class)->name('post.listba')->middleware('auth');

Route::get('/stock/create', App\Http\Livewire\Post\Createba::class)->name('post.createba')->middleware('auth');

Route::get('/stock/edit/{id}', App\Http\Livewire\Post\Editba::class)->name('post.editba')->middleware('auth');

    
});

// Route::group(['middleware' => 'user'], function () {
// });