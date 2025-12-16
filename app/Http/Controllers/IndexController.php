<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

class IndexController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'titre' => 'L’IA soigne mieux',
                'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
            ],
            [
                'titre' => 'Villes vertes',
                'description' => 'Les métropoles deviennent plus écologiques et durables',
            ],
            [
                'titre' => 'Télétravail',
                'description' => 'Plus de liberté, mais aussi plus de solitude.',
            ],
        ];
    
        return view('welcome', ["name" => 'rimk',"articles" => $articles]);
    }
}
