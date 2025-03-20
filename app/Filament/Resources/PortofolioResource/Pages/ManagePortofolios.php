<?php

namespace App\Filament\Resources\PortofolioResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\PortofolioResource;

class ManagePortofolios extends ManageRecords
{
    protected static string $resource = PortofolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Portofolio')
                ->successNotification(null)
                ->after(function ($record) {
                    Notification::make()
                        ->title('Saved')
                        ->color('success')
                        ->body("Kategori {$record->judul} berhasil ditambahkan!")
                        ->success()
                        ->duration(3000)
                        ->send();
                }),
        ];
    }

    public function getTitle(): string
    {
        return 'Data Portofolio';
    }
}
