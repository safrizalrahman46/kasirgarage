<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamancontroller extends Controller
{
    public function halamanutama(){
        return view('admin.halutama');
    }
}
