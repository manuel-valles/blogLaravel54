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

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->latest()->get();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{id}', function ($id) {
    // QUERY BUILDER
    // $task = DB::table('tasks')->find($id);
    // dd($task);

    // ELOQUENT
    $task = Task::find($id);
    return view('tasks/show', compact('task'));
});