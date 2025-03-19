<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Testimoni;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TestimoniResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\TestimoniResource\RelationManagers;
use Filament\Notifications\Notification;

class TestimoniResource extends Resource
{
    protected static ?string $model = Testimoni::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationGroup = 'Porfotolio Management';

    protected static ?string $navigationLabel = 'Data Testimoni';

    public static function shouldRegisterNavigation(): bool
{
    return static::can('viewAny'); // Ensure this respects permissions with Filament Shield
}

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Testimoni')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('nama_project')
                                    ->required()
                                    ->placeholder('input name project')
                                    ->autocapitalize('words')
                                    ->label('Nama Project')
                                    ->maxLength(255),
                                Select::make('kategoris')
                                    ->multiple()
                                    ->placeholder('input kategori project')
                                    ->preload()
                                    ->relationship('Kategoris', 'name')
                                    ->required()
                                    ->label('Kategori project'),
                                TextInput::make('nama')
                                    ->required()
                                    ->placeholder('input name')
                                    ->label('Nama')
                                    ->maxLength(255),
                                TextInput::make('jabatan')
                                    ->placeholder('input jabatan')
                                    ->required()
                                    ->label('Jabatan')
                                    ->maxLength(255),
                            ]),
                        RichEditor::make('testimoni')
                            ->required()
                            ->placeholder('input testimoni')
                            ->toolbarButtons([
                                'bold',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'redo',
                                'undo',
                                'strike',
                                'underline',
                            ])
                            ->columnSpanFull(),
                    ]),
                Section::make('Foto Testimoni')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('foto')
                            ->collection('testimoni')
                            ->disk('gcs')
                            ->label('Foto Testimoni')
                            ->image()
                            ->directory('testimoni')
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->maxSize(10024)
                            ->hint('Ukuran Maksimal 10 MB')
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintColor('warning')
                            ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg', 'image/webp'])
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                BadgeColumn::make('kategoris.name')
                ->label('Kategori Project')
                ->alignCenter()
                ->colors([
                    'success' => fn ($state) => $state === 'Kategori A',
                    'warning' => fn ($state) => $state === 'Kategori B',
                    'danger' => fn ($state) => $state === 'Kategori C',
                    'primary' => fn ($state) => !in_array($state, ['Kategori A', 'Kategori B', 'Kategori C']),
                ])
                ->formatStateUsing(function ($state) {
                    if (is_array($state)) {
                        return implode(', ', $state);
                    }
                    return $state ?? '-';
                }), // Batasan tampilan

                TextColumn::make('nama_project')
                ->label('Nama Project')
                ->searchable()
                ->sortable(),
                TextColumn::make('nama')
                ->label('Nama')
                ->searchable()
                ->sortable(),
                TextColumn::make('jabatan')
                ->label('Jabatan')
                ->alignCenter()
                ->limit(50)
                ->wrap()
                ->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();

                    if (strlen($state) <= $column->getCharacterLimit()) {
                        return null;
                    }

                    // Only render the tooltip if the column content exceeds the length limit.
                    return $state;
                })
                ->searchable()
                ->sortable(),
                TextColumn::make('testimoni')
                ->label('Testimoni')
                ->html()
                ->limit(50)
                ->wrap()
                ->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();

                    if (strlen($state) <= $column->getCharacterLimit()) {
                        return null;
                    }

                    // Only render the tooltip if the column content exceeds the length limit.
                    return $state;
                })
                ->searchable()
                ->sortable(),
                SpatieMediaLibraryImageColumn::make('foto')
                ->collection('testimoni')
                ->label('Foto Testimoni')
                ->searchable()
                ->alignCenter()
                ->width(100)
                ->height(100)
                ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategoris')
                    ->relationship('Kategoris', 'name')
                    ->multiple()
                    ->preload()
                    ->label('Filter Kategori')
                    ->placeholder('Pilih Kategori'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->successNotification(null)
                    ->after(function ($record) {
                        Notification::make()
                            ->title('Updated')
                            ->color('success')
                            ->body("Data Testimoni {$record->nama_project} berhasil diubah!")
                            ->success()
                            ->duration(3000)
                            ->send();
                    }),
                Tables\Actions\DeleteAction::make()
                    ->successNotification(null)
                    ->after(function ($record) {
                        Notification::make()
                            ->title('Deleted')
                            ->color('danger')
                            ->icon('heroicon-s-trash')
                            ->iconColor('danger')
                            ->body("Data Testimoni {$record->nama_project} berhasil dihapus!")
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
                                ->icon('heroicon-s-trash')
                                ->iconColor('danger')
                                ->body('Data Testimoni berhasil dihapus secara massal!')
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
            'index' => Pages\ManageTestimonis::route('/'),
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
