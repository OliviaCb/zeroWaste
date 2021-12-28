<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class displayController extends Controller
{
    public function db() {
      return DB::select('SELECT * FROM `recipes`');;
    }
}
