<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;



//Admin pannel Routes

Route::get('/admin-login', [Admin::class, 'adminloginpage'])->name('loginpage');
Route::post('login-admin', [Admin::class, 'loginFunction'])->name('loginfunction');
Route::get('/admin-register', [Admin::class, 'adminRegisterpage'])->name('adminRegister');
Route::post('registerfunction', [Admin::class, 'RegisterFunction'])->name('RegisterFunction');




Route::get('/admin-logout', [Admin::class, 'logout'])->name('logout');
Route::get('/admin-users', [Admin::class, 'adminuserspage'])->name('adminuserspage');
Route::get('/admin-writers', [Admin::class, 'adminwriterspage'])->name('adminwriterspage');
Route::get('/admin-index', [Admin::class, 'admindashboard'])->name('dashboardpage');
Route::get('/admin-leads', [Admin::class, 'adminleadspage'])->name('adminleadspage');
Route::get('/admin-orders', [Admin::class, 'adminorderspage'])->name('adminorderspage');
Route::get('/admin-visitors', [Admin::class, 'adminvisitorspage'])->name('adminvisitorspage');
Route::get('/admin-profile', [Admin::class, 'adminprofilepage'])->name('adminprofilepage');
Route::post('/admin-Add-Writers', [Admin::class, 'AddWriters'])->name('AddWriters');

Route::get('/admin-Writers-details', [Admin::class, 'Writersdetailpage'])->name('Writersdetailpage');
Route::get('/admin-users-details', [Admin::class, 'userdetailpage'])->name('userdetailpage');


Route::post('/admin-order-detail', [Admin::class, 'orderdetailpage'])->name('orderdetailpage');
Route::post('/admin-order-assign', [Admin::class, 'assignorder'])->name('assignorder');
Route::post('/final-order-Assign', [Admin::class, 'FinalAssignTask'])->name('FinalAssignTask');


Route::get('/admin-working-order', [Admin::class, 'workingorder'])->name('workingorder');


Route::middleware('adminguard')->group(function () {});
