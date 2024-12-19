<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RumahResource\Pages;
use App\Filament\Resources\RumahResource\RelationManagers;
use App\Models\Rumah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RumahResource extends Resource
{
    protected static ?string $model = Rumah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Rumah';

    protected static ?string $pluralLabel = 'Rumah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_pemilik'),
                Forms\Components\TextInput::make('kabupaten'),
                Forms\Components\TextInput::make('kecamatan'),
                Forms\Components\TextInput::make('desa'),
                Forms\Components\TextInput::make('alamat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_pemilik'),
                Tables\Columns\TextColumn::make('kabupaten'),
                Tables\Columns\TextColumn::make('kecamatan'),
                Tables\Columns\TextColumn::make('desa'),
                Tables\Columns\TextColumn::make('alamat'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListRumahs::route('/'),
            'create' => Pages\CreateRumah::route('/create'),
            'edit' => Pages\EditRumah::route('/{record}/edit'),
        ];
    }
}
