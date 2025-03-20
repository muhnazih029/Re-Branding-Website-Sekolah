<?php

namespace App\Filament\Resources\GaleryResource\Pages;

use App\Filament\Resources\GaleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGaleries extends ManageRecords
{
    protected static string $resource = GaleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Galery')
                ->modalHeading('Tambah Galery')
                ->modalWidth('xl'),
        ];
    }
}
