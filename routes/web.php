<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
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

Route::get('/',[MemberController::class,'index'])->name('show');
Route::get('/getMember',[MemberController::class,'show'])->name('getMember');
Route::post('/save',[MemberController::class,'save'])->name('save');
Route::post('/delete',[MemberController::class,'delete'])->name('delete');
Route::post('/update',[MemberController::class,'update'])->name('edit');
