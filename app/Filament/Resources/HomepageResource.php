<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\homepages;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use App\Filament\Resources\HomepageResource\Pages;

class HomepageResource extends Resource {
    protected static ?string $model = homepages::class;
    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'CMS';
    protected static ?string $navigationLabel = 'Hero dan footer';
    
    public static function getModelLabel(): string
    {
    return 'Hero section dan footer'; // Ganti sesuai keinginan
    }


    // Batasi hanya 1 data terbaru
    public static function getEloquentQuery(): Builder {
        return parent::getEloquentQuery()->latest()->limit( 1 );
    }

    public static function form( Form $form ): Form {
        return $form->schema( [
            Forms\Components\RichEditor::make( 'hero_title' )->columnSpan('full')->label( 'Judul h1 (hero section)' )->required(),
            Forms\Components\RichEditor::make( 'jurusan_title' )->label( 'Judul Jurusan (jurusan section)' ),
            Forms\Components\RichEditor::make( 'footer_desc' )->label( 'Deskripsi Footer (footer section)' ),
            Forms\Components\RichEditor::make( 'footer_addres' )->label( 'Alamat Footer (footer section)' ),
            Forms\Components\RichEditor::make( 'footer_sosmed(1)' )->label( 'Sosmed 1 (footer section)' ),
            Forms\Components\RichEditor::make( 'footer_sosmed(2)' )->label( 'Sosmed 2 (footer section)' ),
            Forms\Components\RichEditor::make( 'footer_email' )->label( 'Email (footer section)' ),
            Forms\Components\RichEditor::make( 'footer_phone' )->label( 'Telepon (footer section)' ),
        ] );
    }

    public static function table( Table $table ): Table {
        return $table
        ->columns( [
            Tables\Columns\TextColumn::make( 'hero_title' )->label( 'Judul Hero' ),
            Tables\Columns\TextColumn::make( 'footer_desc' )->limit(5)->label( 'Deskripsi Footer' ),
            Tables\Columns\TextColumn::make( 'footer_addres' )->label( 'Alamat Footer' ),
            Tables\Columns\TextColumn::make( 'footer_sosmed(1)' )->label( 'Sosmed 1' ),
            Tables\Columns\TextColumn::make( 'footer_sosmed(2)' )->label( 'Sosmed 2' ),
            Tables\Columns\TextColumn::make( 'footer_email' )->label( 'Email' ),
            Tables\Columns\TextColumn::make( 'footer_phone' )->label( 'Telepon' ),
        ] )
        ->actions( [
            Tables\Actions\EditAction::make(),
        ] )
        ->bulkActions( [] );
        // Disable bulk actions
    }

    public static function canDelete( \Illuminate\Database\Eloquent\Model $record ): bool {
        return false;
    }

    //apus tombol create
    public static function canCreate(): bool {
        return false;
    }
    public static function getRelations(): array {
        return [];
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListHomepages::route( '/' ),
            'edit' => Pages\EditHomepage::route( '/{record}/edit' ),
        ];
    }

    // batas akses hanya admin saja yang bisa akses fitur ini
    public static function shouldRegisterNavigation(): bool {
        return auth()->user()->is_admin;
    }
}
