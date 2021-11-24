<?php

namespace App\Services\Localization;
use App\Services\Localization\Handlers\LocaleHandler;

class LocalizationService
{
    public $localeChecker;

    public function __construct(LocaleHandler $localeChecker)
    {
       # dd($localeChecker);
        $this->localeChecker = $localeChecker;
    }

    public function Handle($locale, $localeChecker) {
        return $localeChecker->checkLocaleIsSupported($locale);
    }
}
