<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegue extends Model
{
    use HasFactory;

    protected $fillable = [
        'delegues',
        'niveau_etude',
        'filiere',
        'id_delegue_1',
        'id_delegue_2',
        'promotion',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
