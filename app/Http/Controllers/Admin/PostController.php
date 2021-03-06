<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = Post::orderBy('created_at','desc')->get();
       return view('admin.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // prendo i dati dal form in forma di array col metodo all()
        $data = $request->all();
        $request->validate([
            'title' => 'required|min:5|max:100',
            'body' => 'required|min:5|max:5000',
            'img' => 'image'
        ]);

        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($data['title'],'-');
        // nuova istanza
        $newPost = new Post();

        if (!empty($data['img'])) {
            $data['img'] = Storage::disk('public')->put('images', $data['img']);
        }
        // la riempio con i dati
        $newPost->fill($data);

        // equivale a fare INSERT
        $saved = $newPost->save();

        if($saved){
            return redirect()->route('posts.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // array di dati
        $data = $request->all();

        // dd($data); mi restituisce l'array del post che voglio storare
        $request->validate([
            'title' => 'required|min:5|max:100',
            'body' => 'required|min:5|max:5000',
            'img' => 'image'
        ]);

        $data['slug'] = Str::slug($data['title'],'-');
        $data['updated_at'] = Carbon::now('Europe/Rome');

        if (!empty($data['img'])) {
            // cancella img precedente
            if(!empty($post->img)){
                Storage::disk('public')->delete($post->img);
            }
            $data['img'] = Storage::disk('public')->put('images', $data['img']);
        }

        $updated = $post->update($data);

        if($updated){
            return redirect()->route('posts.index')->with('statusModifica', 'Hai modificato correttamente il post con il titolo '.$post->title);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('status','Hai cancellato il post con il titolo: "'.$post->title.'"');
    }
}
