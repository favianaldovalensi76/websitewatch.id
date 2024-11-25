<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductLogResource\Pages;
use App\Models\ProductLog;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ProductLogResource extends Resource
{
    protected static ?string $model = ProductLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product.title')
                    ->label('Product Title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('action')
                    ->label('Action')
                    ->sortable(),
                Tables\Columns\ViewColumn::make('changes')
                    ->label('Changes')
                    ->view('tables.columns.changes-view'),
                TextColumn::make('created_at')
                    ->label('Logged At')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductLogs::route('/'),
        ];
    }
}
