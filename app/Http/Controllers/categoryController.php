<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{ 
    public function categories(){

    }

    public function categoryCreate(){
     
        return view('category/create');
    }
}


