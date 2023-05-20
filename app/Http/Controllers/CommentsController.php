<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;
use App\Models\posts;


class CommentsController extends Controller
{
    public function store(Request $request,$id){
        $request->validate([
            'content'=>'required',
        ]);
        $post=Posts::find($id);
        $comments=Comments::create([
            'content' => $request->input('content'),
            'posts_id' => $request->input('posts_id'),
            ]
        );
        $comments->post()->associate($post);
        // method is used to create a relationship between two models
        //  by setting the foreign key value on the child model to 
        //  the ID of the parent model
        return redirect()->back();
    }
}
