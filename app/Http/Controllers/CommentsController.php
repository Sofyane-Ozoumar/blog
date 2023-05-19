<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;


class CommentsController extends Controller
{
    public function store(Request $request,Comments $comments){
        $request->validate([
            'content'=>'required',
        ]);
        Comments::create([
            'content' => $request->input('content')]
        );
        return redirect()->back();
    }
}
