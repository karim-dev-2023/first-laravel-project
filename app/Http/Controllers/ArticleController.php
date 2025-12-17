<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        // Récupérer un enregistrement par son identifiant
        $item = Articles::find($id);
        return view('pages.article-details', ["article" => $item]);
    }

    public function addItem()
    {
        // Méthode rapide avec create()
        Articles::create([
            'titre' => 'L’IA soigne mieux',
            'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
        ]);
        Articles::create([
            'titre' => 'Villes vertes',
            'description' => 'Les métropoles deviennent plus écologiques et durables',
        ]);
        Articles::create([
            'titre' => 'Télétravail',
            'description' => 'Plus de liberté, mais aussi plus de solitude.',
        ]);

        return "Ajout éffectué";
    }

    public function updateItem($id)
    {
   
        // Ou avec la méthode update()
        Articles::where('id', $id)->update(['title' => 'Salon du Web 2025']);
        
        return "Mis à jour éffectué";
    }

    public function deleteItem($id)
    {

        // Supprimer directement par ID
        Articles::destroy(2);

        return "Suppression éffectué";
    }
}
