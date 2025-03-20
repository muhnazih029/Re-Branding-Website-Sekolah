<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\Announcement;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\AnnouncementResource\Pages;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Manajemen Sekolah';
    protected static ?int $navigationSort = 1;
    public static function getLabel(): string
    {
        return 'Pengumuman';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->columnSpan(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (callable $set, $state) {
                                $set('slug', Str::slug($state));
                            })
                            ->required(),
                        Forms\Components\TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->required(),
                        Forms\Components\Textarea::make('content')
                            ->label('Deskripsi')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Select::make('type')
                            ->label('Tipe')
                            ->options([
                                'announcement' => 'Pengumuman',
                                'news' => 'Berita',
                                'lomba' => 'Lomba',
                            ])
                            ->required(),
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->directory('announcements')
                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg'])
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
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->height(100),
                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe')
                    ->sortable()
                    ->searchable(),
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
                        ->using(function (Announcement $record, array $data): Announcement {
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
                ])
                    ->size(ActionSize::ExtraSmall)
                    ->color('primary')
                    ->button()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->using(function (Announcement $record, array $data): Announcement {
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
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAnnouncements::route('/'),
        ];
    }
}
