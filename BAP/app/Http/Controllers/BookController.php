<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function ListBook(){
        $book = DB::table('Books')->paginate(10);
        $data = [];
        $data['book'] = $book;
        return view('home',$data);
    }
}
