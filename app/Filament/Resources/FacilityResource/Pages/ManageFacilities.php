<?php

namespace App\Filament\Resources\FacilityResource\Pages;

use App\Filament\Resources\FacilityResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFacilities extends ManageRecords
{
    protected static string $resource = FacilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->modalWidth('xl')
                ->label('Tambah Fasilitas')
                ->modalHeading('Tambah Fasilitas'),
        ];
    }
}
