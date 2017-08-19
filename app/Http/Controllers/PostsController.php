<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Post
use App\Post;
class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }
    public function show()
    {
    	return view('posts.show');
    }    
    public function create()
    {
    	return view('posts.create');
    }    
    public function store()
    {
    	// Create a new post using the request data
    	// $post = new Post;
    	// $post->title = request('title');
    	// $post->body = request('body');
    	// Save it to the DB
    	// $post->save();

    	// BETTER WAY
    	Post::create(request(['title', 'body']));
    	// Redirect to the home page
    	return redirect('/');
    }
}
