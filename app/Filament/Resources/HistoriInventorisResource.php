<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoriInventorisResource\Pages;
use App\Filament\Resources\HistoriInventorisResource\RelationManagers;
use App\Models\HistoriInventoris;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoriInventorisResource extends Resource
{
    protected static ?string $model = HistoriInventoris::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Riwayat Inventoris';

    protected static ?string $navigationGroup = 'Manajemen Inventoris';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('pemindah')
                    ->label("Pemindah")
                    ->placeholder("Cari nama seseorang")
                    ->relationship('orang','nama')
                    ->required()
                    ->searchable(),
                Select::make('inventoris_id')
                    ->label("Nama Inventoris")
                    ->relationship('inventoris','nama')
                    ->required()
                    ->searchable(),
                Select::make('alamat_tujuan')
                    ->label("Alamat Tujuan")
                    ->relationship('alamat','nama')
                    ->required()
                    ->searchable(),
                Select::make('status')
                    ->label("Status")
                    ->relationship('kategori','nama',fn(Builder $q)=>$q->historiInventoris())
                    ->required()
                    ->searchable(),
                Select::make('pengguna')
                    ->label("Pengguna")
                    ->placeholder("Cari nama wadah yang menggunakan")
                    ->relationship('wadah','nama')
                    ->required()
                    ->searchable(),
                DateTimePicker::make('dipindah_pada')
                    ->label("Dipindahkan Pada")
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pemindah'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('alamat_tujuan'),
                Tables\Columns\TextColumn::make('tujuan_pemindahan'),
                Tables\Columns\TextColumn::make('pengguna'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListHistoriInventoris::route('/'),
            'create' => Pages\CreateHistoriInventoris::route('/create'),
            'view' => Pages\ViewHistoriInventoris::route('/{record}'),
            'edit' => Pages\EditHistoriInventoris::route('/{record}/edit'),
        ];
    }
}
