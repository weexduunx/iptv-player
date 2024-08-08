<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'url',
        'duration',
        'tvg_name',
        'xmlTvId',
        'iconUrl',
        'logoUrl',
        'language',
        'tags',
        'group',
    ];

    protected $casts = [
        'tags' => 'array', // Convertit les tags JSON en tableau
    ];
}
