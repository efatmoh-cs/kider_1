<?php

use App\Models\Testimoinal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimoinalController;
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
Route::get('home', function () {
    return view('home');
})->name('home');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('facility', function () {
    return view('facility');
})->name('facility');
Route::get('classes', function () {
    return view('classes');
})->name('classes');
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('call-to-action', function () {
    return view('call-to-action');
})->name('call-to-action');
Route::get('appointment', function () {
    return view('appointment');
})->name('appointment');
Route::get('team', function () {
    return view('team');
})->name('team');
Route::get('Testimonial', function () {
    return view('Testimonial');
})->name('testimonial');
Route::get('404', function () {
    return view('404');
})->name('404');


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
