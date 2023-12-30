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
        'session',
        'actif',
        'categorie_id',
        'semestre_id',
        'user_id'
    ];

    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function universite()
    {
        return $this->belongsTo(Universite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
