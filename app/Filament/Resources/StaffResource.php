<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Staff;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Log;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\StaffResource\Pages;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StaffResource\RelationManagers;

class StaffResource extends Resource
{
    protected static ?string $model = Staff::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // Masukkan ke dalam dropdown Content
    protected static ?string $navigationGroup = 'Data Master';

     public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('title')
                ->required()
                ->placeholder('Title guru misal guru mapel apa')
                ->maxLength(255),

            Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('teachers') // simpan di storage/app/public/teachers
                ->disk('public')
                ->maxSize(600) // ukuran maksimal gambar sangat penting demi menjaga performa website dan pengalaman pengguna 
                ->afterStateUpdated(function ($state) {
                 if ($state && Storage::exists($state)) {
                 $path = Storage::path($state);
                 $optimizerChain = OptimizerChainFactory::create();
                 $optimizerChain->optimize($path);
                 } else {
                 Log::warning('File belum tersimpan atau tidak ditemukan: ' . $state);
                 }
                 })
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->sortable()->searchable(),
            TextColumn::make('title')->sortable(),
            ImageColumn::make('image'),
            TextColumn::make('created_at')->dateTime('d M Y'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'edit' => Pages\EditStaff::route('/{record}/edit'),
        ];
    }

    // batas akses hanya admin saja yang bisa akses fitur ini
    public static function shouldRegisterNavigation(): bool {
        return auth()->user()->is_admin;
    }
}
