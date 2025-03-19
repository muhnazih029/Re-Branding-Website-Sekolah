<?php

namespace App\Filament\Resources\ClassWorkResource\Pages;

use App\Filament\Resources\ClassWorkResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageClassWorks extends ManageRecords
{
    protected static string $resource = ClassWorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Tugas')
                ->modalHeading('Tambah Tugas')
                ->modalWidth('2xl'),
        ];
    }
}
