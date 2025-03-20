<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Galery;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GaleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GaleryResource\RelationManagers;

class GaleryResource extends Resource
{
    protected static ?string $model = Galery::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Manajemen Sekolah';
    protected static ?int $navigationSort = 4;
    public static function getLabel(): string
    {
        return 'Galeri';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->required(),
                        Forms\Components\FileUpload::make('file')
                            ->label('File')
                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg', 'video/mp4'])
                            ->directory('galeries')
                            ->maxParallelUploads(5)
                            ->maxFiles(5)
                            ->maxSize(2048)
                            ->openable()
                            ->downloadable()
                            ->multiple()
                            ->required(),
                        Forms\Components\Hidden::make('user_id')
                            ->default(Filament::auth()->user()->id)
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('file')
                    ->label('File')
                    ->height(50)
                    ->limit(3)
                    ->stacked()
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Dibuat Oleh')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()
                        ->modalWidth('xl'),
                    Tables\Actions\EditAction::make()
                        ->modalWidth('xl')
                        ->before(function (Galery $record, array $data): Galery {
                            $originalFiles = array_values($record->file ?? []);
                            $newFiles = array_values($data['file'] ?? []);
                            $deletedFiles = array_diff($originalFiles, $newFiles);
                            foreach ($deletedFiles as $file) {
                                Storage::delete($file);
                            }
                            return $record;
                        }),
                    Tables\Actions\DeleteAction::make()
                        ->using(function (Galery $record): Galery {
                            Storage::delete($record->file);
                            $record->delete();
                            return $record;
                        }),
                ])
                    ->size(ActionSize::ExtraSmall)
                    ->color('primary')
                    ->button(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->using(function (Galery $record): Galery {
                            Storage::delete($record->file);
                            $record->delete();
                            return $record;
                        }),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageGaleries::route('/'),
        ];
    }
}
