<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'student_name',
        'nisn',
        'gender',
        'image',
        'student_class_id',
    ];

    public function student_class(): BelongsTo
    {
        return $this->belongsTo(StudentClass::class);
    }
}
