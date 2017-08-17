<?php

Route::get('/', function () {
    $name = 'World';
    $age = 38;
    $tasks = [
    	'Go to the store',
    	'Finish my screencast',
    	'Clean the house'
    ];
    return view('welcome', compact('name', 'age', 'tasks'));
});
