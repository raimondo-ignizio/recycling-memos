<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

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
    return view('index');
});

Route::get("form", function() {
    return view("form");
});

Route::get("memo", [MemoController::class, "read"]);
Route::post("memo", [MemoController::class, "create"]);

Route::get("delete-all", [MemoController::class, "deleteAll"]);

Route::post("delete", [MemoController::class, "delete"]);

Route::get("today", [MemoController::class, "showToday"]);
Route::get("week", [MemoController::class, "showWeek"]);
