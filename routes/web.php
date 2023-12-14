<?php

use App\Http\Controllers\editor\UserController as AdminUser;
use App\Http\Controllers\editor\ProfileController as AdminProfile;
use App\Http\Controllers\editor\ArticleController as ArticlesAbm;
use App\Http\Controllers\visitor\BlogController as BlogView;
use App\Http\Controllers\editor\ServiceController as AdminService;
use App\Http\Controllers\visitor\ServiceController as ServiceView;
use Illuminate\Support\Facades\Route;

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

Route::resource('users', AdminUser::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('profiles', AdminProfile::class);
   Route::resource('articles', ArticlesAbm::class);
    Route::resource('services', AdminService::class);
});
//metodo no resouceful
Route::get('showLogin', [AdminUser::class , 'showLogin'])->name('showLogin');
Route::post('login', [AdminUser::class , 'login'])->name('login');;
// Vistas para visita
// Route::get('/', function () {
//     return view('visitor.index');
// })

// Route::get('/index', function () {
//     return view('visitor.index');
// });
Route::get('/', [ServiceView::class, 'index'] )->name('home');
Route::resource('blog', BlogView::class);
// Route::resource('services', ServiceView::class);

