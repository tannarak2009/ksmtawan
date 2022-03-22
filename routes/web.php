<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ToDoController;
use Illuminate\Routing\ViewController;
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

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/trainer', [TestController::class, 'cubaan']);

Route::get('/todos', [ToDoController::class, 'index']);
