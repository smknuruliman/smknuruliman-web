<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Spmb;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use Filament\Actions\DeleteAction;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SpmbResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SpmbResource\RelationManagers;

class SpmbResource extends Resource {
    protected static ?string $model = Spmb::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Spmb';
    
    public static function getPluralModelLabel(): string
    {
    return 'spmb dalam tahap pengembangan ';
    }


    public static function form( Form $form ): Form {
        return $form
        ->schema( [
            TextInput::make( 'full_name' )->label('nama lengkap')->required(),
            TextInput::make( 'birth_place' )->label('Tempat lahir')->email()->required(),
            TextInput::make('birth_date')->label('Tanggal Lahir')->required(),
            TextInput::make('gender')->label('Jenis Kelamin')->required(),
            TextInput::make('email')->label('Email')->required(),
            TextInput::make('phone')->label('No. HP / WhatsApp')->required(),
            TextInput::make('address')->label('Alamat Lengkap')->required(),
            TextInput::make('prev_school')->label('Asal Sekolah')->required(),
            TextInput::make('nisn')->label('NISN')->required(),
            TextInput::make('graduation_year')->label('Tahun Lulus')->required(),

        ] );
    }

    public static function table( Table $table ): Table {
        return $table
        ->columns( [
            TextColumn::make( 'full_name' )
            ->label( 'Nama Lengkap' )
            ->searchable()
            ->sortable()
            ->wrap(),

            TextColumn::make( 'email' )
            ->label( 'Email' )
            ->toggleable(),

            TextColumn::make( 'phone' )
            ->label( 'No. HP / WhatsApp' )
            ->toggleable(),

            TextColumn::make( 'prev_school' )
            ->label( 'Asal Sekolah' )
            ->toggleable(),

            TextColumn::make( 'nisn' )
            ->label( 'NISN' )
            ->searchable()
            ->sortable(),

            TextColumn::make( 'created_at' )
            ->label( 'Tanggal Daftar' )
            ->dateTime( 'd M Y H:i' )
            ->sortable(),
        ] )

        ->filters( [
            //
        ] )
        ->actions( [
           EditAction::make(),
           Tables\Actions\DeleteAction::make(),

          Action::make('export_pdf')
    ->label('PDF')
    ->icon('heroicon-o-document-arrow-down')
    ->color('success')
    ->action(function ($record) {
        $artikels = collect([$record]); // hanya 1 artikel yang dipilih
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pages.page_spmb.pdf', compact('artikels'));

        return response()->streamDownload(
            fn() => print($pdf->output()),
            'data-spmb.pdf'
        );
    }),

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

    public static function getPages(): array {
        return [
            'index' => Pages\ListSpmbs::route( '/' ),
            'create' => Pages\CreateSpmb::route( '/create' ),
            'edit' => Pages\EditSpmb::route( '/{record}/edit' ),
        ];
    }

    // batas akses hanya admin saja yang bisa akses fitur ini
    public static function shouldRegisterNavigation(): bool {
        return auth()->user()->is_admin;
    }
}
