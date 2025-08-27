<?php

namespace App\Filament\Resources\Pricings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PricingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            TextInput::make('name')
            ->required(),
            TextInput::make('price')
            ->required()
            ->numeric()
            ->prefix('IDR'),
            TextInput::make('duration')
            ->required()
            ->prefix('Month')
            ->numeric(),

        ]);
    }
}
