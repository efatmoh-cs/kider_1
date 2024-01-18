<?php

use App\Models\Testimoinal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimoinalController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ClassesController;
use PhpParser\Node\Scalar\MagicConst\Class_;

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
    return view('welcome');
});
// Route::get('testimoinals', function () {
//     return view('testimoinals');
// });
Route::fallback([MainController::class, 'showNotFound']);
Route::get('index', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('classes', [MainController::class, 'classes'])->name('classes');
Route::get('contact', [MainController::class, 'contactUs'])->name('contact');
Route::get('testimonial', [MainController::class, 'testimonial'])->name('testimonial');
Route::get('facility', [MainController::class, 'facility'])->name('facility');
Route::get('team', [MainController::class, 'team'])->name('team');
Route::get('call-to-action', [MainController::class, 'call-to-action'])->name('call-to-action');
Route::get('appointment', [MainController::class, 'appointment'])->name('appointment');

Route::get('admin.addTestimoinal', [TestimoinalController::class,
'create']);
// Route::get('addTestimoinal', [TestimoinalController::class, 'create']);
Route::post('storeTestimonial', [TestimoinalController::class,
'store'])->name('storeTestimonial');
// Route::post('addTestimoinal', [TestimoinalController::class,
// 'store'])->name('addTestimoinal');
Route::get('testimoinals', [TestimoinalController::class, 'index'])->name('testimoinals');
Route::get('edittestimoinal/{id}', [TestimoinalController::class,
'edit'])->name('updatetestimoinal');
Route::put('updatetestimoinal/{id}', [TestimoinalController::class,
'update'])->name('updatetestimoinal');
Route::get('destroytestimoinal/{id}', [TestimoinalController::class,
'destroy'])->name('destroytestimoinal');
Route::get('showtestimoinal/{id}', [TestimoinalController::class, 'show'])->name('showtestimoinal');
Route::get('createtestimoinal', [TestimoinalController::class, 'create'])->name('createtestimoinal');


Route::get('teachers', [TeacherController::class, 'index'])->name('teachers');

Route::get('admin.addTeacher', [TeacherController::class,
'create']);
Route::post('storeTeacher', [TeacherController::class,
'store'])->name('storeTeacher');
Route::get('createteacher', [TeacherController::class, 'create'])->name('createteacher');
Route::get('destroyteacher/{id}', [TeacherController::class,
'destroy'])->name('destroyteacher');
Route::get('showteacher/{id}', [TeacherController::class, 'show'])->name('showteacher');
Route::get('editteacher/{id}', [TeacherController::class,
'edit'])->name('updateteacher');
Route::put('updateteacher/{id}', [TeacherController::class,
'update'])->name('updateteacher');



Route::get('classes', [ClassesController::class, 'index'])->name('classes');
Route::get('admin.addclasses', [ClassesController::class,
'create']);
Route::post('storeClass', [ClassesController::class,
'store'])->name('storeClass');
Route::get('createClass', [ClassesController::class, 'create'])->name('createClass');
Route::get('editclass/{id}', [ClassesController::class,
'edit'])->name('updateclass');
Route::put('updateclass/{id}', [ClassesController::class,
'update'])->name('updateclass');
Route::get('showclass/{id}', [ClassesController::class, 'show'])->name('showclass');
Route::get('destroyClass/{id}', [ClassesController::class,
'destroy'])->name('destroyClass');





Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
