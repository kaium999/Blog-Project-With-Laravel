<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Session;
class userController extends Controller
{
    public function userDashGet(){
        return view("userBlog");
    }

    public function Addpostview(){
        return view('AddPost');
    }
    public function Addpost(Request $req){
        /*$post=new Post();
        $post->postTitle=$req->postTitle;
        $post->PostDescription=$req->PostDescription;
        $post->PostDetails=$req->PostDetails;
        $post->save();
        $data=session('logid');
        $user=User::find($data);
        //$user=New User();
        //$user->id=$req->usreId;
         //return $user->id;
        //$post->User()->save($user);
       return $user;*/

       //$user=User::find(session('logid'));
        $post=new Post();
        $post->postTitle=$req->postTitle;
        $post->PostDescription=$req->PostDescription;
        $post->PostDetails=$req->PostDetails;
        $post->user_id=session('logid');
        //$user->post()->save($post);
        $post->save();
      
    }

    /* Usre Wise Post*/
    public function postShow(){
        $data=session('logid');
        $postdata=Post::where('user_id',$data)->get();
        return view('PostdataShow',compact('postdata'));
        //return $data;
    }

    public function postDelete($id){
        $data=Post::find($id);
        $data->delete();
        return redirect('postshow');
    }

    
    function editShow($id){
        //return $id;
        $data=Post::find($id);
        //return $data;
        return view('PostEditShowPage',compact('data'));
    }
    function updatePost(Request $req){
        $data=Post::find($req->id);
        $data->postTitle=$req->postTitle;
        $data->PostDescription=$req->PostDescription;
        $data->PostDetails=$req->PostDetails;
        
        $data->push();
        return redirect('postshow');
    }


    public function AllpostShow(){
        $post=Post::all();
        return view('AllPostShow',compact('post'));
    }
}
