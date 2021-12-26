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
//This route is the homepage where all users can view. Any other route which does not requires log in will be put here.
Route::get('/', 'PagesController@index');
//Larevel's Authentication.
Auth::routes();
//This middleware utilizes auth middleware to prevent users, who are not logged in, view any company's information.
Route::middleware(['auth'])->group(function(){

  Route::get('/customers', 'PagesController@customers')->name('customers');
  Route::get('/add-customer', 'PagesController@addcustomers');
  Route::post('/store-customer', 'PagesController@storecustomers');
  Route::get('/edit-customer/{id}', 'PagesController@editcustomers');
  Route::put('/update-customer/{id}', 'PagesController@updatecustomers');
  Route::get('/search', 'PagesController@searchcustomers');

//This middleware is prevents users who do not have admin status to access the delete functionality.
//Even if they manually put the url for deletion of a customer, the system does not let them delete anyone.
  Route::middleware(['isadmin'])->group(function(){
    Route::get('/delete-customer/{id}', 'PagesController@deletecustomers');
});

});
