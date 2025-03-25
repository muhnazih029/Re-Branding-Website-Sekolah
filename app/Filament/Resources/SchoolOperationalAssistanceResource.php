<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Illuminate\Database\Eloquent\Builder;
use App\Models\SchoolOperationalAssistance;
use App\Filament\Resources\SchoolOperationalAssistanceResource\Pages;

class SchoolOperationalAssistanceResource extends Resource
{
    protected static ?string $model = SchoolOperationalAssistance::class;
    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationGroup = 'Manajemen Sekolah';
    protected static ?int $navigationSort = 5;
    public static function getLabel(): string
    {
        return 'Dana BOS';
    }
    public static function getEloquentQuery(): Builder
    {
        return SchoolOperationalAssistance::query()
            ->select('school_operational_assistances.*', 'users.name as user_name')
            ->join('users', 'users.id', '=', 'school_operational_assistances.user_id');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\DatePicker::make('date')
                            ->label('Tanggal')
                            ->required(),
                        Forms\Components\TextInput::make('receipt')
                            ->label('Peherimaan')
                            ->placeholder('Masukkan Dana Penerimaan')
                            ->numeric()
                            ->required(),
                        Forms\Components\TextInput::make('expenditure')
                            ->label('Pengeluaran')
                            ->placeholder('Masukkan Dana Pengeluaran')
                            ->numeric()
                            ->required(),
                        Forms\Components\TextInput::make('bank_balance')
                            ->label('Saldo Bank')
                            ->placeholder('Masukkan Saldo Bank')
                            ->numeric()
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
                Tables\Columns\TextColumn::make('date')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('receipt')
                    ->label('Penerimaan')
                    ->money('idr')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expenditure')
                    ->label('Pengeluaran')
                    ->money('idr')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bank_balance')
                    ->label('Saldo Bank')
                    ->money('idr')
                    ->searchable(),
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
                        ->modalWidth('xl'),
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
            'index' => Pages\ManageSchoolOperationalAssistances::route('/'),
        ];
    }
}
