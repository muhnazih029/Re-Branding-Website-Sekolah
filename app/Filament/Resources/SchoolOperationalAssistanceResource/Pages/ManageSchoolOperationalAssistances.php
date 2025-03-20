<?php

namespace App\Filament\Resources\SchoolOperationalAssistanceResource\Pages;

use App\Filament\Resources\SchoolOperationalAssistanceResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSchoolOperationalAssistances extends ManageRecords
{
    protected static string $resource = SchoolOperationalAssistanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Informasi')
                ->modalHeading('Tambah Informasi')
                ->modalWidth('xl'),
        ];
    }
}
