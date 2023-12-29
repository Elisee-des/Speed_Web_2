<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'id',
        'nom',
        'path',
        'user_id',
        'affiche_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function affiche()
    {
        return $this->belongsTo(Affiche::class);
    }

    public function getDay()
    {
        return $this->created_at->format('d/m/y');
    }
}
