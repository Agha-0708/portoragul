<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\set;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Section::make('Informasi Utama')
                        ->schema([
                            // Pilihan User (Tetap pertahankan ini)
                            Forms\Components\Select::make('user_id')
                                ->relationship('user', 'name')
                                ->required()
                                ->label('Author / Pembuat'),

                            // Judul (Otomatis bikin Slug saat ngetik)
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                            // Slug (Link)
                            Forms\Components\TextInput::make('slug')
                                ->required()
                                ->unique(ignoreRecord: true),

                            // Tech Stack (Bisa ngetik "Laravel" lalu Enter)
                            Forms\Components\TagsInput::make('tech_stack')
                                ->suggestions(['Laravel', 'Vue', 'React', 'Tailwind', 'MySQL'])
                                ->label('Teknologi Digunakan'),
                                
                            // Status Tayang
                            Forms\Components\Toggle::make('is_published')
                                ->label('Tampilkan di Website?')
                                ->default(true),
                        ])
                ])->columnSpan(1), // Menggunakan layout 2 kolom

            Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Section::make('Media & Konten')
                        ->schema([
                            // Upload Gambar
                            Forms\Components\FileUpload::make('thumbnail')
                                ->image()
                                ->directory('projects') // Masuk ke folder storage/app/public/projects
                                ->label('Cover Image'),

                            // Deskripsi Singkat
                            Forms\Components\Textarea::make('description')
                                ->rows(3),

                            // Editor Canggih (Bisa Bold, Italic, Upload gambar di tengah teks)
                            Forms\Components\RichEditor::make('content')
                                ->label('Cerita Lengkap Project'),
                                
                            // Link Demo
                            Forms\Components\TextInput::make('url')
                                ->label('Link Demo Website')
                                ->url()
                                ->prefix('https://'),
                        ])
                ])->columnSpan(1),
        ])->columns(2); // Membagi layar jadi 2 kolom (kiri kanan)
}

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\ImageColumn::make('thumbnail')
                ->label('Cover'),
            
            Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable()
                ->weight('bold'),

            Tables\Columns\TextColumn::make('user.name')
                ->label('Author')
                ->sortable()
                ->badge(), // Biar namanya ada background warnanya

            Tables\Columns\TextColumn::make('tech_stack')
                ->badge()
                ->separator(','), // Menampilkan tags sebagai badges

            Tables\Columns\IconColumn::make('is_published')
                ->boolean()
                ->label('Tayang'),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
        ->filters([
            // Filter nanti kita tambahkan belakangan
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
