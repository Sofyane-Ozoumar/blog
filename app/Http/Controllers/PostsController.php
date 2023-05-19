<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class PostsController extends Controller
    {
        public function show(){
            $posts = Posts::paginate(2); 
            return view('welcome',compact('posts'));
        }
        public function index($id){
            $post=Posts::with('comments')->find($id);
            return view('single',compact('post'));


        }
        public function create(){
            return view('add');
        }
        public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);
        
        Posts::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        return redirect()->route('index');
        }
        public function search(Request $request)
        {
        $query = $request->input('search');
        $posts = Posts::where('title', 'like', "%$query%")
                     ->orWhere('content', 'like', "%$query%")
                     ->get();
        return view('welcome',compact('posts'));}
   
}