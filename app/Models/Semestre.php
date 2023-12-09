<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'user_id',
    ];

    public function affiches()
    {
        return $this->hasMany(Affiche::class);
    }

    public function getDay()
    {
        return $this->created_at->format('d/m/y');
    }
}
