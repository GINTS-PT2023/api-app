<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index(){
        return Post::all();
    }

    public function store(Request $request){
        $fields = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        $post = Post::create($fields);
        return['post' => $post];
    }

    // public function store(StorePostRequest $request){
    //     $post = Post::create($request->validated());
    //     return ['post' => $post];
    // }

    // public function store(Request $request){
    //     return [
    //         'post' => Post::create(
    //             $request->validate([
    //                 'title' => 'required|max:255',
    //                 'body' => 'required'
    //             ])
    //         )
    //     ];
    // }

    // public function store(Request $request){
    //     $request->validate([
    //         'title' => 'required|max:255',
    //         'body' => 'required'
    //     ]);
    //     $post = Post::create($request->only('title', 'body'));
    //     return ['post' => $post];
    // }

    // public function store(Request $request){
    //     $request->validate([
    //         'title' => 'required|max:255',
    //         'body' => 'required'
    //     ]);
    //     $post = new Post();
    //     $post->title = $request->title;
    //     $post->body = $request->body;
    //     $post->save();
    //     return ['post' => $post];
    // }

    // public function store(Request $request){
    //     $post = Post::create(
    //         $request->validate([
    //             'title' => 'required|max:255',
    //             'body' => 'required'
    //         ])
    //     );
    //     return response()->json(['post' => $post], 201);
    // }

    public function update(Request $request, $id){
         $fields = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        $post = Post::findOrFail($id);
        $post->update($fields);
        return['post' => $post];
    }

    public function destroy(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->delete();
    }

}
