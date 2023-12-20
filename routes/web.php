<?php

use App\Http\Controllers\editor\UserController as AdminUser;
use App\Http\Controllers\editor\ProfileController as AdminProfile;
use App\Http\Controllers\editor\ArticleController as ArticlesAbm;
use App\Http\Controllers\visitor\BlogController as BlogView;
use App\Http\Controllers\editor\ServiceController as AdminService;
use App\Http\Controllers\guest\GuestController as GuestUser;
use App\Http\Controllers\guest\ProfileGuestController as GuestProfile;
use App\Http\Controllers\visitor\ServiceController as ServiceView;
use App\Http\Controllers\guest\ServiceGuestController as ServiceGuestView;
use App\Http\Controllers\guest\ContractedServicesController as ContractedServices;
use App\Models\ContractedService;
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
Route::resource('guests', GuestUser::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('profiles', AdminProfile::class);
    Route::resource('guest-profiles', GuestProfile::class);
    Route::get('home-guest', [GuestProfile::class ,'showProfileGuest'])->name('home-guest');
    Route::get('services-avalible',[ServiceGuestView::class,'index'])->name('services-avalible');
    
    // Route::get('home-guest', [ProfileGuestController::class ,'showProfileGuest'])->name('home-guest');
    Route::resource('articles', ArticlesAbm::class);
    Route::resource('services', AdminService::class);
    Route::resource('contract_service',  ContractedServices::class);
   
});
//metodo no resouceful
//rutas login admin
Route::get('showLogin', [AdminUser::class , 'showLogin'])->name('showLogin');
Route::post('login', [AdminUser::class , 'login'])->name('login');;
//rutas login guest

Route::get('showAccess', [GuestUser::class , 'showAccess'])->name('showAccess');
Route::post('access-guest',[GuestUser::class, 'loginGuest'])->name('access-guest');


Route::get('/', [ServiceView::class, 'index'] )->name('home');


Route::resource('blog', BlogView::class);
// Route::resource('services', ServiceView::class);

//Rolchoice
Route::get('/rol-choice', function () {
    return view('rol-choice');
})->name('rol-choice');

Route::get('/login-guest', function () {
    return view('login-guest');
})->name('login-guest');

Route::get('/login-admin', function () {
    return view('login-admin');
})->name('login-admin');

