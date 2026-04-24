<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index(){
        return Post::all();
        // return "index";
    }

    public function store(Request $request){
        $fields = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        // $post = $request->create($fields);
        $post = Post::create($fields);

        return['post' => $post];
    }

    public function update(Request $request, $id){
         $fields = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        // $post = Post::update($fields);
        
        $post = Post::findOrFail($id);
        $post->update($fields);


        return['post' => $post];
    }

    public function destroy(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->delete();
    }

}
