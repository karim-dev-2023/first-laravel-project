<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    

    protected $table = 'article';
    protected $primaryKey = 'id';

    protected $fillable = ['titre', 'description'];

    protected $attributes = [
        'is_active' => true,
    ];

}
