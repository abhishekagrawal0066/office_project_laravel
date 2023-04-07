<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\collageRagistrations;
use App\Http\Controllers\CollageAdminLogin;

// use App\Http\Controllers\CollageForm;

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

Route::get('/users',[ UserLogin::class, 'index']);
Route::post('/users/store',[ UserLogin::class, 'store'])->name('users.store');


// Route::resource('user', UserLogin::class); 

// Route::get('/students',function (){
//     return view('students');
// });
// Route::get('/collage',[CollageForm::class, 'index']);
// Route::post('/collage/store',[CollageForm::class, 'store'])->name('collage.store');

//Collage Ragis form
Route::get('/collage',[collageRagistrations::class, 'index']);
Route::post('/collage/store',[collageRagistrations::class, 'store'])->name('collage.ragistration');

//collage admin

// Route::get('/collage/admin',function (){
//     return view('login');
// });
Route::get('/collage/admin',[CollageAdminLogin::class, 'index'])->name('login');
Route::post('/collage/admin/store',[CollageAdminLogin::class, 'store'])->name('collage.admin.login');
// Route::post('/collage/admin/store',[CollageAdminLogin::class, 'store'])->name('collage.admin.login');
Route::get('/collage/admin/dashboard', [CollageAdminLogin::class, 'dashboard']); 

Route::get('/collage/admin/logout', [CollageAdminLogin::class, 'logout'])->name('logout');

// Route::get('/registration',function (){
//     return view('collage/registration');
// });