<?php

namespace App\Filament\Resources\SectionContents\Schemas;

use Filament\Schemas\Schema;
use App\Models\CourseSection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class SectionContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            Select::make('course_section_id')
            ->label('Course Section')
            ->options( function (){
                return CourseSection::with('course')
                ->get()
                ->mapWithKeys(function ($section) {
                    return [
                        $section->id => $section->course
                        ? "{$section->course->name} - {$section->name}"
                        : $section->name,
                    ];
                })
                ->toArray();
            })
            ->searchable()
            ->required(),

            TextInput::make('name')
            ->required(),
            RichEditor::make('content')
                ->required()
                ->columnSpanFull(),
            ]);
        }
    }
