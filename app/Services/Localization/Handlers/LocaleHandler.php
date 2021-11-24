<?php

namespace App\Services\Localization\Handlers;

use JetBrains\PhpStorm\Pure;

class LocaleHandler
{
    const RU = 'ru';
    const EN = 'en';

    public static function availableList(): array
    {
        return [
            static::RU,
            static::EN
        ];
    }

    public function checkLocaleIsSupported(string $locale): bool
    {
        return in_array($locale, $this->availableList());
    }
}
