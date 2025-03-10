<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminServiceController;
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

Route::get('/', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/home/index'
    ];
    return view("home.layouts.wrapper", $data);
});

Route::get('/about', function () {
    $data = [
        'content' => 'home/about/index'
    ];
    return view("home.layouts.wrapper", $data);
});

Route::get('/best-seller', function () {
    $data = [
        'content' => 'home/best-seller/index'
    ];
    return view("home.layouts.wrapper", $data);
});

Route::get('/client', function () {
    $data = [
        'content' => 'home/client/index'
    ];
    return view("home.layouts.wrapper", $data);
});

Route::get('/services', function () {
    $data = [
        'content' => 'home/services/index'
    ];
    return view("home.layouts.wrapper", $data);
});

Route::get('/login', function () {
    $data = [
        'content' => 'home/auth/login'
    ];
    return view("home.layouts.wrapper", $data);
});
// Route untuk mengupdate data user


// Route::put('/admin/user/{id}', [AdminUserController::class, 'update'])->name('admin.user.update');
Route::resource('/admin/user', AdminUserController::class);




// ADMIN
Route::prefix('/admin')->group(function () {
    Route::get('dashboard', function () {

        $data = [
            'content' => 'admin/dashboard/index'
        ];

        return view('admin.layouts.wrapper', $data);
    });

    Route::get('/about', [AdminAboutController::class, 'index']);
    Route::put('/about/update', [AdminAboutController::class, 'update']);

    Route::resource('/service', AdminServiceController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/user', AdminUserController::class);
});
