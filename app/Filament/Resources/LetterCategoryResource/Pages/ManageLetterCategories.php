<?php

namespace App\Filament\Resources\LetterCategoryResource\Pages;

use App\Filament\Resources\LetterCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLetterCategories extends ManageRecords
{
    protected static string $resource = LetterCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
