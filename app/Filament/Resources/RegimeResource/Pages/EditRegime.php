<?php

namespace App\Filament\Resources\RegimeResource\Pages;

use App\Filament\Resources\RegimeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegime extends EditRecord
{
    protected static string $resource = RegimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
