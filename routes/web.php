<?php

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewEmployees;


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


Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
       return view('dashboard');

       // return redirect()->route('dashboard')->with('message', 'Profile saved successfully');

    })->name('dashboard');

    Route::post('/dashboard', [\App\Http\Controllers\EmployeeRegistrationController::class, 'update'])->name('emp.post');
//return back()->with('view','post added successfully');
       // Employee::create($request);
   // session()->flash('success','account created successfully');
       // return redirect('/');
    });
    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');



 Route::view('edit', 'edit')->name('edit');
    Route::post('edit', [\App\Http\Controllers\ViewEmployees::class, 'update'])
        ->name('emp.update');

    Route::resource('tasks', \App\Http\Controllers\TaskController::class);
    //Route::get('view', 'ViewEmployees')->name('ViewEmployees');
   // Route::get('view', 'App\Http\Controllers\ViewEmployees');i
  Route::get('view', [ViewEmployees::class, 'view']);

  Route::get('/export', 'ViewEmployees@export')->name('export');
Route::get('/edit/{id}', [ViewEmployees::class,'edit'])->name('edit.view');
Route::post('/edit/{id}', [ViewEmployees::class,'edit'])->name('edit.view');
    //Route::get('delete_view/{id}', [ViewEmployees::class, 'delete.view']);
  //Route::view('view', 'ViewEmployees')->name('View');

  Route::get('delete/{id}', 'ViewEmployees@view')->name('delete');




Route::get('view', 'ViewEmployees@view')->name('view.view');
Route::delete('/employees/{id}', 'ViewEmployees@destroy')
    ->name('view.destroy');


Route::post('empl/update', [ViewEmployees::class,'updateEmp'])->name('emp.update');






require __DIR__.'/auth.php';
