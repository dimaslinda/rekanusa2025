<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'User Management'; // Optional grouping for better organization

    protected static ?int $navigationSort = 4;

    /**
     * Add required permissions to the resource.
     */
    public static function shouldRegisterNavigation(): bool
    {
        return static::can('viewAny'); // Ensure this respects permissions with Filament Shield
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->placeholder('input name')
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->placeholder('input email')
                    ->required()
                    ->maxLength(255),

                TextInput::make('password')
                    ->password()
                    ->placeholder('input password')
                    ->revealable()
                    ->dehydrateStateUsing(fn($state): string => bcrypt($state))
                    ->dehydrated(fn($state) => filled($state))
                    ->required(fn(Page $livewire): bool => $livewire instanceof CreateRecord)
                    ->minLength(8),

                Select::make('roles')
                    ->relationship('roles', 'name')
                    ->placeholder('input roles')
                    ->multiple() // Allows assigning multiple roles
                    ->required()
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('email')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('roles.name') // Show user roles
                    ->label('Roles')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->successNotification(null)
                    ->after(function ($record) {
                        Notification::make()
                            ->title('Berhasil')
                            ->body("Data User {$record->name} berhasil diubah!")
                            ->success()
                            ->duration(3000)
                            ->send();
                    }),
                Tables\Actions\DeleteAction::make()
                    ->successNotification(null)
                    ->after(function ($record) {
                        Notification::make()
                            ->title('Berhasil')
                            ->body("Data User {$record->name} berhasil dihapus!")
                            ->success()
                            ->duration(3000)
                            ->send();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->successNotification(null)
                        ->after(function () {
                            Notification::make()
                                ->title('Berhasil')
                                ->body('Data User berhasil dihapus secara massal!')
                                ->success()
                                ->duration(3000)
                                ->send();
                        }),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUsers::route('/'),
        ];
    }

    /**
     * Register permissions with Filament Shield.
     */
    public static function getPermissions(): array
    {
        return [
            'viewAny',
            'view',
            'create',
            'update',
            'delete',
            'restore',
            'forceDelete',
        ];
    }
}
