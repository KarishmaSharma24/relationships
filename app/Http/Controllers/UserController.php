<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    public function userlogin(){
        return view('userlogin');
    }

    public function userregister(){
        return view('userregister');
    }
    public function user_getdata(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //dd($user->password);
        $user->save();
        return view('userlogin');
    }

    public function userloginform(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        { 
           return redirect()->route('book');
        }       
        return redirect()->route('book');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        $request->session()->flush();
        return redirect()->route('book');
    }
}
