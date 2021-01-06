<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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



Route::get( 
    '/',   
    [ItemController::class , 
    'home'] 
)->name('home.route');

Route::post( 
    '/',   
    [ItemController::class , 
    'home'] 
)->name('paginate.route');

Route::get(
    '/bd-mangas-{slug}',
    [ItemController::class ,
    'item']
)->name('item.route');

Route::get(
    '/edit-id{id}',
    [ItemController::class ,
    'edit']
)->name('edit.route');

Route::post(   
    '/edit-id{id}',
    [ItemController::class ,
    'save']
)->name('save.route');


Route::post(
    '/delete{id}',
    [ItemController::class ,
    'delete']
)->name('delete.route');

Route::get(
    '/addnew',
    [ItemController::class,
    'addNewGet']
)->name('addnew.route');

Route::post(
    '/addnew',
    [ItemController::class,
    'addNewPost']
)->name('postnew.route');