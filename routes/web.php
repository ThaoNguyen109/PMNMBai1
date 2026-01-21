<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('hello');
});
Route::get('/test', function () {
    return response()->json("Helloworld");
});


Route::prefix('product')->group(function () {
    Route::get('/', function () {
        return view('product.index');
    });
    Route::get('/add', function () {
        return view('product.add');
    })->name('add');
    Route::get('/{id?}', function (?string $id = "123") {
        return view('product.productDetail', ['id' => $id]);
    });
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



