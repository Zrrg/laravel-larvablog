<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function show(Post $post) {

        return view('posts.show',[
            'post' => $post
        ]);
    }

    public function store()
    {

        request()->validate([
            'post' => 'required|min:5|max:240',
        ]);

        $post = Post::create(
            [

                'content' => request()->get('post', ''),

            ]
        );
        return redirect()->route('dashboard')->with('success', 'Post created successfully.');
    }

    public function destroy(Post $post){
        // where id=1
        $post->delete();
        
        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');
    }
}
