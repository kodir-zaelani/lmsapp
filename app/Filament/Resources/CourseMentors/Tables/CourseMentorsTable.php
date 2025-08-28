<?php

namespace App\Filament\Resources\CourseMentors\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;

class CourseMentorsTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('mentor.image')
            ->label('Photo')
            ->searchable(),
            TextColumn::make('mentor.name')
            ->searchable(),
             ImageColumn::make('course.image')
            ->label('Image')
            ->searchable(),
            TextColumn::make('course.name')
            ->searchable(),
            IconColumn::make('is_active')
            ->boolean(),
            TextColumn::make('deleted_at')
            ->dateTime()
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true),
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
                TrashedFilter::make(),
                ])
                ->recordActions([
                    ViewAction::make(),
                    EditAction::make(),
                    ])
                    ->toolbarActions([
                        BulkActionGroup::make([
                            DeleteBulkAction::make(),
                            ForceDeleteBulkAction::make(),
                            RestoreBulkAction::make(),
                        ]),
                    ]);
                }
            }
