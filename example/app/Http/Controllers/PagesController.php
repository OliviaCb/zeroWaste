<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    
        return view('page.index');
    }
    public function przepisy(){
        return view('page.przepisy');
    }
    public function konto(){
        return view('page.konto');
    }

}

