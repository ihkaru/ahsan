<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WadahResource\Pages;
use App\Filament\Resources\WadahResource\RelationManagers;
use App\Models\Wadah;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WadahResource extends Resource
{
    protected static ?string $model = Wadah::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Wadah';

    protected static ?string $navigationGroup = 'Manajemen Wadah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('kategori_id')
                    ->required(),
                Forms\Components\DateTimePicker::make('waktu_dibentuk')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('deskripsi'),
                Tables\Columns\TextColumn::make('kategori_id'),
                Tables\Columns\TextColumn::make('waktu_dibentuk')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
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
            'index' => Pages\ListWadahs::route('/'),
            'create' => Pages\CreateWadah::route('/create'),
            'view' => Pages\ViewWadah::route('/{record}'),
            'edit' => Pages\EditWadah::route('/{record}/edit'),
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
