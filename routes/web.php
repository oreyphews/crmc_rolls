<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcadyrController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DepartmentSingleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnnounceMentsController;

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
//     return view('login');
// });
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'signIn'])->name('signin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware('auth');

Route::get('admin/dashboard', [AnnounceMentsController::class, 'displayAnnouncements']);
Route::post('admin/dashboard', [AnnounceMentsController::class, 'addAnnouncement'])->name('addAnnouncement');




Route::get('admin/accounts', function () {
    return view('admin/accounts');
});
Route::post('admin/accounts', [UserController::class, 'addNewUser']);
Route::get('admin/accounts', [UserController::class, 'showDepartments']);

Route::get('admin/departments', function () {
    return view('admin/departments');
});

Route::post('admin/departments', [DepartmentController::class, 'createDepartment']);
Route::get('admin/departments', [DepartmentController::class, 'showDepartments']);

 Route::get('admin/departments/{id}', function () {
     return view('admin/dept-single');
 });
Route::get('admin/departments/{id}', [DepartmentSingleController::class,'getdepartment']);

Route::get('admin/academicyear', function () {
    return view('admin/academicyear');
});



Route::post('admin/academicyear', [AcadyrController::class, 'addNewAcadyr']);
Route::get('admin/academicyear', [AcadyrController::class, 'showAcadyrs']);

Route::get('coordinator/dashboard', function () {
    return view('coordinator/dashboard');
});

Route::get('teacher/dashboard', function () {
    return view('teacher/dashboard');
});

Route::get('student/dashboard', function () {
    return view('student/dashboard');
});