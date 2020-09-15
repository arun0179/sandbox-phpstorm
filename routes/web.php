<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/home', [PagesController::class,'index']);
Route::get('/pages', function () {
    return view('pages.index');
});
Route::get('/pages/{id}',function ($id) {
    return view('pages.show', [
        'name' => 'Jeong Jay',
        'id' => $id,
        'text' => '<h3>h3 Text<h3>',
        'array' => [],
        'records' => 'Hello there, I exist'
    ]);
});
