<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\AdminDashboardController;



Route::get('/',[FrontController::class,'home'])->name('home');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/destinations',[FrontController::class,'destinations'])->name('destinations');
Route::get('/destination',[FrontController::class,'destination'])->name('destination');
Route::get('/packages',[FrontController::class,'packages'])->name('packages');
Route::get('/team-members',[FrontController::class,'teamMembers'])->name('team-members');
Route::get('/team-member',[FrontController::class,'teamMember'])->name('team-member');
Route::get('/faq',[FrontController::class,'faq'])->name('faq');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/post',[FrontController::class,'post'])->name('post');
Route::get('/category',[FrontController::class,'category'])->name('category');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/terms',[FrontController::class,'terms'])->name('terms');
Route::get('/privacy',[FrontController::class,'privacy'])->name('privacy');
Route::get('/login',[FrontController::class,'login'])->name('login');
Route::get('/forget-password',[FrontController::class,'forgetpassword'])->name('forget-password-user');
Route::get('/register',[FrontController::class,'register'])->name('register');
Route::post('/register',[FrontController::class,'register_submit'])->name('register_submit');
Route::get('/register-verify-email/{email}/{token}',[FrontController::class,'register_verify_email'])->name('register_email_verify');





Route::middleware('admin')->prefix('admin')->group(function() {
    Route::get('/dashboard',[AdminDashboardController::class,'dashboard'])->name('admin_dashboard');
    Route::get('/profile',[AdminAuthController::class,'profile'])->name('admin_profile');
    Route::post('/profile',[AdminAuthController::class,'profile_submit'])->name('admin_profile_submit');
});

Route::prefix('admin')->group(function(){
    Route::get('/login',[AdminAuthController::class,'login'])->name('admin_login');
    Route::post('/login',[AdminAuthController::class,'login_submit'])->name('admin_login_submit');
    Route::get('/logout',[AdminAuthController::class,'logout'])->name('admin_logout');
    Route::get('/forget-password',[AdminAuthController::class,'forget_password'])->name('forget-password');
    Route::post('/forget-password',[AdminAuthController::class,'forget_password_submit'])->name('forget_password_submit');
    Route::get('/reset-password/{token}/{email}',[AdminAuthController::class,'reset_password'])->name('admin_reset_password');
    Route::post('/reset-password/{token}/{email}',[AdminAuthController::class,'reset_password_submit'])->name('admin_reset_password_submit');
    
    
});
    


