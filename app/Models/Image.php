<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'path',
        'deleiberation_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resultat()
    {
        return $this->belongsTo(Resultat::class);
    }

    public function proclamation()
    {
        return $this->belongsTo(Proclamation::class);
    }

    public function deleiberation()
    {
        return $this->belongsTo(Deleiberation::class);
    }
}
