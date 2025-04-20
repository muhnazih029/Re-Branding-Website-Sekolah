<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LearningVideoResource\Pages;
use App\Filament\Resources\LearningVideoResource\RelationManagers;
use App\Models\LearningVideo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LearningVideoResource extends Resource
{
    protected static ?string $model = LearningVideo::class;
    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?int $navigationSort = 6;
    public static function getLabel(): string
    {
        return 'Video Pembelajaran';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul Video')
                            ->placeholder('Masukkan judul video pembelajaran')
                            ->autofocus()
                            ->required(),
                        Forms\Components\TextInput::make('youtube_url')
                            ->label('URL Video Embed YouTube')
                            ->placeholder('Masukkan URL video YouTube yang valid')
                            ->url()
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul Video')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('youtube_url')
                    ->label('URL Video')
                    ->limit(50)
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->modalWidth('xl'),
                Tables\Actions\EditAction::make()
                    ->modalWidth('xl'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageLearningVideos::route('/'),
        ];
    }
}
