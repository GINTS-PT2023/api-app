<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        return Post::all();
    }

    public function store(Request $request){
        
    }

    public function update(Request $request){

    }

    public function destroy(Request $request){

    }

}
