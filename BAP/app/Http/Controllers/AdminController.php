<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function ListBook(){
        $book = DB::table('books')->paginate(10);
        $data = [];
        $data['book'] = $book;
        return view('admin/admin_listbooks',$data);
    }

    public function ListUser(){
        $user = DB::table('users')->paginate(10);
        $data = [];
        $data['user'] = $user;
        return view('admin/admin_listuser',$data);
    }

    public function Delete(Request $request) {
        $delete = DB::table($request->type)
                    ->where('id',$request->id)
                    ->delete();
        
        dd($delete);
    }
}