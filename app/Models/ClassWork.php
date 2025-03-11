<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassWork extends Model
{
    protected $table = 'class_works';
    protected $fillable = [
        'title',
        'description',
    ];

    public function class(): BelongsTo
    {
        return $this->belongsTo(StudentClass::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
