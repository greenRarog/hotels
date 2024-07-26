<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainPageController extends Controller
{
    public function main() 
    {
        $posts = Post::all();
        return view("blog.main_page", [
            "posts" => $posts,
        ]);
    }
}
