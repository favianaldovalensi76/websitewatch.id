<?php

namespace App\Filament\Resources\ProductLogResource\Pages;

use App\Filament\Resources\ProductLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductLog extends EditRecord
{
    protected static string $resource = ProductLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
