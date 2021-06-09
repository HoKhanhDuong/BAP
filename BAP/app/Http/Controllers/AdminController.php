<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ListBook(){
        return view('admin.admin_listbooks');
    }
}
