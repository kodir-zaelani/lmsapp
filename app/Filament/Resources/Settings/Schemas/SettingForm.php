<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('webname')
                    ->default(null),
                TextInput::make('tagline')
                    ->default(null),
                TextInput::make('description')
                    ->default(null),
                TextInput::make('siteurl')
                    ->default(null),
                TextInput::make('homeurl')
                    ->default(null),
                Toggle::make('statushero')
                    ->required(),
                TextInput::make('language')
                    ->default(null),
                TextInput::make('favicon')
                    ->default(null),
                TextInput::make('phone')
                    ->tel()
                    ->default(null),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                Textarea::make('address')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('postalcode')
                    ->default(null),
                TextInput::make('city')
                    ->default(null),
                TextInput::make('state')
                    ->default(null),
                TextInput::make('country')
                    ->default(null),
                TextInput::make('logo')
                    ->default(null),
                TextInput::make('post_per_page')
                    ->numeric()
                    ->default(null),
                TextInput::make('timezone')
                    ->default(null),
                Toggle::make('status_home')
                    ->required(),
                Textarea::make('maps')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('meta_description')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('meta_keywords')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('bg_header')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('bg_statistic')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('logo_menu')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('fresh_site')
                    ->numeric()
                    ->default(null),
                Toggle::make('status_site_update')
                    ->required(),
            ]);
    }
}
