<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Trips;
use db;
use App\Note;

class CommentController extends Controller
{
    public function store(Trips $trip,$id)
    {
    	$comment= new Comment;
    	$comment->trip_id=$id;
    	$comment->user_id=auth()->user()->id;
    	$comment->body=request('body');
    	$comment->save();
    	return back();
    }
    public function note(Request $request,$id)
    {
    	$notes= new Note;
    	$notes->user_id=$id;
    	$notes->fuser_id=auth()->user()->id;
    	$notes->body=request('body');
    	$notes->save();
    	return redirect('/trips');
    }

}
