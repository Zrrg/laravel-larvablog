<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
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

    public function destroy($id){
        // where id=1
        $post = Post::where('id',$id)->first();
        $post->delete();
        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');
    }
}
