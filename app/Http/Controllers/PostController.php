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

    public function update(Request $request){

    }

    public function destroy(Request $request){

    }

}
