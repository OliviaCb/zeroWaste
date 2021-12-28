<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    
        return view('pages.index');
    }
    // }
    public function about(){
        return view('page.about');
    }
    // public function konto(){
    //     return view('page.konto');
    // }

}

