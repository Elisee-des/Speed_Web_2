<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'nom',
        'sigle',
    ];

    public function affiches()
    {
        return $this->hasMany(Affiche::class);
    }

    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
}
