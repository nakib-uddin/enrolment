<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddstudentController;
use App\Http\Controllers\AllstudentController;
use App\Http\Controllers\BbaController;
use App\Http\Controllers\CseController;
use App\Http\Controllers\EeeController;
use App\Http\Controllers\EteController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TutionController;
use App\Http\Middleware\DisableAuthCaching;

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

//logout
Route::get('/logout', [AdminController::class, 'signOut'])->name('/logout');

Route::get('/', function () {
    return view('student_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});
//admin
Route::post('/dashboard', [AdminController::class, 'customLogin'])->name('dashboard');
Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('/admindashboard');
Route::get('/viewprofile', [AdminController::class, 'view'])->name('/viewprofile');
Route::get('/setting', [AdminController::class, 'setting'])->name('/setting');
Route::get('/addstudent', [AddstudentController::class, 'addstudent'])->name('/addstudent');
Route::post('/save_student', [AddstudentController::class, 'store'])->name('/save_student');
Route::get('/allstudent', [AllstudentController::class, 'allstudent'])->name('/allstudent');


Route::get('/tutionfee', [TutionController::class, 'tutionfee'])->name('/tutionfee');
Route::get('/allteacher', [TeacherController::class, 'allteacher'])->name('/allteacher');
Route::get('/bba', [BbaController::class, 'bba'])->name('/bba');
Route::get('/cse', [CseController::class, 'cse'])->name('/cse');
Route::get('/ete', [EteController::class, 'ete'])->name('/ete');
Route::get('/eee', [EeeController::class, 'eee'])->name('/eee');
Route::get('/pharmacy', [PharmacyController::class, 'pharmacy'])->name('/pharmacy');






