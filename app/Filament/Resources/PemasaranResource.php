<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemasaranResource\Pages;
use App\Filament\Resources\PemasaranResource\RelationManagers;
use App\Models\Pemasaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PemasaranResource extends Resource
{
    protected static ?string $model = Pemasaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('nama_kampanye')
                ->required()
                ->maxLength(255),
            Forms\Components\DatePicker::make('tanggal_mulai')
                ->required(),
            Forms\Components\DatePicker::make('tanggal_selesai'),
            Forms\Components\Textarea::make('deskripsi')
                ->nullable(),
            Forms\Components\TextInput::make('biaya')
                ->numeric()
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('nama_kampanye')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('tanggal_mulai')->date(),
            Tables\Columns\TextColumn::make('tanggal_selesai')->date(),
            Tables\Columns\TextColumn::make('biaya')->money('IDR', true),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPemasarans::route('/'),
            'create' => Pages\CreatePemasaran::route('/create'),
            'edit' => Pages\EditPemasaran::route('/{record}/edit'),
        ];
    }
}
