<?php

Route::get('/', 'TodosController@index');

Route::resource('todos', 'TodosController');
