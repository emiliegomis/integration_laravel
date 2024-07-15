<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marchandise extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_marchandise',
        'prix',
        'libelle',
        'quantite',
    ];
}
