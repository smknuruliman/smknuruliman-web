<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Saran;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SaranResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SaranResource\RelationManagers;

class SaranResource extends Resource {
    protected static ?string $model = Saran::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench';
    protected static ?string $navigationLabel = 'Dalam tahap Pengembangan';
    
    public static function getPluralModelLabel(): string
{
    return 'Saran sedang tahap Pengembangan';
}


    // Judul halaman index ( table )
    public static function getTitle(): string {
        return 'Kotak Saran';
    }

    public static function form( Form $form ): Form {
        return $form
        ->schema( [
            //
        ] );
    }

    public static function table( Table $table ): Table {
        return $table
        ->columns( [
            TextColumn::make( 'nama' )->label( 'Nama' ),
            TextColumn::make( 'email' )->label( 'Email' ),
            TextColumn::make( 'pesan' )->label( 'pesan' ),
            TextColumn::make( 'created_at' )->label( 'Pesan dikirm' )->dateTime( 'D, d M Y' ),
        ] )
        ->filters( [
            //
        ] )
        ->actions( [
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ] )
        ->bulkActions( [
            Tables\Actions\BulkActionGroup::make( [
                Tables\Actions\DeleteBulkAction::make(),
            ] ),
        ] );
    }

    public static function getRelations(): array {
        return [
            //
        ];
    }

    //apus tombol create
    public static function canCreate(): bool {
        return false;
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListSarans::route( '/' ),
            'edit' => Pages\EditSaran::route( '/{record}/edit' ),
        ];
    }
    
    // batas akses hanya admin saja yang bisa akses fitur ini
    public static function shouldRegisterNavigation(): bool {
        return auth()->user()->is_admin;
    }
    
}
