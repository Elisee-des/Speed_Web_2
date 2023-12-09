<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristique extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function getDay()
    {
        return $this->created_at->format('d/m/y');
    }
}
