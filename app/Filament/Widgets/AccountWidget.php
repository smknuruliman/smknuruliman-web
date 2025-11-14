<?php

namespace App\Filament\Widgets;

use Filament\Widgets\AccountWidget as BaseAccountWidget;

class AccountWidget extends BaseAccountWidget
{
    // Supaya widget Welcome ini full width
    protected int|string|array $columnSpan = 'full';
}
