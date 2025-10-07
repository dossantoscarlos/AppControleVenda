<?php

namespace App\Filament\Resources\Devolucaos\Pages;

use App\Filament\Resources\Devolucaos\DevolucaoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDevolucao extends EditRecord
{
    protected static string $resource = DevolucaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
