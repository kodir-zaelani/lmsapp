<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('webname')
                    ->searchable(),
                TextColumn::make('tagline')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                TextColumn::make('siteurl')
                    ->searchable(),
                TextColumn::make('homeurl')
                    ->searchable(),
                IconColumn::make('statushero')
                    ->boolean(),
                TextColumn::make('language')
                    ->searchable(),
                TextColumn::make('favicon')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('postalcode')
                    ->searchable(),
                TextColumn::make('city')
                    ->searchable(),
                TextColumn::make('state')
                    ->searchable(),
                TextColumn::make('country')
                    ->searchable(),
                TextColumn::make('logo')
                    ->searchable(),
                TextColumn::make('post_per_page')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('timezone')
                    ->searchable(),
                IconColumn::make('status_home')
                    ->boolean(),
                TextColumn::make('fresh_site')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('status_site_update')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}