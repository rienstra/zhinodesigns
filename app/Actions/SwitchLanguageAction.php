<?php

namespace App\Actions;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SwitchLanguageAction
{
    public function __invoke($lang)
    {
        if (! in_array($lang, ['en', 'nl'])) {
            throw new \Exception('Language is not defined');
        }

        Session::put('lang', $lang);
        App::setLocale($lang);
    }
}
