<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        if (auth()->user()->user_type == 'admin') {
            return view('backend.admin.index');
        }else{
            return redirect('home');
        }
    }
}