<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Teacher;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Support\Enums\ActionSize;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TeacherResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeacherResource\RelationManagers;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?int $navigationSort = 1;
    public static function getLabel(): string
    {
        return 'Guru';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('teacher_name')
                            ->label('Nama Guru')
                            ->placeholder('Masukkan nama guru')
                            ->autofocus()
                            ->required(),
                        Forms\Components\TextInput::make('nip')
                            ->label('NIP')
                            ->placeholder('Masukkan nomor NIP guru')
                            ->numeric()
                            ->required(),
                        Forms\Components\TextInput::make('job')
                            ->label('Posisi')
                            ->placeholder('Masukkan posisi guru di sekolah')
                            ->required(),
                        Forms\Components\Select::make('starting_year')
                            ->label('Tahun')
                            ->options(
                                collect(range(date('Y'), 1900))->mapWithKeys(fn($year) => [$year => $year])
                            )
                            ->required(),
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg'])
                            ->directory('teachers')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
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
                Tables\Columns\TextColumn::make('teacher_name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip')
                    ->label('NIP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job')
                    ->label('Posisi')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->Label('Gambar')
                    ->height(100),
                Tables\Columns\TextColumn::make('starting_year')
                    ->label('Year')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()
                        ->modalWidth('xl'),
                    Tables\Actions\EditAction::make()
                        ->modalWidth('xl')
                        ->modalHeading('Edit Guru')
                        ->using(function (Teacher $record, array $data): Teacher {
                            $record->fill($data);
                            if ($record->isDirty('image')) {
                                $oldImage = $record->getOriginal('image');
                                if ($oldImage && Storage::exists($oldImage)) {
                                    Storage::delete($oldImage);
                                }
                            }
                            $record->save();
                            return $record;
                        }),
                    Tables\Actions\DeleteAction::make(),
                ])
                    ->size(ActionSize::ExtraSmall)
                    ->color('primary')
                    ->button()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make()
                        ->using(function (Teacher $record) {
                            Storage::delete($record->image);
                            $record->delete();
                            return $record;
                        }),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTeachers::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
