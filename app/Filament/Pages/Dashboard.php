<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public static function getNavigationLabel(): string
    {
        return match (app()->getLocale()) {
            'id' => 'Beranda',
            'en' => 'Dashboard',
            default => 'Dashboard',
        };
    }
}
