<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
class commentController extends Controller
{
   public function CommentPage($id){
        $data=Post::find($id);
    
         return view("AddCommentPage",compact('data'));
        
    }

    public function addComment(Request $req){
        
        //return $req->id;
        $data=new Comment();
        $data->user_id=session('logid');
        $data->post_id=$req->id;
        $data->comment_name=$req->addComment;
        $data->save();
        //return view('AddCommentPage');
    }

    public function AllCommentShow(Request $req){
        //return $req->id;
        //$ShowComment=Post::find(1)->comment;
        
        //$ShowComment=Post::with('comment')->get();
        //return view('ShowComment',compact('ShowComment'));
        //return $allComment;
        //return "hello";

        //$data=Comment::all();
        //return view('ShowComment',compact('data'));

        $commentShow=Post::find($req->id)->comment;
        //return $ShowComment;
        return view('ShowComment',compact('commentShow'));
    }

  
}
