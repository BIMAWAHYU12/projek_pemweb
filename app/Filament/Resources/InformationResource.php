<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformationResource\Pages;
use App\Filament\Resources\InformationResource\RelationManagers;
use App\Models\Information;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// --- Import Class untuk Form dan Tabel ---
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class InformationResource extends Resource
{
    protected static ?string $model = Information::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Informasi Mahasiswa';
    protected static ?string $modelLabel = 'Informasi';

   
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk Judul
                TextInput::make('title')
                    ->label('Judul Informasi')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                // Input dropdown untuk Kategori
                Select::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name')
                    ->required(),

                // Input untuk Link
                TextInput::make('link')
                    ->label('Link Eksternal (URL)')
                    ->url()
                    ->required(),

                // Input untuk Deskripsi
                RichEditor::make('content')
                    ->label('Deskripsi Lengkap')
                    ->required()
                    ->columnSpanFull(),

                // Input untuk Gambar
                FileUpload::make('image')
                    ->label('Gambar Banner')
                    ->image()
                    ->directory('information-images')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    // ===================================================================
    // === DEFINISI TABEL UNTUK MENAMPILKAN DAFTAR DATA ==================
    // ===================================================================
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar'),
                
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(40),

                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->sortable()
                    ->badge(),

                TextColumn::make('created_at')
                    ->label('Tanggal Posting')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->relationship('category', 'name'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListInformation::route('/'),
            'create' => Pages\CreateInformation::route('/create'),
            // 'view' => Pages\ViewInformation::route('/{record}'), // <-- BARIS INI DIHAPUS UNTUK MEMPERBAIKI ERROR
            'edit' => Pages\EditInformation::route('/{record}/edit'),
        ];
    }    
}
