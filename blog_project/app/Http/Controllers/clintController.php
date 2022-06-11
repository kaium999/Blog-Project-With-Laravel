<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class clintController extends Controller
{
    public function clintRegistration(){
        return view('ClintRegistration');
    }
    public function saveClint(Request $req){
        $clint=new User();
        $clint->name=$req->name;
        $clint->email=$req->email;
        $clint->password=$req->Password;
        $clint->save();
        
    }
    
}
