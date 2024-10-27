<?php

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


use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/criarpersonagem', [EventController::class, 'criarpersonagem'])->middleware('auth'); //ProjetoIntegrador
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}',[EventController::class,'destroy'])->middleware('auth');
Route::get('/events/edit/{id}',[EventController::class, 'edit'])->middleware('auth');

Route::POST('/events/update/{id}',[EventController::class, 'update'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard',[EventController::class,'dashboard'])->middleware('auth');

Route::get('/library',[EventController::class, 'library'])->middleware('auth');


Route::post('/events/join/{id}',[EventController::class,'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}',[EventController::class,'leaveEvent'])->middleware('auth');

//ProjetoIntegrador
Route::get('/meuspersonagens',[EventController::class, 'meuspersonagens'])->middleware('auth'); //ProjetoIntegrador
