<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('get-name', [maincontroller::class, 'getname']);
Route::post('add-name', [maincontroller::class, 'addname']);
Route::post('update-name', [maincontroller::class, 'updatename']);
Route::post('delete-name', [maincontroller::class, 'deletename']);