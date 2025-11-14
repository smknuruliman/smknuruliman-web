<?php

namespace App\Filament\Resources;

use Log;
use Filament\Forms;
use Filament\Tables;
use App\Models\Profile;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Forms\Components\Section;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use App\Filament\Resources\ProfileResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfileResource\RelationManagers;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Profil';
    protected static ?string $navigationGroup = 'CMS';

    public static function getPluralModelLabel(): string
    {
    return 'Section Profil';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            RichEditor::make('profile_desc')->columnSpan('full')->label('Deskripsi'),
            FileUpload::make( 'profile_img1' )
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
            ->directory( 'cms-img' )
            ->disk( 'public' ),
            FileUpload::make( 'profile_img2' )
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
            ->directory( 'cms-img' )
            ->disk( 'public' ),
            FileUpload::make( 'profile_img3' )
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
            ->directory( 'cms-img' )
            ->disk( 'public' ),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('profile_desc')->label('deskripsi')->limit('15')->formatStateUsing(fn ($state) => strip_tags($state)),
            ImageColumn::make( 'profile_img1' )
            ->disk( 'public' )
            ->height( 60 )
            ->defaultImageUrl( url( '/cms-img/placeholder.jpg' ) ),
            ImageColumn::make( 'profile_img2' )
            ->disk( 'public' )
            ->height( 60 )
            ->defaultImageUrl( url( '/images/placeholder.jpg' ) ),
            ImageColumn::make( 'profile_img3' )
            ->disk( 'public' )
            ->height( 60 )
            ->defaultImageUrl( url( '/images/placeholder.jpg' ) ),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
    
        //apus tombol create
    public static function canCreate(): bool {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }

     // batas akses hanya admin saja yang bisa akses fitur ini
    public static function shouldRegisterNavigation(): bool {
        return auth()->user()->is_admin;
    }
}
