<?php

namespace App\Filament\Resources\CourseMentors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CourseMentorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Toggle::make('is_active')
                    ->required(),
                Select::make('course_id')
                    ->relationship('course', 'name')
                    ->required(),
                TextInput::make('user_id')
                    ->required(),
                Textarea::make('about')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
