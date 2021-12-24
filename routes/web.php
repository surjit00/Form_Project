<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RegistrationController;
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
    return view('welcome');
});


Route::get('/admin',[AdminController::class,'index']
);

Route::get('/registration', function () {
    return view('Admin/registration');
});
 
 Route::post('store', [RegistrationController::class,'store']
);
Route::get('admin', [RegistrationController::class,'show']
);
Route::get('delete/{id}', [RegistrationController::class,'destroy']
);
Route::get('edit/{id}', [RegistrationController::class,'edit']
);

 