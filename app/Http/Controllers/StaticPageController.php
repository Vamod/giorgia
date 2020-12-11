<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function chisono(){
        return view('guests.chisono');
    }
    public function dicosamioccupo(){
        return view('guests.dicosamioccupo');
    }
    public function contatti(){
        return view('guests.contatti');
    }
}
