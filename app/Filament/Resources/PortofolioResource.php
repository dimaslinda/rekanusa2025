<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Portofolio;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PortofolioResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\PortofolioResource\RelationManagers;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portofolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Porfotolio Management';

    protected static ?string $navigationLabel = 'Data Portofolio';

    public static function shouldRegisterNavigation(): bool
    {
        return static::can('viewAny'); // Ensure this respects permissions with Filament Shield
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'Total Jumlah Portofolio';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Portofolio')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('judul')
                                    ->autocapitalize('words')
                                    ->required()
                                    ->live(debounce: 500)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->placeholder('Judul Portofolio')
                                    ->label('Judul Portofolio'),
                                TextInput::make('slug')
                                    ->label('Slug Portofolio')
                                    ->placeholder('Slug Portofolio')
                                    ->required()
                                    ->unique(ignorable: fn($record) => $record)
                                    ->readOnly(),
                                Select::make('kategoris')
                                    ->multiple()
                                    ->placeholder('input kategori project')
                                    ->preload()
                                    ->relationship('Kategoris', 'name')
                                    ->required()
                                    ->label('Kategori project'),
                                Toggle::make('publish')
                                    ->label('Publish')
                                    ->inline()
                                    ->onColor('success')
                                    ->offColor('danger'),
                            ]),
                        RichEditor::make('alamat')
                            ->required()
                            ->placeholder('input alamat')
                            ->toolbarButtons([
                                'bold',
                                'redo',
                                'undo',
                            ])
                            ->columnSpanFull(),
                    ]),
                Section::make('Foto Portofolio')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('portofolio')
                            ->collection('portofolio')
                            ->label('Foto Depan Portofolio')
                            ->image()
                            ->disk('gcs')
                            ->directory('portofolios')
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
                        SpatieMediaLibraryFileUpload::make('another_portofolio')
                            ->collection('another_portofolio')
                            ->label('Foto Lainnya')
                            ->image()
                            ->disk('gcs')
                            ->multiple()
                            ->maxFiles(6)
                            ->reorderable()
                            ->directory('portofolios')
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
                TextColumn::make('judul')
                    ->label('Judul Portofolio')
                    ->searchable()
                    ->alignCenter()
                    ->weight(FontWeight::Bold)
                    ->limit(20)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }
                        return $state;
                    }),
                BadgeColumn::make('kategoris.name')
                    ->label('Kategori Project')
                    ->alignCenter()
                    ->colors([
                        'success' => fn($state) => $state === 'Kategori A',
                        'warning' => fn($state) => $state === 'Kategori B',
                        'danger' => fn($state) => $state === 'Kategori C',
                        'primary' => fn($state) => !in_array($state, ['Kategori A', 'Kategori B', 'Kategori C']),
                    ])
                    ->formatStateUsing(function ($state) {
                        if (is_array($state)) {
                            return implode(', ', $state);
                        }
                        return $state ?? '-';
                    }), // Batasan tampilan
                SpatieMediaLibraryImageColumn::make('portofolio')
                    ->label('Foto Depan Portofolio')
                    ->collection('portofolio')
                    ->alignCenter()
                    ->width(100)
                    ->height(100),

                SpatieMediaLibraryImageColumn::make('another_portofolio')
                    ->label('Foto Lainnya')
                    ->collection('another_portofolio')
                    ->alignCenter()
                    ->width(50)
                    ->height(50)
                    ->circular()
                    ->stacked()
                    ->limitedRemainingText(isSeparate: true)
                    ->limit(3),
                ToggleColumn::make('publish')
                    ->label('Publish')
                    ->alignCenter()
                    ->onColor('success') // Warna jika aktif
                    ->offColor('danger') // Warna jika tidak aktif
                    ->action(function ($record, $state) {
                        $record->publish = $state;
                        $record->save();
                    }),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->successNotification(null)
                    ->after(function ($record) {
                        Notification::make()
                            ->title('Updated')
                            ->color('success')
                            ->body("Data Portofolio {$record->judul} berhasil diubah!")
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
                            ->body("Data Portofolio {$record->judul} berhasil dihapus!")
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
                                ->body('Data Portofolio berhasil dihapus secara massal!')
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
            'index' => Pages\ManagePortofolios::route('/'),
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
