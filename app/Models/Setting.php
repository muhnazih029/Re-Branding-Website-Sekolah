<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = [
        'key',
        'label',
        'value',
        'type',
        'image',
    ];
    protected $casts = [
        'image' => 'array',
    ];
    public function setImageAttribute($value)
    {
        if (is_null($value) || $value === '') {
            $this->attributes['image'] = json_encode([]);
            return;
        }

        if (is_string($value)) {
            $value = [$value];
        }

        if (!is_array($value)) {
            $value = [];
        }

        $this->attributes['image'] = json_encode(
            array_map(fn($file) => str_replace('\\', '', $file), $value),
            JSON_UNESCAPED_SLASHES
        );
    }
}
