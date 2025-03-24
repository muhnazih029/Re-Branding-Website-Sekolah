<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\ClassWork;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use Filament\Support\Enums\ActionSize;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ClassWorkResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ClassWorkResource\RelationManagers;

class ClassWorkResource extends Resource
{
    protected static ?string $model = ClassWork::class;
    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?int $navigationSort = 4;
    public static function getLabel(): string
    {
        return 'Tugas Kelas';
    }
    public static function getEloquentQuery(): Builder
    {
        return ClassWork::query()
            ->select('class_works.*', 'student_classes.class_name as class_name')
            ->join('student_classes', 'student_classes.id', '=', 'class_works.student_class_id');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->label('Tugas')
                    ->columns(1)
                    ->columnSpan(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul')
                            ->placeholder('Masukkan Judul Tugas')
                            ->required(),
                        Forms\Components\Select::make('student_class_id')
                            ->label('Kelas')
                            ->placeholder('Pilih Kelas')
                            ->options(function (): array {
                                return DB::table('student_classes')
                                    ->select('id', 'class_name')
                                    ->orderBy('class_name')
                                    ->pluck('class_name', 'id')
                                    ->toArray();
                            })
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->label('Deskripsi')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('class_name')
                    ->label('Kelas')
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()
                        ->modalWidth('xl'),
                    Tables\Actions\EditAction::make()
                        ->modalWidth('2xl'),
                    Tables\Actions\DeleteAction::make(),
                ])
                    ->size(ActionSize::ExtraSmall)
                    ->color('primary')
                    ->button()
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
            'index' => Pages\ManageClassWorks::route('/'),
        ];
    }
}
