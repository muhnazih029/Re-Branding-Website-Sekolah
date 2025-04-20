<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Complain;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ComplainResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ComplainResource\RelationManagers;

class ComplainResource extends Resource
{
    protected static ?string $model = Complain::class;
    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Manajemen Sekolah';
    protected static ?int $navigationSort = 6;
    public static function getLabel(): string
    {
        return 'Pengaduan';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->disabled(),
                Forms\Components\TextInput::make('email')->disabled(),
                Forms\Components\TextInput::make('phone')->disabled(),
                Forms\Components\Textarea::make('description')->disabled()->label('Isi Pengaduan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('created_at')->since()->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('Reply via Gmail')
                    ->icon('heroicon-o-envelope')
                    ->url(fn(Complain $record) =>
                        'https://mail.google.com/mail/?view=cm&fs=1&to=' . urlencode($record->email) .
                        '&su=' . urlencode('Balasan Pengaduan Anda') .
                        '&body=' . urlencode("Halo {$record->name},\n\nKami telah menerima pengaduan Anda dan berikut ini adalah tanggapan dari kami:\n\n"))
                    ->openUrlInNewTab(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageComplains::route('/'),
        ];
    }
}
