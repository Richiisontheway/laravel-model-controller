<?php

namespace App\Http\Controllers\read;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $firstname = 'ciao';
        $lastname = 'tui';
        return view('welcome',[
            'firstname'=> $firstname,
            'lastname'=> $lastname,
        ]);
    }
    public function show(){

    }
}
