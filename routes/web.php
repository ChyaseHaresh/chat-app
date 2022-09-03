<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookController;
use App\Models\Appointment;


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
    $result['data']=Appointment::all();

    return view('welcome',$result);
});

Route::get('/book/{id}',[BookController::class,'index']);

Route::get('/admin/dashboard/status/{status}/{id}',[AppointmentController::class,'edit']);

Route::get('admin',[AdminController::class,'index']);
Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::get('admin/notices',[MessageController::class,'index']);
Route::get('admin/appointment',[AppointmentController::class,'index']);
Route::get('admin/staff',[StaffController::class,'index']);
Route::get('admin/staff/add',[StaffController::class,'add_staff']);

Route::post('admin/message/send',[MessageController::class,'send'])->name('message.send');
Route::post('admin/staff/add_process',[StaffController::class,'add_staff_process'])->name('staff.add');

Route::post('admin/appointment/add_process',[AppointmentController::class,'add_appointment_process'])->name('appointment.add');
Route::post('book/add_process',[BookController::class,'add_book_process'])->name('booking.add');


