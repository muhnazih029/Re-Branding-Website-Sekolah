<?php

namespace App\Filament\Resources\ExtracurricularResource\Pages;

use App\Filament\Resources\ExtracurricularResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageExtracurriculars extends ManageRecords
{
    protected static string $resource = ExtracurricularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->modalWidth('xl')
                ->label('Tambah Ekstrakurikuler')
                ->modalHeading('Tambah Ekstrakurikuler'),
        ];
    }
}
