<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('cover')
                    ->disk('public'),
                TextInput::make('title'),
                Select::make('book_category_id')
                    ->relationship('category', 'name'),
                TextInput::make('author'),
                Textarea::make('synopsis')
                    ->columnSpanFull(),
            ]);
    }
}
