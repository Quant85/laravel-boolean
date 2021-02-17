<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //dd($posts);
        return view('pages.post', ['posts' => $posts]);
    }
}
