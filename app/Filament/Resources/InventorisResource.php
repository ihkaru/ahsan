<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventorisResource\Pages;
use App\Filament\Resources\InventorisResource\RelationManagers;
use App\Models\Inventoris;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventorisResource extends Resource
{
    protected static ?string $model = Inventoris::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Inventoris';

    protected static ?string $navigationGroup = 'Manajemen Inventoris';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DateTimePicker::make('masa_mulai_pakai'),
                Forms\Components\DateTimePicker::make('masa_selesai_pakai'),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kategori_id')
                    ->required(),
                Forms\Components\TextInput::make('jumlah')
                    ->required(),
                Forms\Components\TextInput::make('pemilik')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('masa_mulai_pakai')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('masa_selesai_pakai')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kategori_id'),
                Tables\Columns\TextColumn::make('jumlah'),
                Tables\Columns\TextColumn::make('pemilik'),
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
            'index' => Pages\ListInventoris::route('/'),
            'create' => Pages\CreateInventoris::route('/create'),
            'view' => Pages\ViewInventoris::route('/{record}'),
            'edit' => Pages\EditInventoris::route('/{record}/edit'),
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
