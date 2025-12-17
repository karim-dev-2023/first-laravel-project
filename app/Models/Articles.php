<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id';
    protected $titre = "titre";
    protected $description = "description";

    /** Colonnes modifiables via create() ou update() */
    protected $fillable = ['titre', 'description'];

    /** Colonnes protégées contre l’assignation de masse */
    protected $guarded = ['id'];

    /** Colonnes visibles (si besoin de filtrer l’affichage inversement à $hidden) */
    protected $visible = ['titre', 'description'];

    /** Valeurs par défaut des attributs */
    protected $attributes = [
        'is_active' => true,
    ];
}
