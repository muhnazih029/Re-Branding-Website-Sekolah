<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Pengaturan';
    public static function getLabel(): string
    {
        return 'Pengaturan';
    }

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\TextInput::make('key')
                    ->label('Key')
                    ->disabled()
                    ->dehydrated(false),
                Forms\Components\TextInput::make('label')
                    ->label('Judul')
                    ->required(),
                Forms\Components\TextInput::make('value')
                    ->label('Deskripsi')
                    ->columnSpanFull()
                    ->visible(fn($record) => in_array($record?->type, ['text']))
                    ->required(),
                Forms\Components\Textarea::make('value')
                    ->label('Deskripsi')
                    ->columnSpanFull()
                    ->visible(fn($record) => in_array($record?->type, ['textarea']))
                    ->required(),
                Forms\Components\RichEditor::make('value')
                    ->label('Deskripsi')
                    ->columnSpanFull()
                    ->visible(fn($record) => in_array($record?->type, ['longtext']))
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg'])
                    ->columnSpanFull()
                    ->image()
                    ->imageEditor()
                    ->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultPaginationPageOption(25)
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->searchable(),
                Tables\Columns\TextColumn::make('label')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('value')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->height(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->modalWidth('2xl'),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSettings::route('/'),
        ];
    }
}
