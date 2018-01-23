<?php

Route::get("admin",[
    'uses' => "Phpner\Adminka\Http\Controllers\AdminkaController@index"
]);

/**
 * Routes for Login to admin panel
 */
Route::group(['middleware'=> 'web'],function ()
{
    /**
     * show login form
     */
route::get('login',[
    "uses" => "Phpner\Adminka\Http\Controllers\Auth\LoginController@showLoginForm",
    "as" => "login"
]);

    /**
     * Make Login to admin panel
     */

route::post('login',[
    "uses" => "Phpner\Adminka\Http\Controllers\Auth\LoginController@login",
    "as" => "login"
]);

    /**
     * Snow registration form
     */

route::get('/register',[
    "uses" => "Phpner\Adminka\Http\Controllers\Auth\RegisterController@showRegistrationForm",
    "as" => "register"
]);

    /**
     * Register a new user
     */
route::post('/register',[
    "uses" => "Phpner\Adminka\Http\Controllers\Auth\RegisterController@register",
    "as" => "register"
]);

});


/**
 * Routes admin panel
 */
Route::group(['middleware'=> 'auth'],function ()
{


});