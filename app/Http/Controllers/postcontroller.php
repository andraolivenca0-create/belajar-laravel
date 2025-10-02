<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class postcontroller extends Controller
{
    //daftar post
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }
}