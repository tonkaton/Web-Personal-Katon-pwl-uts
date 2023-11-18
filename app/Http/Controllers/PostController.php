<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller{

    public function index() {
        //$post = "Laravel Tutorial Series One!";
        //return view('posts.index', ['post'=>$post]);
        //$posts = Post::orderBy('created_at', 'desc')->get();
        $posts = DB::table('posts')->get();
        return view('posts.index', ['posts' => $posts]);
      }
      // Create post
    public function create() {
        return view('posts.create');
      }

      // Store post
    public function store(Request $request) {
     // validations
       $request->validate([
      'title' => 'required',
      'description' => 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
  ]);

      $post = new Post;

      $file_name = time() . '.' . request()->image->getClientOriginalExtension();
      request()->image->move(public_path('images'), $file_name);

      $post->title = $request->title;
      $post->description = $request->description;
      $post->image = $file_name;
      

      $post->save();
      return redirect()->route('posts.index')->with('success', 'Post created successfully.');
}
    }