<?php

// T.J. Mahaffey - 10/12/2015
// Routes for Verso
// You will most likely want to wrap this route inside a route group with auth middleware to secure create, edit, update methods. 
Route::resource('page', 'VersoController');		

// Keep this route public.
Route::get('/{slug}', 'VersoController@show');

// Optional route to handle homepage view.
// Use this route if you'd like Verso to handle your homepage as well.
Route::get('/', 'VersoController@home');
