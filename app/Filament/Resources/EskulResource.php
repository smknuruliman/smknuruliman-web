<?php

namespace App\Filament\Resources;

use Log;
use Filament\Forms;
use Filament\Tables;
use App\Models\Eskul;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EskulResource\Pages;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EskulResource\RelationManagers;

class EskulResource extends Resource
{
    protected static ?string $model = Eskul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Eskul';
    protected static ?string $navigationGroup = 'CMS';
    
    public static function getPluralModelLabel(): string
    {
    return 'Section Eskul';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Judul Eskul')->Placeholder('contoh: drumband')->required(),
                TextInput::make('desc')->label('deskripsi max 10 kata saja')->required(),
                TextInput::make('joinCount')->label('Jumlah siswa')->placeholder('jumlah siswa yang masuk di eskul tersebut')->required(),
                FileUpload::make( 'gambar' )
            ->label('gambar max:1mb')
            ->image()
            ->maxSize(300) // ukuran maksimal gambar sangat penting demi menjaga performa website dan pengalaman pengguna 
              ->afterStateUpdated(function ($state) {
            if ($state && Storage::exists($state)) {
            $path = Storage::path($state);
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($path);
            } else {
            Log::warning('File belum tersimpan atau tidak ditemukan: ' . $state);
            }
            })
            ->directory( 'eskul' )
            ->disk( 'public' ),
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('judul'),
                TextColumn::make('desc')->label('deskripsi'),
                TextColumn::make('joinCount')->label('jumlah siswa'),      
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEskuls::route('/'),
            'create' => Pages\CreateEskul::route('/create'),
            'edit' => Pages\EditEskul::route('/{record}/edit'),
        ];
    }

    // batas akses hanya admin saja yang bisa akses fitur ini
    public static function shouldRegisterNavigation(): bool {
        return auth()->user()->is_admin;
    }
}
