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
        'promotion',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
