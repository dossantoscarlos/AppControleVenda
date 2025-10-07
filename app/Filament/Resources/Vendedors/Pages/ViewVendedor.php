<?php

namespace App\Filament\Resources\Vendedors\Pages;

use App\Filament\Resources\Vendedors\VendedorResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVendedor extends ViewRecord
{
    protected static string $resource = VendedorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
