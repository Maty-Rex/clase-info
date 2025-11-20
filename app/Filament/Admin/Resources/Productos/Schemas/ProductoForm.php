<?php

namespace App\Filament\Admin\Resources\Productos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
class ProductoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('nombre')
                    ->required(),
                TextInput::make('precio')
                    ->required()
                    ->numeric(),
                FileUpload::make('foto')
                    ->required(),
                Toggle::make('estatus')
                    ->required(),
            ]);
    }
}
