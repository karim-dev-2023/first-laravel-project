<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
    
        return view('welcome', ["name" => 'rimk',"articles" => $articles]);
    }
}
