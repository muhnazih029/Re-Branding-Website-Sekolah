<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use App\Models\CalendarAcademic;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\CalendarAcademicResource\Pages;
use Illuminate\Database\Eloquent\Builder;

class CalendarAcademicResource extends Resource
{
    protected static ?string $model = CalendarAcademic::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?int $navigationSort = 5;
    public static function getLabel(): string
    {
        return 'Kalender Akademik';
    }
    public static function getEloquentQuery(): Builder
    {
        return CalendarAcademic::query()
            ->select('calendar_academics.*', 'users.name as user_name')
            ->join('users', 'users.id', '=', 'calendar_academics.user_id');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul')
                            ->placeholder('Masukkan Judul Kalender')
                            ->required(),
                        Forms\Components\Select::make('year')
                            ->label('Tahun')
                            ->options(
                                collect(range(date('Y'), 1900))->mapWithKeys(fn($year) => [$year => $year])
                            )
                            ->required(),
                        Forms\Components\FileUpload::make('document')
                            ->label('Dokumen')
                            ->directory('calendar_academics')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(2048)
                            ->openable()
                            ->downloadable()
                            ->required(),
                        Forms\Components\Hidden::make('user_id')
                            ->default(Filament::auth()->user()->id)
                            ->dehydrated()
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('document')
                    ->label('Dokumen')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_name')
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
                        ->using(function (CalendarAcademic $record, array $data): CalendarAcademic {
                            $record->fill($data);
                            if ($record->isDirty('document')) {
                                $oldDocument = $record->getOriginal('document');
                                if ($oldDocument && Storage::exists($oldDocument)) {
                                    Storage::delete($oldDocument);
                                }
                            }
                            $record->save();
                            return $record;
                        }),
                    Tables\Actions\DeleteAction::make()
                        ->using(function (CalendarAcademic $record): CalendarAcademic {
                            Storage::delete($record->document);
                            $record->delete();
                            return $record;
                        }),
                ])
                    ->size(ActionSize::ExtraSmall)
                    ->color('primary')
                    ->button()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->using(function (CalendarAcademic $record): CalendarAcademic {
                            Storage::delete($record->document);
                            $record->delete();
                            return $record;
                        }),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCalendarAcademics::route('/'),
        ];
    }
}
