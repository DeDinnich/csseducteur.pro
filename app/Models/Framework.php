<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Framework extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'nom',
        'type',
        'popularite',
        'difficulte',
        'langage_associe',
        'open_source',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}