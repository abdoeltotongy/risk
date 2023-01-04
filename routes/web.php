<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpportunityController;

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
// Route::prefix('admin')->group(function (){

// Route::get('dashboard', function () {
//     return view('admin.dashboard');
// });


// Route::get('department',[DepartmentController::class, 'index'])->name('department');
// Route::post('department',[DepartmentController::class, 'create']) ;
// Route::post('department/edit', [DepartmentController::class, 'edit'])->name('department.edit');
// Route::get('department/delete/{department}', [DepartmentController::class, 'delete']);

// Route::get('user',[UserController::class, 'index'])->name('users') ;
// Route::post('user',[UserController::class, 'create']) ;
// Route::get('user/delete/{user}', [UserController::class, 'delete']);
// Route::post('user/edit', [UserController::class, 'edit'])->name('user.edit');


Route::middleware(['auth'])->group(function () {
    // Route::get('/', function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });


    Route::get('department',[DepartmentController::class, 'index'])->name('department');
    Route::post('department',[DepartmentController::class, 'create']) ;
    Route::post('department/edit', [DepartmentController::class, 'edit'])->name('department.edit');
    Route::get('department/delete/{department}', [DepartmentController::class, 'delete']);

    Route::get('user',[UserController::class, 'index'])->name('users') ;
    Route::post('user',[UserController::class, 'create']) ;
    Route::get('user/delete/{user}', [UserController::class, 'delete']);
    Route::post('user/edit', [UserController::class, 'edit'])->name('user.edit');



    Route::get('/',[HomeController::class, 'index']);

    Route::resource('risk', RiskController::class);
    Route::get('risk/report/{risk}',[RiskController::class,'report']);
    Route::post('risk/report/{risk}',[RiskController::class,'reportUpdate'])->name('risk.report.store');

    Route::resource('opportunity', OpportunityController::class);
    Route::get('opportunity/report/{opportunity}',[OpportunityController::class,'report']);
    Route::post('opportunity/report/{opportunity}',[OpportunityController::class,'reportUpdate'])->name('opportunity.report.store');
});