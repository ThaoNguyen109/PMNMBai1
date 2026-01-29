<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('login');
});

Route::get('/test', function () {
    return response()->json("Helloworld");
});

Route::prefix('product')->group(function () {
    Route::controller(ProductController::class)->group(function (){
        // Route::get('/', 'index')->middleware([checkTimeAccess::class]);
        Route::get('/', 'index');
        Route::get('/add', 'create')->name('add');
        Route::get('/detail/{id?}', 'getDetail');
        Route::post('/store', 'store');
        Route::get('/{id?}', 'edit');
    });
    // Route::get('/', [ProductController::class, "index"]);
    // Route::get('/add', [ProductController::class, "create   "])->name('add');
    // Route::get('/detail/{id?}',  [ProductController::class, "getDetail"]);
});
Route::fallback(function () {
    return view('error.404');
});
Route::get('/sinhvienView/{name?}/{mssv?}', function (
    $name = 'Luong Xuan Hieu',
    $mssv = '123456'
) {
    return view('sinhvien', [
        'name' => $name,
        'mssv' => $mssv
    ]);
});
Route::get('/sinhvien/{name?}/{mssv?}', function (
    $name = 'Luong Xuan Hieu',
    $mssv = '123456'
) {
    return "Thông tin sinh viên:\n"
         . "Họ tên: $name\n"
         . "MSSV: $mssv";
});

Route::get('/banco/{n}', function ($n) {
    return view('banco', [
        'n' => $n
    ]);
});


//lam đăng nhập, đăng ký
Route::prefix('auth')->group(function () {
    Route::controller(AuthController::class)->group(function (){
        Route::post('/checkLogin', 'checkLogin');
        Route::get('/login', 'login');
        Route::get('/register', 'register');
        Route::post('/checkRegister', 'checkRegister');
    });
});
//tuoi
Route::get('/age', function () {
    return view('age');
});

use Illuminate\Http\Request;
Route::post('/save-age', function (Request $request) {
    session(['age' => $request->input('age')]);
    return redirect('/hello');
});
Route::get('/hello', function () {
    return view('hello');
})->middleware([App\Http\Middleware\CheckAge::class]);




