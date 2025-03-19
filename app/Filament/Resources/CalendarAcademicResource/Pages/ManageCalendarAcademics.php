<?php

namespace App\Filament\Resources\CalendarAcademicResource\Pages;

use App\Filament\Resources\CalendarAcademicResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCalendarAcademics extends ManageRecords
{
    protected static string $resource = CalendarAcademicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Kalender Akademik')
                ->modalHeading('Tambah Kalender Akademik')
                ->modalWidth('xl'),
        ];
    }
}
