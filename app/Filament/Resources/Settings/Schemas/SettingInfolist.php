<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SettingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('webname'),
                TextEntry::make('tagline'),
                TextEntry::make('description'),
                TextEntry::make('siteurl'),
                TextEntry::make('homeurl'),
                IconEntry::make('statushero')
                    ->boolean(),
                TextEntry::make('language'),
                TextEntry::make('favicon'),
                TextEntry::make('phone'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('postalcode'),
                TextEntry::make('city'),
                TextEntry::make('state'),
                TextEntry::make('country'),
                TextEntry::make('logo'),
                TextEntry::make('post_per_page')
                    ->numeric(),
                TextEntry::make('timezone'),
                IconEntry::make('status_home')
                    ->boolean(),
                TextEntry::make('fresh_site')
                    ->numeric(),
                IconEntry::make('status_site_update')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
