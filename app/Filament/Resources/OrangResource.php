<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrangResource\Pages;
use App\Filament\Resources\OrangResource\RelationManagers;
use App\Models\Orang;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrangResource extends Resource
{
    protected static ?string $model = Orang::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('jenis_kelamin')
                    ->options([
                        "l"=>"Laki - Laki",
                        "p"=>"Perempuan"
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_lahir'),
                Forms\Components\TextInput::make('asal_id')
                    ->rule("numeric")
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\Textarea::make('domisili')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\Textarea::make('link_cv')
                    ->required()
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('tanggal_lahir')->dateTime(),
                Tables\Columns\TextColumn::make('asal_id'),
                Tables\Columns\TextColumn::make('domisili'),
                Tables\Columns\TextColumn::make('domisili_update')->dateTime(),
                Tables\Columns\TextColumn::make('link_cv'),
                Tables\Columns\TextColumn::make('deleted_at')->dateTime(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
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
            'index' => Pages\ListOrangs::route('/'),
            'create' => Pages\CreateOrang::route('/create'),
            'view' => Pages\ViewOrang::route('/{record}'),
            'edit' => Pages\EditOrang::route('/{record}/edit'),
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
