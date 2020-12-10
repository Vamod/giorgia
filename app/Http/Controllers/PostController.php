<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->limit(2)->get();

        return view('guests.home', compact('posts'));
    }
}
