<?php

namespace App\Filament\Resources\Devolucaos\Pages;

use App\Filament\Resources\Devolucaos\DevolucaoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDevolucaos extends ListRecords
{
    protected static string $resource = DevolucaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
