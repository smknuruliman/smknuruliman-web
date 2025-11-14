<?php

namespace App\Filament\Resources;

use Log;
use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\ImageColumn;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use App\Filament\Resources\ArticleResource\Pages;


class ArticleResource extends Resource {
    protected static ?string $model = Article::class;

    protected static ?string $navigationLabel = 'Artikel';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'CMS';
    
    public static function getPluralModelLabel(): string
    {
    return 'Artikel dan berita';
    }


    // form artikel
    public static function form( Form $form ): Form {
        return $form->schema( [
            Forms\Components\Hidden::make( 'user_id' )
            ->default( fn () => auth()->id() ),
            Forms\Components\TextInput::make( 'title' )
            ->placeholder('judul artikel dan berita')
            ->reactive()
            ->required(),

            Forms\Components\TextInput::make( 'penulis' )
            ->placeholder('Nama penulis')
            ->reactive()
            ->required(),

            Forms\Components\RichEditor::make( 'content' )->columnSpan('full')->required(),

            Forms\Components\Select::make( 'category' )
            ->options( [
                'kegiatan' => 'kegiatan',
                'info spmb' => 'info spmb',
                'prestasi' => 'prestasi',
                'umum' => 'umum',
            ] ),

            Forms\Components\FileUpload::make( 'cover_image' )
            ->label('gambar max:1mb')
            ->image()
            ->maxSize(1000) // ukuran maksimal gambar sangat penting demi menjaga performa website dan pengalaman pengguna 
              ->afterStateUpdated(function ($state) {
            if ($state && Storage::exists($state)) {
            $path = Storage::path($state);
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($path);
            } else {
            Log::warning('File belum tersimpan atau tidak ditemukan: ' . $state);
            }
            })
            ->directory( 'articles' )
            ->disk( 'public' ),

            Forms\Components\Hidden::make( 'user_id' )
            ->default( fn () => auth()->id() ),
        ] );
    }

    // table artikel
    public static function table( Table $table ): Table {
        return $table->columns( [
            TextColumn::make( 'title' )->sortable()->searchable(),
            TextColumn::make('content')
            ->label('content')
            ->limit(40) //limit buat cntent nye
            ->formatStateUsing(fn ($state) => strip_tags($state))   // munculkan text biasa bukan dengan tag html nya
            ->suffix('...'),
            TextColumn::make( 'cover_image' ),
            ImageColumn::make( 'cover_image' )
            ->disk( 'public' )
            ->height( 60 )
            ->defaultImageUrl( url( '/images/placeholder.jpg' ) ),
            TextColumn::make( 'category' )->label( 'category' ),
            TextColumn::make( 'penulis' )->label( 'penulis' ),
            TextColumn::make( 'created_at' )->dateTime( 'd M Y' ),
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
        return [];
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListArticles::route( '/' ),
            'create' => Pages\CreateArticle::route( '/create' ),
            'edit' => Pages\EditArticle::route( '/{record}/edit' ),
        ];
    }

    public static function shouldRegisterNavigation(): bool {
        return true;
    }
}
