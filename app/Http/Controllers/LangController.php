<?php

namespace App\Http\Controllers;

use App\Actions\SwitchLanguageAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function switchLang($lang)
    {
        app(SwitchLanguageAction::class)($lang);

        return back();
    }
}
