<?php

namespace App\Filament\Resources\LearningVideoResource\Pages;

use App\Filament\Resources\LearningVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLearningVideos extends ManageRecords
{
    protected static string $resource = LearningVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah URL Video')
                ->modalHeading('Tambah URL Video')
                ->modalWidth('xl'),
        ];
    }
}
