<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Teacher;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\StudentClass;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use Filament\Support\Enums\ActionSize;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\StudentClassResource\Pages;

class StudentClassResource extends Resource
{
    protected static ?string $model = StudentClass::class;
    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?int $navigationSort = 3;
    public static function getLabel(): string
    {
        return 'Kelas';
    }
    public static function getEloquentQuery(): Builder
    {
        return StudentClass::query()
            ->select('student_classes.*', 'teachers.teacher_name as teacher_name')
            ->join('teachers', 'teachers.id', '=', 'student_classes.teacher_id')
            ->withCount(['students', 'classWorks']);
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make()
                    ->columns(1)
                    ->columnSpan(2)
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Kelas')
                            ->icon('heroicon-o-home-modern')
                            ->schema([
                                Forms\Components\TextInput::make('class_name')
                                    ->label('Nama Kelas')
                                    ->numeric()
                                    ->placeholder('Masukkan Nama Kelas')
                                    ->autofocus()
                                    ->required(),
                                Forms\Components\FileUpload::make('image')
                                    ->label('Gambar')
                                    ->directory('student_classes')
                                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg'])
                                    ->image()
                                    ->imageEditor()
                                    ->maxSize(2048)
                                    ->required(),
                                Forms\Components\Select::make('teacher_id')
                                    ->label('Wali Kelas')
                                    ->placeholder('Pilih Wali Kelas')
                                    ->relationship('teacher', 'teacher_name')
                                    ->searchable()
                                    ->reactive()
                                    ->options(function (): array {
                                        return DB::table('teachers')
                                            ->select('id', 'teacher_name')
                                            ->where('job', 'Wali Kelas')
                                            ->orderBy('teacher_name')
                                            ->pluck('teacher_name', 'id')
                                            ->toArray();
                                    }),
                            ]),
                        Forms\Components\Tabs\Tab::make('Siswa')
                            ->icon('heroicon-o-user-group')
                            ->schema([
                                Forms\Components\Repeater::make('students')
                                    ->label('')
                                    ->relationship('students')
                                    ->defaultItems(0)
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
                                        Forms\Components\FileUpload::make('image')
                                            ->label('Gambar')
                                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg'])
                                            ->directory('students')
                                            ->image()
                                            ->imageEditor()
                                            ->maxSize(2048)
                                            ->required(),
                                    ])
                            ]),
                        Forms\Components\Tabs\Tab::make('Tugas')
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                Forms\Components\Repeater::make('classWorks')
                                    ->label('')
                                    ->relationship('classWorks')
                                    ->defaultItems(0)
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Judul')
                                            ->placeholder('Masukkan Judul Tugas')
                                            ->required(),
                                        Forms\Components\RichEditor::make('description')
                                            ->label('Deskripsi')
                                            ->placeholder('Masukkan Deskripsi Tugas')
                                            ->required(),
                                    ])
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->height(100),
                Tables\Columns\TextColumn::make('class_name')
                    ->label('Nama Kelas')
                    ->sortable(),
                Tables\Columns\TextColumn::make('teacher_name')
                    ->label('Wali Kelas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('students_count')
                    ->label('Jumlah Siswa')
                    ->sortable()
                    ->formatStateUsing(fn($state) => $state > 0 ? $state : '0')
                    ->badge(),
                Tables\Columns\TextColumn::make('class_works_count')
                    ->label('Jumlah Tugas')
                    ->sortable()
                    ->formatStateUsing(fn($state) => $state > 0 ? $state : '0')
                    ->badge(),
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
                        ->modalHeading('Edit Kelas')
                        ->using(function (StudentClass $record, array $data): StudentClass {
                            $record->fill($data);
                            if ($record->isDirty('image')) {
                                $oldImage = $record->getOriginal('image');
                                if ($oldImage && Storage::exists($oldImage)) {
                                    Storage::delete($oldImage);
                                }
                            }
                            $record->save();
                            return $record;
                        })
                        ->after(function ($record) {
                            if ($record->teacher) {
                                $record->teacher->update([
                                    'job' => 'Wali Kelas ' . $record->class_name,
                                ]);
                            }
                        }),
                    Tables\Actions\DeleteAction::make()
                        ->using(function (StudentClass $record): StudentClass {
                            Storage::delete($record->image);
                            $record->delete();
                            return $record;
                        })
                        ->after(function ($record) {
                            if ($record->teacher) {
                                $record->teacher->update([
                                    'job' => 'Wali Kelas',
                                ]);
                            }
                        }),
                ])
                    ->size(ActionSize::ExtraSmall)
                    ->color('primary')
                    ->button()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->using(function (StudentClass $record): StudentClass {
                            Storage::delete($record->image);
                            $record->delete();
                            return $record;
                        })
                        ->after(function ($record) {
                            if ($record->teacher) {
                                $record->teacher->update([
                                    'job' => 'Guru',
                                ]);
                            }
                        })
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageStudentClasses::route('/'),
        ];
    }
}
