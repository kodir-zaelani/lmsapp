<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('bookeng_trx_id')
                    ->required(),
                TextInput::make('user_id')
                    ->required(),
                Select::make('pricing_id')
                    ->relationship('pricing', 'name')
                    ->required(),
                TextInput::make('sub_total_amount')
                    ->numeric()
                    ->default(null),
                TextInput::make('grand_total_amount')
                    ->numeric()
                    ->default(null),
                TextInput::make('total_tax_amount')
                    ->numeric()
                    ->default(null),
                Toggle::make('is_paid')
                    ->required(),
                TextInput::make('payment_type')
                    ->required(),
                TextInput::make('proof')
                    ->default(null),
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date')
                    ->required(),
            ]);
    }
}
