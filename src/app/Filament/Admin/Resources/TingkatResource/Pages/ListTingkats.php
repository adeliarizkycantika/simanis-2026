<?php

namespace App\Filament\Admin\Resources\TingkatResource\Pages;

use App\Filament\Admin\Resources\TingkatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTingkats extends ListRecords
{
    protected static string $resource = TingkatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
