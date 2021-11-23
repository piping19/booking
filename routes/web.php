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

Route::get('/', function () {
    return view('welcome', ['title' => 'WEB LESS SURFING']);
});

Route::get('home', function () {
    return view('home');
});


Route::get('edulevels', 'EdulevelController@data');          // <== Tampil data
Route::get('edulevels/add', 'EdulevelController@add');       // <== Tambah data
Route::post('edulevels', 'EdulevelController@addProcess');     // <== Proses tambah
Route::get('edulevels/edit/{id}', 'EdulevelController@edit');  // <==  Edit data
Route::patch('edulevels/{id}','EdulevelController@editProcess'); // <== Proses edit
Route::delete('edulevels/{id}','EdulevelController@delete');     // <== Hapus data


Route::get('programs/trash', 'ProgramController@trash');
Route::get('programs/restore/{id?}', 'ProgramController@restore');
Route::get('programs/delete/{id?}', 'ProgramController@delete');
Route::resource('programs', 'ProgramController');







