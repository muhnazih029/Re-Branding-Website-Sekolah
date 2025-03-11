<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StudentClass extends Model
{
    protected $table = 'student_classes';
    protected $fillable = [
        'class_name',
        'image',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function classWorks(): HasMany
    {
        return $this->hasMany(ClassWork::class);
    }

    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class);
    }
}
