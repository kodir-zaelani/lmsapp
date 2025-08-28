<?php

namespace App\Filament\Resources\CourseMentors\Schemas;

use App\Models\User;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class CourseMentorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([

            Select::make('course_id')
            ->searchable()
            ->preload()
            ->relationship('course', 'name')
            ->required(),
            Select::make('user_id')
            ->label('Mentor')
            ->options( function () {
                return User::role('mentor')->pluck('name', 'id');
            })
            ->searchable()
            ->preload()
            ->required(),
            Toggle::make('is_active')
            ->required(),
            Textarea::make('about')
            ->default(null)
            ->columnSpanFull(),
        ]);
    }
}
