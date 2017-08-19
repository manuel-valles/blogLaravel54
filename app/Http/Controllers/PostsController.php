<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Post
use App\Post;
class PostsController extends Controller
{
    public function index()
    {
        // latest for desc order and oldest for asc
        // It's like ::orderBy('created_at', desc);
        $posts = Post::latest()->get();
    	return view('posts.index', compact('posts'));
    }
    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }    
    public function create()
    {
    	return view('posts.create');
    }    
    public function store()
    {
    	$this->validate(request(), [
			'title' => 'required',
			'body' 	=> 'required'
    	]);
    	Post::create(request(['title', 'body']));
    	return redirect('/');
    }
}
