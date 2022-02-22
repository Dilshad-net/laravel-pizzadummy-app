<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isNan;

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

Route::get('/pizzas', [PizzaController::class, 'index']);

// 'PizzaController@show'

Route::get('/pizzas/{id}', [PizzaController::class, 'show']
    // use the id to query / fetch data from db
);