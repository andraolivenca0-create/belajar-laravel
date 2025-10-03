<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class postcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //daftar post
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    //menampilkan halaman form create
    public function create()
    {
        return view('post.create');
}

public function store(Request $request)
{
    //membuat dat baru untuk table post
    //melalui model post
    $post    = new Post;
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();
    return redirect()->route('post.index');
}

public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect()->route('post.index');
}
}