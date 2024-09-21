<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher',
        'subject',

    ];
    public $timestamps = false;

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject', 'id');
    }
}
