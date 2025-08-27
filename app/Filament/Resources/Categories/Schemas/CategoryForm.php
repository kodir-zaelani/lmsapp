<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            // FileUpload::make('image')
            // ->default(null)
            // ->columnSpanFull(),
            TextInput::make('name')
            ->helperText('Minimum 3 characters')
            ->required() // Make it required for new records
            ->minLength(3)
            ->required(),
        ]);
    }
}
