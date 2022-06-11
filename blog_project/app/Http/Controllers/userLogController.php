<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
class userLogController extends Controller
{
    public function loginShow(){
        return view('UserLogin');
    }

   public function loginCheck(Request $req){
        //return $req->email;
        //$data=Clint::find('email')->get();
        //return $data;
        /*
       if(Clint::where('email','=',$req->email)&& Clint::where('password','=',$req->Password)){
            return redirect('userDash');
       }
       else{
           return redirect('logget');
       }*/
       $obj=User::where('email','=',$req->email)->first();
       if($obj){
           if($obj->password==$req->Password){
               $req->session()->put('logid',$obj->id);
               $data=$req->session()->put('username',$obj->name);
            return redirect('userDash');
           }
           else{
            return redirect('logget');
           }
       }else{
        return redirect('logget');
       }
    }
    
    public function logOut(){
       if(Session::has('logid')){
           Session::pull('logid');
           return redirect('logget');
       }
    }
    
}
