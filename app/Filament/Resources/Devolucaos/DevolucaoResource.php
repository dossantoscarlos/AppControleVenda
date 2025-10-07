<?php

namespace App\Filament\Resources\Devolucaos;

use App\Filament\Resources\Devolucaos\Pages\CreateDevolucao;
use App\Filament\Resources\Devolucaos\Pages\EditDevolucao;
use App\Filament\Resources\Devolucaos\Pages\ListDevolucaos;
use App\Filament\Resources\Devolucaos\Schemas\DevolucaoForm;
use App\Filament\Resources\Devolucaos\Tables\DevolucaosTable;
use App\Models\Devolucao;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DevolucaoResource extends Resource
{
    protected static ?string $model = Devolucao::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Devolucao';

    public static function form(Schema $schema): Schema
    {
        return DevolucaoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DevolucaosTable::configure($table);
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
            'index' => ListDevolucaos::route('/'),
            'create' => CreateDevolucao::route('/create'),
            'edit' => EditDevolucao::route('/{record}/edit'),
        ];
    }
}
