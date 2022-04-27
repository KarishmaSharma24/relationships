<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author(){
        return view('author_login');
    }
    public function author_register(){
        return view('author_register');
    }

}
