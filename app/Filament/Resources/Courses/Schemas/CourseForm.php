<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Tabs\Tab;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            Tabs::make('Tabs')
            ->tabs([
                Tab::make('Course')
                ->schema([
                    FileUpload::make('image')
                    ->required()
                    ->columnSpanFull(),
                    TextInput::make('name')
                    ->columnSpanFull()
                    ->required(),
                    RichEditor::make('about')
                    ->default(null)
                    ->columnSpanFull(),
                    Select::make('category_id')
                    ->searchable()
                    ->preload()
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required(),
                    Select::make('is_popular')
                    ->options([
                        true => 'Popular',
                        false => 'Not Popular',
                        ])
                        ->required(),
                    ]),
                    Tab::make('Benefit')
                    ->schema([
                        Repeater::make('benefits')
                        ->relationship('benefits')
                        ->schema([
                            TextInput::make('name'),
                        ]),
                    ]),
                    Tab::make('Section')
                    ->schema([
                        Repeater::make('courseSections')
                        ->relationship('courseSections')
                        ->schema([
                            TextInput::make('name'),
                            TextInput::make('position')
                            ->numeric(),
                        ]),
                    ]),
                    ])->columnSpan(2),
                ]);
            }
        }