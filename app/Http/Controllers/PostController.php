<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->limit(2)->get();

        return view('guests.home', compact('posts'));
    }

    public function show($slug){
        // si ferma al primo slug che matcha
        $post = Post::where('slug', $slug)->first();
        return view('guests.show', compact('post'));
    }

    public function imieiarticoli(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('guests.imieiarticoli', compact('posts'));
    }
}
