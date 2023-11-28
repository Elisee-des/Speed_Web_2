<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_module',
        'niveau_licence',
        'session',
        'user_id',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getDay()
    {
        return $this->created_at->format('d/m/y');
    }
}
