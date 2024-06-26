<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\declarationcontroller;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Gate;
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

Route::get('/', function () {
    return view('welcome')->name('welcome');
});
Route::get('/declare',[userController::class, 'declare']);



Route::group(['middleware' => ['auth.admin']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
})->name('dashboard')->middleware('auth.admin');



 Route::resource('reports', ReportController :: class );


 Route::resource('categories', CategoryController :: class );


Route::post('/postdec', [ReportController::class, 'store'])->name('postdec');



Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/profil/{id}', [UserController::class, 'show'])->name('profil');




Route::put('/reports/{report}/update-status', [ReportController::class, 'updateStatus'])->name('update-status');






Route::middleware('auth')->group(function () {
   

    Route::get('/declaration',[declarationcontroller::class,'show'])->name('declaration');
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






