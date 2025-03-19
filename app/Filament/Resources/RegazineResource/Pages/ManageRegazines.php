<?php

namespace App\Filament\Resources\RegazineResource\Pages;

use App\Filament\Resources\RegazineResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRegazines extends ManageRecords
{
    protected static string $resource = RegazineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Regazine'),
        ];
    }
    public function getTitle(): string
    {
        return 'Data Regazine';
    }
}
