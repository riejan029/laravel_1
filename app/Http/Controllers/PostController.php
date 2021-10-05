<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index(){
        $posts = Post::get();
        return view('posts.index',[
            'posts'=>$posts
        ]);
    }

    public function addPost(Request $req){
        $req->validate([
            'body'=>'required'
        ]);

        auth()->user()->posts()->create($req->only('body'));

        return back();
    }
}
