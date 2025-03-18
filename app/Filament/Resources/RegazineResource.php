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

class RegazineResource extends Resource
{
    protected static ?string $model = Regazine::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Magazine';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->placeholder('Judul Regazine')
                ->live('bounce')
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                ->required(),
                TextInput::make('slug')
                ->placeholder('input slug')
                ->unique(ignoreRecord: true)
                ->readOnly()
                ->required(),
                SpatieMediaLibraryFileUpload::make('image')
                ->collection('regazine')
                ->maxFiles(1)
                ->label('Image Regazine')
                ->image()
                ->imageEditor()
                ->hint('Max Size File 10 MB')
                ->hintIcon('heroicon-o-information-circle')
                ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg'])
                ->validationMessages([
                            'image' => 'Max Size File 10 MB',
                            'acceptedFileTypes' => 'File Harus Berupa Gambar',
                            'max_file_size' => 'Max Size File 10 MB',
                            'required' => 'File Harus Diisi',
                        ])
                ->required(),
                SpatieMediaLibraryFileUpload::make('pdf')
                        ->collection('kaigazinepdf')
                        ->label('PDF')
                        ->hint('Max Size File 10 MB')
                        ->hintIcon('heroicon-o-information-circle')
                        ->acceptedFileTypes(['application/pdf'])
                        ->validationMessages([
                            'pdf' => 'Max Size File 10 MB',
                            'acceptedFileTypes' => 'File Harus Berupa PDF',
                            'max_file_size' => 'Max Size File 10 MB',
                            'required' => 'File Harus Diisi',
                        ])
                        ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
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
