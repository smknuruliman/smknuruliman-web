<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;
use Filament\Forms\Components\PasswordInput;

class UserResource extends Resource {
    protected static ?string $model = User::class;
    
    public static function getPluralModelLabel(): string
    {
    return 'User';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // protected static ?string $navigationLabel = 'Account';

    public static function form( Form $form ): Form {
        return $form->schema( [
            TextInput::make( 'name' )
            ->label( 'Nama Lengkap' )
            ->required()
            ->maxLength( 255 ),

            TextInput::make( 'email' )
            ->label( 'Email' )
            ->email()
            ->required()
            ->unique( ignoreRecord: true ),

            TextInput::make( 'password' )
            ->label( 'Password' )
            ->placeholder('Password sengaja di hidden untuk keamanan data saja')
            ->password()
            ->required( fn ( $livewire ) => $livewire instanceof \Filament\Resources\Pages\CreateRecord )
            ->dehydrated( fn ( $state ) => filled( $state ) )
            ->maxLength( 255 )
        ] );

    }

    public static function table( Table $table ): Table {
        return $table->columns( [
            TextColumn::make( 'name' )->label( 'Name' ),
            TextColumn::make( 'email' )->label( 'Email' ),
            TextColumn::make( 'created_at' )->dateTime( 'd M Y' ),
        ] )
         ->filters([
            // Filter cari Nama & Email
            Tables\Filters\Filter::make('search')
                ->form([
                    Forms\Components\TextInput::make('name')
                        ->label('Cari Nama')
                        ->placeholder('Masukkan nama...'),

                    Forms\Components\TextInput::make('email')
                        ->label('Cari Email')
                        ->placeholder('Masukkan email...'),
                ])
                ->query(function ($query, array $data): void {
                    $query
                        ->when($data['name'], fn ($q, $name) =>
                            $q->where('name', 'like', "%{$name}%")
                        )
                        ->when($data['email'], fn ($q, $email) =>
                            $q->where('email', 'like', "%{$email}%")
                        );
                }),

            // Filter tanggal (opsional)
            Tables\Filters\Filter::make('created_at')
                ->form([
                    Forms\Components\DatePicker::make('from')->label('Dari'),
                    Forms\Components\DatePicker::make('until')->label('Sampai'),
                ])
                ->query(function ($query, array $data): void {
                    $query
                        ->when($data['from'], fn ($q, $date) => $q->whereDate('created_at', '>=', $date))
                        ->when($data['until'], fn ($q, $date) => $q->whereDate('created_at', '<=', $date));
                }),
        ])
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

    public static function getPages(): array {
        return [
            'index' => Pages\ListUsers::route( '/' ),
            'create' => Pages\CreateUser::route( '/create' ),
            'edit' => Pages\EditUser::route( '/{record}/edit' ),
        ];
    }

    // batas akses hanya admin saja yang bisa akses fitur ini
    public static function shouldRegisterNavigation(): bool {
        return auth()->user()->is_admin;
    }

}
