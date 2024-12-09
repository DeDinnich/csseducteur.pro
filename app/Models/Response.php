<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Response extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'question_id',
        'texte'
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}