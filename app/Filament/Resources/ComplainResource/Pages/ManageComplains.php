<?php

namespace App\Filament\Resources\ComplainResource\Pages;

use App\Filament\Resources\ComplainResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageComplains extends ManageRecords
{
    protected static string $resource = ComplainResource::class;


    protected function getHeaderActions(): array
    {
        return [];
    }
}
