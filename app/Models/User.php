<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function calendarAcademics(): HasMany
    {
        return $this->hasMany(CalendarAcademic::class);
    }
    public function extracurriculars()
    {
        return $this->hasMany(Extracurriculars::class);
    }

    public function galeries(): HasMany
    {
        return $this->hasMany(Galery::class);
    }

    public function announcements(): HasMany
    {
        return $this->hasMany(Announcement::class);
    }

    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class);
    }

    public function SchoolOperationalAssistance(): HasMany
    {
        return $this->hasMany(SchoolOperationalAssistance::class);
    }
}
