<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create view";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $post = Post::where('id', '=', $id)->get()[0];

        return view("posts.show")->with(compact("post"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect()->route('inici');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }

    public function nuevoPrueba(){
        $post = new Post();
        $post->titol = "La guerra de las galaxias";
        $post->contigut = "George Lucas";
        $post->save();
        return $post;
    }

    public function editarPrueba(string $id){
        $postAModificar = Post::findOrFail($id);
        $postAModificar->titol="Otro título";
        $postAModificar->save();

        return $postAModificar;
    }
}
