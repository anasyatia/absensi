<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvi   der and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/error-permission', function () {
    return view('404');
});

Route::middleware('IsLogin')->group(function () {
    Route::get('/home', function() {
        return view('admin/dashboard');
    })->name('dashboard');
    Route::get('/logout', [Controller::class, 'logout'])->name('auth-logout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::middleware('IsLogin', 'IsAdmin')->group(function () {
        // penggunaan prefix digunakan untuk mempermudah menu yang memi9liki banyak fitur
        // untuk mengelompokkan route-route
        Route::prefix('/student')->name('student.')->group(function () {
            Route::get('/data', [StudentController::class, 'index'])->name('data');
            Route::get('/create', [StudentController::class, 'create'])->name('create');
            Route::post('/store', [StudentController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [StudentController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');
            Route::get('/{id}', [StudentController::class, 'show'])->name('show');
        });

        Route::prefix('/rombel')->name('rombel.')->group(function () {
            Route::get('/data', [RombelController::class, 'index'])->name('data');
            Route::get('/create', [RombelController::class, 'create'])->name('create');
            Route::post('/store', [RombelController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [RombelController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [RombelController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [RombelController::class, 'destroy'])->name('delete');
            Route::get('/{id}', [RombelController::class, 'show'])->name('show');
        });

        Route::prefix('/rayon')->name('rayon.')->group(function () {
            Route::get('/data', [RayonController::class, 'index'])->name('data');
            Route::get('/create', [RayonController::class, 'create'])->name('create');
            Route::post('/store', [RayonController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [RayonController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [RayonController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [RayonController::class, 'destroy'])->name('delete');
            Route::get('/{id}', [RayonController::class, 'show'])->name('show');
        });

        Route::prefix('/user')->name('user.')->group(function () {
            Route::get('/data', [UserController::class, 'index'])->name('data');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/store', [UserController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [UserController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
            Route::get('/{id}', [UserController::class, 'show'])->name('show');
        });

        Route::prefix('/late')->name('late.')->group(function () {
            Route::get('/data', [LateController::class, 'index'])->name('data');
            Route::get('/create', [LateController::class, 'create'])->name('create');
            Route::post('/store', [LateController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [LateController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [LateController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [LateController::class, 'destroy'])->name('delete');
            Route::get('/{id}', [LateController::class, 'show'])->name('show');
            Route::get('/download/{id}', [LateController::class, 'pdf'])->name('pdf');
        });
    });
});


// test
// Route::prefix('/anasya')->name('student.')->group(function () {
    Route::get('/', function () {
        return view('login');
    })->name('login');
    Route::post('/admin/dashboard', [UserController::class, 'loginAuth'])->name('login.auth');
    Route::get('/admin', [UserController::class, 'view'])->name('dashboardlogin');
    // Route::get('/admin', function () {
    //     return view('admin.dashboard');
    // })->name('dashboardlogin');
    
    // Route::get('/rombel', [RombelController::class, 'index'])->name('rombel');
    // Route::get('/user', [UserController::class, 'index'])->name('user');
    // Route::get('/rayon', [RayonController::class, 'index'])->name('rayon');
    // Route::get('/create', [UserController::class, 'create'])->name('create');
    // Route::post('/store', [UserController::class, 'store'])->name('store');
    // Route::get('/admin/rombel/add', function () {
    //     return view('admin.rombel.add');
    // });
    // Route::get('/admin/user/add', function () {
    //     return view('admin.user.add');
    // });
// });