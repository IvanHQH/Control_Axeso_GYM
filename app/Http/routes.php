<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/quick_search', function () {
    //echo "hello";
    return view('quick_search.QuickSearch');
});

Route::resource('members_list', 'HomeController@members_list');
Route::resource('memberships_types_list', 'HomeController@memberships_types_list');
Route::resource('available_memberships_types', 'HomeController@available_memberships_types');
Route::resource('unavailable_memberships_types', 'HomeController@unavailable_memberships_types');
Route::resource('active_memberships', 'HomeController@active_memberships');
Route::resource('inactive_memberships', 'HomeController@inactive_memberships');
Route::resource('expiring_memberships', 'HomeController@expiring_memberships');
Route::resource('memberships_sold', 'HomeController@memberships_sold');
Route::resource('memberships_paymets', 'HomeController@memberships_paymets');

/*
|------------------------------------------------------------------------
| Routes Login
|------------------------------------------------------------------------
*/

Route::get('/visitors_list', function(){
	return view('visitors.visitors_list');
});

/*
|-------------------------------------------------------------------------
| Routes for cashbox
|-------------------------------------------------------------------------
*/

Route::get('/incomes', function(){
	return view('cashbox.income');
});

Route::get('/turner_cash', function(){
	return view('cashbox.cash_out');
});

Route::get('/outcomes', function(){
	return view('cashbox.expenses');
});

Route::get('/settings_turner_cash', function(){
	return view('cashbox.adjustments');
});

/*
|------------------------------------------------------------------------
| Routes Login
|------------------------------------------------------------------------
*/

Route::get('/', function(){
    return view('login.login');
});
