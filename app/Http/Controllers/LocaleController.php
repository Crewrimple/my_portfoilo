<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function switch($lang)
    {
        App::setLocale($lang);
        Session::put('locale', $lang);
        return Redirect::back();
    }
}
