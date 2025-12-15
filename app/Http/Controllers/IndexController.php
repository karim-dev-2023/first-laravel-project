<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
class IndexController extends Controller
{
    public function index()
    {
       return view('welcome', ["name" => "Rimk"]);
    }
}
