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
        'student_class_id',
    ];

    public function student_class(): BelongsTo
    {
        return $this->belongsTo(StudentClass::class);
    }
}
