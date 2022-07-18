<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KabkotResource\Pages;
use App\Filament\Resources\KabkotResource\RelationManagers;
use App\Models\Kabkot;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KabkotResource extends Resource
{
    protected static ?string $model = Kabkot::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Kabupaten';

    protected static ?string $navigationGroup = 'Manajemen Lokasi';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->required(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('provinsi_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('provinsi_id'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListKabkots::route('/'),
            'create' => Pages\CreateKabkot::route('/create'),
            'view' => Pages\ViewKabkot::route('/{record}'),
            'edit' => Pages\EditKabkot::route('/{record}/edit'),
        ];
    }
}
