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

        if (!$item) {
            return "Article non trouvé";
        }
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
        $article = Articles::findOrFail($id);

        $article->update([
            'title' => 'Salon du Web 2025'
        ]);

        return 'Mise à jour effectuée';
    }


    public function deleteItem($id)
    {
        $article = Articles::find($id);

        if (!$article) {
            return ('Article non trouvé');
        }

        $article->delete();

        return ('Suppression effectuée');
    }
}
