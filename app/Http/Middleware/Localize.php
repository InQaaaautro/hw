<?php

namespace App\Http\Middleware;

use App\Services\Localization\LocalizationService as LocalizationService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\App;

class Localize
{
    use Notifiable;
    const PARAMETER_LOCALE = "locale";

    private LocalizationService $localizationService;

    public function __construct(LocalizationService $localizationService)
    {
        $this->localizationService = $localizationService;
    }

    public function handle(Request $request, Closure $next)
    {
        $locale = $this->getRequestLocale($request); //получаем локаль из строки запроса
        if (!$locale || !$this->isSupportedLocale($locale)) {
            return $this->replaceNotSupportedLocaleToDefault($request, $locale);
        }
        #dd(1);
        $this->localize($locale);
        $request->route()->forgetParameter(self::PARAMETER_LOCALE);
        return $next($request);
    }

    private function replaceNotSupportedLocaleToDefault(Request $request, $locale) {
        $uri = $request->getRequestUri();
        $defaultLocale = App::getLocale();
        #session()->put('warning','Item created successfully.');
        return redirect( str_replace($locale, $defaultLocale, $uri))->with("warning", __("text_helper.warningRedirectNotSupportedLocale", [self::PARAMETER_LOCALE=>$locale]));
    }

    private function getRequestLocale(Request $request): ?string
    {
        return $request->route()->parameter(self::PARAMETER_LOCALE, App::getLocale());
    }

    private function isSupportedLocale(?string $locale): bool
    {
        return $this->localizationService->localeChecker->checkLocaleIsSupported($locale);
    }

    private function localize(string $locale): void
    {
        App::setLocale($locale);
    }
}
