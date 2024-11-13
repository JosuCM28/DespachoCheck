<?php

namespace App\Filament\Resources\RegimeResource\Pages;

use App\Filament\Resources\RegimeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRegime extends ViewRecord
{
    protected static string $resource = RegimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
