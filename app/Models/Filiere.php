<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'nom',
    ];

    public function getDay()
    {
        return $this->created_at->format('d/m/y');
    }

    public function universite()
    {
        return $this->belongsTo(Universite::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
