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

        // Méthode avec instanciation
        // $item = new Articles();
        // $item->title = 'Salon du Web';
        // $item->description = 'Événement annuel sur les technologies du web';
        // $item->date = '2025-12-05';
        // $item->save();

    }

    public function updateItem($id)
    {
        // // Mise à jour via l'objet
        // $item = Articles::find(1);
        // $item->title = 'Conférence Laravel 2025';
        // $item->save();

        // Ou avec la méthode update()
        Articles::where('id', $id)->update(['title' => 'Salon du Web 2025']);
    }

    public function deleteItem($id)
    {
        // Supprimer un enregistrement spécifique
        // $item = Articles::find(1);
        // $item->delete();

        // Supprimer directement par ID
        Articles::destroy(2);

        // Supprimer plusieurs lignes à la fois
        // Articles::where('date', '<', now())->delete();
    }
}
