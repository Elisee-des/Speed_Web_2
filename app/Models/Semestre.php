<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'nom',
        'user_id',
        'universite_id',
    ];

    public function affiches()
    {
        return $this->hasMany(Affiche::class);
    }

    public function universite()
    {
        return $this->belongsTo(Universite::class);
    }

    public function getDay()
    {
        return $this->created_at->format('d/m/y');
    }
}
