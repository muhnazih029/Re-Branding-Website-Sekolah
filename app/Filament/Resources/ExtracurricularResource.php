<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use App\Models\Extracurricular;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExtracurricularResource\Pages;
use App\Filament\Resources\ExtracurricularResource\RelationManagers;

class ExtracurricularResource extends Resource
{
    protected static ?string $model = Extracurricular::class;
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Manajemen Sekolah';
    protected static ?int $navigationSort = 2;
    public static function getLabel(): string
    {
        return 'Ekstrakurikuler';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('extra_name')
                            ->label('Nama')
                            ->autofocus()
                            ->required(),
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi')
                            ->required(),
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg'])
                            ->directory('extracurriculars')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
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
                Tables\Columns\TextColumn::make('extra_name')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->height(100),
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
                        ->modalWidth('xl'),
                    Tables\Actions\DeleteAction::make()
                        ->using(function (Extracurricular $record): Extracurricular {
                            Storage::delete($record->image);
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
                        ->using(function (Extracurricular $record): Extracurricular {
                            Storage::delete($record->image);
                            $record->delete();
                            return $record;
                        }),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageExtracurriculars::route('/'),
        ];
    }
}
