<?php

// Import T for shorter code
use App\Task;

Route::get('/', function () {
	// QUERY BUILDER
    // $tasks = DB::table('tasks')->get();
    // return $tasks;

    // ELOQUENT
    $tasks = Task::all();
    return view('welcome', compact('tasks'));
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{id}', 'TasksController@show');