<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resultat()
    {
        return $this->belongsTo(Resultat::class);
    }
}
