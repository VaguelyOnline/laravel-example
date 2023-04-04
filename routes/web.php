<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;
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

Route::get('/', [WelcomeController::class, 'showWelcome'])->name('welcome');

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');

// Route to show the calculator view (don't forget to name!)
// Route::get(???)

// Nathan is lazy - you should not be!
// You: To create a controller / action to handle the request
// hint: php artisan make:controller ???
Route::post('/calculator', function (Request $request) {

    // Choose appropriate validation rules: search 'validation / available validation rules'
    // Custom validation rule?
    $params = $request->validate([
        'num1' => [
            'required'
        ]
    ]);

    // perform calculation

    // return an appropriate view

    return $params['num1'];

})->name('calculator.calculate');


