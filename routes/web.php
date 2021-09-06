<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
//
//Route::get('welcome', function () {
//    return view('welcome');
//});

'Auth'::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'UserController@index')->name('users.index');

Route::get('/user/{id}', 'UserController@getProjects')->name('user');

Route::post('technology', 'TechnologiesController@store')->name('technology.store');

Route::post('technologyAssociate', 'TechnologiesController@associate')->name('technology.associate');

Route::delete('technology/{id}/delete', 'TechnologiesController@destroy')->name('technology.destroy');

// Route::delete('technology/{id}/delete', function (){
//     dd('llegue a las rutas');
// })->name('technology.destroy');




Route::post('project', 'ProjectsController@store')->name('project.store');

Route::get('project/{id}/edit', 'ProjectsController@edit')->name('project.edit');

Route::delete('project/{id}/delete', 'ProjectsController@destroy')->name('project.destroy');

Route::put('project/{id}/update', 'ProjectsController@update')->name('project.update');

Route::put('technology/{id}/update', 'TechnologiesController@update')->name('technology.update');

// Route::get('technologies' , 'TechnologiesController@getTechnologies')->name('technologies@get');


// Route::get('/user/{id}/data', 'UserController@getUserData')->name('user.data');

// Route::post('project', 'ProjectsController@store')->name('projects.store');


