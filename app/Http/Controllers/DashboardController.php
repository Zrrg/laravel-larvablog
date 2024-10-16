<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    
    public function index() {
        
      
        // dump(Post::all());
        
        return view('dashboard', [
            'posts' => Post::orderBy('created_at', 'DESC')->paginate(5)
        ]);
            
    }
        
}
