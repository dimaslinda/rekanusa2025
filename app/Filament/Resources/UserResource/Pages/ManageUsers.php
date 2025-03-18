<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Notifications\Notification;

class ManageUsers extends ManageRecords
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Data User';
    }

    protected function afterCreate($record): void
    {
        Notification::make()
            ->title('User Created!')
            ->success()
            ->body("The user {$record->name} has been successfully created.")
            ->send();
    }

    protected function afterEdit($record): void
    {
        Notification::make()
            ->title('User Updated!')
            ->success()
            ->body("The user {$record->name} has been successfully updated.")
            ->send();
    }

    protected function afterDelete($record): void
    {
        Notification::make()
            ->title('User Deleted!')
            ->warning()
            ->body("The user {$record->name} has been successfully deleted.")
            ->send();
    }
}
