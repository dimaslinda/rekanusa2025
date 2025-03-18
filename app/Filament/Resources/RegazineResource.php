<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\Regazine;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\RegazineResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RegazineResource\RelationManagers;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class RegazineResource extends Resource
{
    protected static ?string $model = Regazine::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Magazine';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Title Field
                TextInput::make('judul')
                    ->placeholder('Judul Regazine')
                    ->live('bounce')
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),

                // Slug Field
                TextInput::make('slug')
                    ->placeholder('input slug')
                    ->unique(ignoreRecord: true)
                    ->readOnly()
                    ->required(),

                // Image Upload Field
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('regazine') // Collection name in Media Library
                    ->maxFiles(1)
                    ->disk('gcs')
                    ->label('Image Regazine')
                    ->image() // Restrict to images
                    ->imageEditor()
                    ->hint('Max Size File 10 MB')
                    ->hintIcon('heroicon-o-information-circle')
                    ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg', 'image/webp'])
                    ->validationMessages([
                        'image' => 'Max Size File 10 MB',
                        'acceptedFileTypes' => 'File Harus Berupa Gambar',
                        'max_file_size' => 'Max Size File 10 MB',
                        'required' => 'File Harus Diisi',
                    ])
                    ->required(),

                // PDF Upload Field
                // SpatieMediaLibraryFileUpload::make('pdf')
                //     ->collection('regazinepdf') // Collection name for PDFs
                //     ->disk('gcs') // Specify Google Cloud Storage disk
                //     ->label('PDF')
                //     ->hint('Max Size File 10 MB')
                //     ->hintIcon('heroicon-o-information-circle')
                //     ->acceptedFileTypes(['application/pdf'])
                //     ->validationMessages([
                //         'pdf' => 'Max Size File 10 MB',
                //         'acceptedFileTypes' => 'File Harus Berupa PDF',
                //         'max_file_size' => 'Max Size File 10 MB',
                //         'required' => 'File Harus Diisi',
                //     ])
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->sortable()
                    ->searchable(),

                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('regazine')
                    ->disk('gcs')
                    ->label('Image')
                    ->height(100),
            ])
            ->filters([
                // Add filters here if necessary
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRegazines::route('/'),
        ];
    }
}
