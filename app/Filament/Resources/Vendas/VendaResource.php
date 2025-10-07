<?php

namespace App\Filament\Resources\Vendas;

use App\Filament\Resources\Vendas\Pages\CreateVenda;
use App\Filament\Resources\Vendas\Pages\EditVenda;
use App\Filament\Resources\Vendas\Pages\ListVendas;
use App\Filament\Resources\Vendas\Pages\ViewVenda;
use App\Filament\Resources\Vendas\Schemas\VendaForm;
use App\Filament\Resources\Vendas\Schemas\VendaInfolist;
use App\Filament\Resources\Vendas\Tables\VendasTable;
use App\Models\Venda;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VendaResource extends Resource
{
    protected static ?string $model = Venda::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Venda';

    public static function form(Schema $schema): Schema
    {
        return VendaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VendaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VendasTable::configure($table);
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
            'index' => ListVendas::route('/'),
            'create' => CreateVenda::route('/create'),
            'view' => ViewVenda::route('/{record}'),
            'edit' => EditVenda::route('/{record}/edit'),
        ];
    }
}
