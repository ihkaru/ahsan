<?php

use App\Http\Controllers\ArtisanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function (){
    return redirect("/admin/login");
})->name("login");
Route::get('/', function () {
    return redirect('/admin');
});
Route::get("/artisan",[ArtisanController::class,"run"]);

