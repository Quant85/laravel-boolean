<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class HomeController extends Controller
{
    

    /**
     * "Smista il traffico" da far convogliare in home 
     */
    public function home()
    {   
        $pages = ['home' => 'home','about'=>'about','post'=>'post'];
        return view('pages.home', compact('pages','pages'));
    }
    public function post()
    {
        $posts = Post::all();
        $pages = ['home' => 'home','about'=>'about','post'=>'post'];
        return view('pages.post', compact('posts','pages'));
    }
    public function about()
    {
        $pages = ['home' => 'home','about'=>'about','post'=>'post'];
        return view('pages.about',compact('pages'));
    }
}


