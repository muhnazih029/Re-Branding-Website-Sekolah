<?php

namespace App\Filament\Pages;

use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
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
    protected function getHeaderWidgets(): array
    {
        return [
            AccountWidget::class,
        ];
    }
}
