<?php

namespace App\Filament\Resources\Vendas\Pages;

use App\Filament\Resources\Vendas\VendaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVenda extends ViewRecord
{
    protected static string $resource = VendaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
