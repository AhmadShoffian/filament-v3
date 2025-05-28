<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Peran;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PeranResource\Pages;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PeranResource\RelationManagers;

class PeranResource extends Resource
{
    protected static ?string $model = Peran::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label('Nama Peran'),
                        Forms\Components\Textarea::make('description')
                            ->nullable()
                            ->maxLength(500)
                            ->label('Deskripsi Peran'),
                    ])
                    ->columns(1)
                    ->columnSpanFull(),
                // Forms\Components\Section::make('Informasi Pengguna')
                //     ->description('Informasi ini akan diisi secara otomatis berdasarkan aktivitas pengguna.')
                //     ->schema([
                //         Forms\Components\TextInput::make('created_by')
                //             ->disabled()
                //             ->label('Dibuat Oleh'),
                //         Forms\Components\TextInput::make('updated_by')
                //             ->disabled()
                //             ->label('Diperbarui Oleh'),
                //         Forms\Components\TextInput::make('deleted_by')
                //             ->disabled()
                //             ->label('Dihapus Oleh'),
                //     ])
                //     ->columns(3)
                //     ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Peran')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi Peran')
                    ->limit(100)
                    ->searchable()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('created_by')
                //     ->label('Dibuat Oleh')
                //     ->searchable()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('updated_by')
                //     ->label('Diperbarui Oleh')
                //     ->searchable()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('deleted_by')
                //     ->label('Dihapus Oleh')
                //     ->searchable()
                //     ->sortable(),
            ])
            ->filters([
               Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),

                Tables\Actions\DeleteBulkAction::make(),

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
            'index' => Pages\ListPerans::route('/'),
            'create' => Pages\CreatePeran::route('/create'),
            'view' => Pages\ViewPeran::route('/{record}'),
            'edit' => Pages\EditPeran::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ])
        ;
    }

}
