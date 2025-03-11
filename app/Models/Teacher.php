<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = [
        'teacher_name',
        'nip',
        'job',
        'image',
        'starting_year',
    ];

    public function class(): BelongsTo
    {
        return $this->belongsTo(StudentClass::class);
    }

    public function classWorks(): HasMany
    {
        return $this->hasMany(ClassWork::class);
    }
}
