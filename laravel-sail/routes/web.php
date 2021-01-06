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
)->name('home.view');

Route::post( 
    '/',   
    [ItemController::class , 
    'home'] 
)->name('paginate.post');

Route::get(
    '/item-{slug}',
    [ItemController::class ,
    'item']
)->name('item.view');

Route::get(
    '/edit-id{id}',
    [ItemController::class ,
    'edit']
)->name('edit.view');

Route::post(   
    '/edit-id{id}',
    [ItemController::class ,
    'save']
)->name('save.post');


Route::post(
    '/delete{id}',
    [ItemController::class ,
    'delete']
)->name('delete.item');

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