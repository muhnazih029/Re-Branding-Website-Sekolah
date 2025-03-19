<?php

namespace App\Models;

use App\Models\ClassWork;
use App\Models\StudentClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teacher extends Model
{
    use SoftDeletes;
    protected $table = 'teachers';
    protected $fillable = [
        'teacher_name',
        'nip',
        'job',
        'image',
        'starting_year',
    ];

    public function class(): HasOne
    {
        return $this->hasOne(StudentClass::class);
    }
}
