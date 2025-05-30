<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolOperationalAssistance extends Model
{
    protected $table = 'school_operational_assistances';
    protected $fillable = [
        'date',
        'receipt',
        'expenditure',
        'bank_balance',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
