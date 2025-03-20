<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentClass extends Model
{
    protected $table = 'student_classes';
    protected $fillable = [
        'class_name',
        'image',
        'teacher_id',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function classWorks(): HasMany
    {
        return $this->hasMany(ClassWork::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
