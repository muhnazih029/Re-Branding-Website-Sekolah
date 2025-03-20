<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Student;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\StudentClass;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\StudentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StudentResource\RelationManagers;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?int $navigationSort = 2;
    public static function getLabel(): string
    {
        return 'Siswa';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('student_name')
                            ->label('Nama Siswa')
                            ->placeholder('Masukkan Nama Siswa')
                            ->autofocus()
                            ->required(),
                        Forms\Components\TextInput::make('nisn')
                            ->label('NISN')
                            ->numeric()
                            ->placeholder('Masukkan Nomor Induk Siswa Nasional')
                            ->required(),
                        Forms\Components\Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->placeholder('Pilih Jenis Kelamin')
                            ->options([
                                'Laki-laki' => 'Laki-laki',
                                'Perempuan' => 'Perempuan',
                            ])
                            ->required(),
                        Forms\Components\Select::make('student_class_id')
                            ->label('Kelas')
                            ->placeholder('Pilih Kelas')
                            ->relationship('student_class', 'class_name')
                            ->searchable()
                            ->reactive()
                            ->options(function (): array {
                                return StudentClass::query()
                                    ->where('student_class')
                                    ->pluck('class_name', 'id')
                                    ->all();
                            })
                            ->required(),
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg'])
                            ->directory('students')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('student_name')
                    ->label('Nama Siswa')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->label('Jenis Kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_class.class_name')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->Label('Gambar')
                    ->height(100),
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
                        ->modalHeading('Edit Siswa')
                        ->using(function (Student $record, array $data): Student {
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
                    Tables\Actions\DeleteAction::make()
                        ->using(function (Student $record): Student {
                            Storage::delete($record->image);
                            $record->delete();
                            return $record;
                        }),
                ])
                    // ->label('Aksi')
                    ->size(ActionSize::ExtraSmall)
                    ->color('primary')
                    ->button()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->using(function (Student $record): Student {
                            Storage::disk('public')->delete($record->image);
                            $record->delete();
                            return $record;
                        }),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageStudents::route('/'),
        ];
    }
}
