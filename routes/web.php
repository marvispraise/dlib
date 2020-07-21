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
    Route::get('/', 'DashboardController@home')->name('index');
        Route::group(['middleware' => ['admin']], function () {

        //////////////Dashboard Controller

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
    Route::post('/addRowTape/{row}', 'LibraryController@addRowTape')->name('addRowTape');

    //////////////////TapesController
    Route::get('/program', 'TapesController@viewProgram')->name('viewProgram');
    Route::post('/addProgram', 'TapesController@addProgram')->name('addProgram');
    Route::get('/tapes', 'TapesController@viewTape')->name('viewTape');
    Route::post('/addTape', 'TapesController@addTape')->name('addTape');
    Route::get('/viewTapeLL', 'TapesController@viewTapeLL')->name('viewTapeLL');
    Route::post('/loginTape', 'TapesController@loginTape')->name('loginTape');
    Route::post('/logoutTape', 'TapesController@logoutTape')->name('logoutTape');

    ////////usersController


    //////////loansController
    Route::get('/tapeRequest', 'LoansController@viewRequestedTape')->name('tapeRequest');
    Route::get('/accept/{id}', 'LoansController@accept')->name('accept');
    Route::get('/decline/{id}', 'LoansController@decline')->name('decline');

        // Route::post('/users', 'UsersController@addUser')->name('addUser');

        });
    Route::get('/requestTape', 'LoansController@requestForm')->name('requestForm');
//    Route::get('/searchTape', 'LoansController@searchTape')->name('searchTape');
    Route::get('/searchP', 'LoansController@searchP')->name('searchP');

    Route::get('/viewLoan/{id}', 'LoansController@viewLoan')->name('viewLoan');
    Route::post('/loanTape', 'LoansController@loanTape')->name('loanTape');
    Route::get('/users', 'UsersController@viewUser')->name('viewUser')->middleware('superAdmin');
    Route::post('/users', 'UsersController@addUser')->name('addUser')->middleware('superAdmin');

});

