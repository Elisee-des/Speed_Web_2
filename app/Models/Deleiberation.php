<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deleiberation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_module',
        'niveau_licence',
        'session',
    ];
}
