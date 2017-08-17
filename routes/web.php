<?php

Route::get('/', function () {
    $tasks = DB::table('tasks')->get();
    // return $tasks;
    return view('welcome', compact('tasks'));
});

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->latest()->get();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{id}', function ($id) {
    $task = DB::table('tasks')->find($id);
    // dd($task);
    return view('tasks/show', compact('task'));
});