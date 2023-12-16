<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiche extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'nom',
        'niveau_etude',
        'session',
        'actif',
        'categorie_id',
        'semestre_id'
    ];

    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getDay()
    {
        return $this->created_at->format('d/m/y');
    }


}
