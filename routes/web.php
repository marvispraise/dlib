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


Route::group(['middleware' => ['auth']], function () {
//    Route::group(['middleware' => ['superAdmin']], function () {
        Route::group(['middleware' => ['admin']], function () {

        //////////////Dashboard Controller
    Route::get('/', 'DashboardController@home')->name('index');

    ////////////////Library Controller
    Route::get('/library', 'LibraryController@view')->name('viewLibrary');
    Route::post('/addLibrary', 'LibraryController@addLibrary')->name('addLibrary');
    Route::get('/shelf/{library}', 'LibraryController@viewShelf')->name('viewShelf');
    Route::post('/addShelf/{library}', 'LibraryController@addShelf')->name('addShelf');
    Route::get('/section/{shelf}', 'LibraryController@viewSection')->name('viewSection');
    Route::post('/addSection/{shelf}', 'LibraryController@addSection')->name('addSection');
    Route::get('/row/{section}', 'LibraryController@viewRow')->name('viewRow');
    Route::post('/addRow/{section}', 'LibraryController@addRow')->name('addRow');
    Route::get('/tapes/{row}', 'LibraryController@viewRowTape')->name('viewRowTape');

    //////////////////TapesController
    Route::get('/program', 'LibraryController@viewProgram')->name('viewProgram');
    Route::get('/addProgram', 'LibraryController@addProgram')->name('addProgram');

        });
//    });
});

