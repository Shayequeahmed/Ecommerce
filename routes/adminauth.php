<?php 

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::prefix('/admin')->group(function() {

   Route::group(['middleware' => 'admin.guest'],function() {
        Route::get('login',[AdminController::class,'login'])->name('admin.login');
        Route::post('auth',[AdminController::class,'authenticate'])->name('admin.auth');
   });

   Route::group(['middleware' => 'admin.auth'], function() {
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');



        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
   });
});


?>