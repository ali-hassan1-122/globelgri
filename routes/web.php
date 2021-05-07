<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});


Route::namespace('Admin')->prefix('admin')->as('admin.')->group(function () {
    Auth::routes(['register' => true]);


    /****************************** Admin ***************************/


    Route::get('/', 'AdminController@index')->name('home');

    Route::get('/logout', 'AdminController@logout')->name('logout');

    Route::get('/profile', 'AdminController@profile')->name('profile');

    Route::post('/profile/update', 'AdminController@update')->name('profile.update');



    /****************************** Agent ***************************/

    Route::get('/agents', 'Agent\AgentController@index')->name('agents');

    Route::get('agent/create', 'Agent\AgentController@agentForm')->name('addagent');

    Route::post('agent/store', 'Agent\AgentController@agentStore')->name('agent.store');

    Route::post('agent/destroy', 'Agent\AgentController@destroyAgent')->name('agent.destroy');

    Route::post('agent/delete/', 'Agent\AgentController@deleteAgent')->name('agent.delete');

    Route::get('agent/edit/{id}', 'Agent\AgentController@edit')->name('agent.edit');

    Route::post('agent/update', 'Agent\AgentController@agentUpdate')->name('agent.update');

    Route::post('agent/recover', 'Agent\AgentController@recoverAgent')->name('agent.recover');

    Route::get('trashed-agent', 'Agent\AgentController@trash')->name('trash');

    Route::post('agent/ban', 'Agent\AgentController@banAgent')->name('agent.ban');

    Route::post('agent/unban', 'Agent\AgentController@unbanAgent')->name('agent.unban');



    /****************************** Products ***************************/

    Route::get('/products', 'ProductController@index')->name('products');

    Route::get('product/create', 'ProductController@create')->name('product.create');
});


/****************************** User ***************************/

Route::namespace('User')->as('user.')->group(function () {


    Route::get('/agent/dashboard', 'UserController@dashboard')->name('dashboard');

    Route::get('profile', 'UserController@profile')->name('profile');

    Route::post('profile/update', 'UserController@profileupdate')->name('profile.update');
});

/****************************** Frontend ************************/

Route::get('/', 'Frontend\FrontEndController@index')->name('index');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
