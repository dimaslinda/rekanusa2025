<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\Kategori;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KategoriResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KategoriResource\RelationManagers;

class KategoriResource extends Resource
{
    protected static ?string $model = Kategori::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'Porfotolio Management';

    protected static ?string $navigationLabel = 'Kategori Testimoni';

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
                    ->placeholder('input name kategori Testimoni')
                    ->live(debounce:500)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->label('Nama Kategori Layanan')
                    ->maxLength(255),
                TextInput::make('slug')
                    ->placeholder('input slug')
                    ->required()
                    ->unique(ignorable: fn ($record) => $record)
                    ->label('Slug')
                    ->readOnly()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Kategori Layanan')
                ->alignCenter()
                ->searchable(),
                TextColumn::make('created_at')
                ->searchable()
                ->sortable()
                ->alignCenter()
                ->dateTime('d M, Y')
                ->label('Dibuat Pada'),
                TextColumn::make('updated_at')
                ->searchable()
                ->sortable()
                ->alignCenter()
                ->date('d M, Y')
                ->label('Diubah Pada'),
            ])
            ->filters([
                Filter::make('created_at')
                ->form([
                    Forms\Components\DatePicker::make('created_from')
                        ->label('Dari Tanggal'),
                    Forms\Components\DatePicker::make('created_until')
                        ->label('Sampai Tanggal'),
                ])
                ->indicateUsing(function (array $data): array {
                    $indicators = [];

                    if ($data['created_from'] && $data['created_until']) {
                        $indicators[] = 'Created between ' . $data['created_from'] . ' and ' . $data['created_until'];
                    }

                    return $indicators;
                })
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                    ->when(
                        $data['created_from'],
                        fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                    )
                    ->when(
                        $data['created_until'],
                        fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                    );
                })
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->successNotification(null)
                    ->after(function ($record) {
                        Notification::make()
                            ->title('Updated')
                            ->color('success')
                            ->body("Data kategori {$record->name} berhasil diubah!")
                            ->success()
                            ->duration(3000)
                            ->send();
                    }),
                Tables\Actions\DeleteAction::make()
                    ->successNotification(null)
                    ->after(function ($record) {
                        Notification::make()
                            ->title('Deleted')
                            ->iconColor('danger')
                            ->icon('heroicon-o-trash')
                            ->color('danger')
                            ->body("Data kategori {$record->name} berhasil dihapus!")
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
                                ->title('Deleted')
                                ->color('danger')
                                ->iconColor('danger')
                                ->icon('heroicon-o-trash')
                                ->body('Data kategori berhasil dihapus secara massal!')
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
            'index' => Pages\ManageKategoris::route('/'),
        ];
    }

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
