<?php

namespace App\Http\Controllers;

use App\Models\Post;
// import model

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // melakukan get data posts dari model
        //get all posts from Model
        $posts = Post::latest()->get();

        // kita kirim datanya ke view menggunakkan helper compact
        //passing posts to view
        return view('posts', compact('posts'));
    }
}