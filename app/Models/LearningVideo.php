<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningVideo extends Model
{
    protected $table = 'learning_videos';
    protected $fillable = [
        'title',
        'youtube_url',
    ];
}
