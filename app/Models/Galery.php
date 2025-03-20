<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Galery extends Model
{
    protected $table = 'galeries';
    protected $fillable = [
        'name',
        'file',
        'user_id',
    ];
    protected $casts = [
        'file' => 'array',
    ];

    public function setFileAttribute($value)
    {
        $this->attributes['file'] = json_encode(
            array_map(fn($file) => str_replace('\\', '', $file), $value),
            JSON_UNESCAPED_SLASHES
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
