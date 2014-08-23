<?php

/**
 * Home Routes
 * 
 * @author Dylan Pierce <me@dylanjohnpierce.com>
*/

Route::get('/', 'HomeController@index');
Route::post('/contact', 'HomeController@handleContact');
