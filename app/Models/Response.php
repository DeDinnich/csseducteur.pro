<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'question_id',
        'texte',
        'correct',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}