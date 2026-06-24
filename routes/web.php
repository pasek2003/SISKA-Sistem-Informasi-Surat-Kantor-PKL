<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\ApprovalController;

Route::get('/',[AuthController::class,'loginForm']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/dashboard',[DashboardController::class,'index']);

Route::resource('/surat-masuk',SuratMasukController::class);
Route::resource('/surat-keluar',SuratKeluarController::class);
Route::resource('/disposisi',DisposisiController::class);

Route::get('/approve',[ApprovalController::class,'index']);
Route::get('/approve/{id}',[ApprovalController::class,'approve']);