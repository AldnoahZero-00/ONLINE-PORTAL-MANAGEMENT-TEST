<?php

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ROUTES FOR FINANCE
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/finances',         'App\Http\Controllers\FinanceController@index') ->name('finances.index'); 
    Route::get('/finances',         'App\Http\Controllers\FinanceController@index') ->name('finances.index'); // for index
    Route::post('/finances/{id}',   'App\Http\Controllers\FinanceController@verify')->name('finances.verify'); // for verifying students
    Route::post('/finances',        'App\Http\Controllers\FinanceController@enroll')->name('finances.enroll'); // for enrolling students
    Route::get('/finances/{id}',    'App\Http\Controllers\FinanceController@show')  ->name('finances.show');// for index
  });





// ROUTES FOR STUDENTS 
Route::get('/students', function () { 
    return view('students.index'); 
});
Route::get('/students',         'App\Http\Controllers\StudentController@index');
Route::get('/students/create',  'App\Http\Controllers\StudentController@create');
Route::post('/students/create', 'App\Http\Controllers\StudentController@store');
Route::get('/students/{id}',    'App\Http\Controllers\StudentController@show');// for index




// ROUTES FOR AUTHENTICATION 



