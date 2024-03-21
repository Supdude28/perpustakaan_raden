<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Middleware\ValidasiAdmin;
use App\Http\Middleware\ValidasiUser;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// user interface
// Route::get('dash', function () {
//     return view('index');
// });

Route::get('data_buku', function () {
    return view('databuku');
});

// Route::get('login_form', function () {
//     return view('lojin');
// });

Route::prefix('user')->group(function () {
    Route::get('dash', [Usercontroller::class, 'dashboard']);
    Route::get('lojin', [Usercontroller::class, 'lojin']);
    Route::post('lojinn', [Usercontroller::class, 'ceklogin']);
    route::get('logout', [Usercontroller::class, 'logout']);
});
// end





// admin url
// Route::get('dashadmin', function () {
//     return view('admin.index');
// });

// Route::get('Data_buku', function () {
//     return view('admin.databuku');
// });
// Route::get('listadmin', function () {
//     return view('admin.listadmin');
// });

// Route::get('registrasi', function () {
//     return view('admin.regis_admin');
// });

Route::prefix('admin')->group(function () {
    // buku
    route::get('tambahbukuk', [AdminController::class, 'tambah']);
    route::post('bukutambah', [AdminController::class, 'tambahini']);
    route::get('bukudata', [Admincontroller::class, 'buku']);
    // end
    // tambah && list admin CRUD
    route::get('Registrasi', [Admincontroller::class, 'll']);
    route::get('aadminlist', [Admincontroller::class, 'adminlist']);
    route::post('regispost', [Admincontroller::class, 'regispost']);
    route::get('hapusadmin/{admin}', [Admincontroller::class, 'adminhapus']);
    // end
    Route::get('adminlogin', [Admincontroller::class, 'getLogin']);
    Route::post('lojinn', [Admincontroller::class, 'ceklogin']);
    route::get('logout', [Admincontroller::class, 'logout']);
});
Route::get('dashadmin', [Admincontroller::class, 'dashmin']);

// crud

route::get('edit/{admin}', [Admincontroller::class, 'adminedit']);
route::post('edit/{admin}', [Admincontroller::class, 'admined']);


// adminlogin
