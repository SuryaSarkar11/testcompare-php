<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testContainer;
use App\Http\Controllers\googleSheetController;

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
Route::get('/test', [testContainer::class,'index']);
Route::get('/sheet', [googleSheetController::class,'sheetOperation']);
Route::get('/drive', [googleSheetController::class,'readDrive']);
