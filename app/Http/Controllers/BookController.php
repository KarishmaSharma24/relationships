<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;

class BookController extends Controller
{
    public function home(){
        return view('home');
    }

    public function book(){
        $bookData = Book::all();
        return view('book',['bookData'=>$bookData]);
    }
}
