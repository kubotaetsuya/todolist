<?php

use Illuminate\Support\Facades\Route;

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
