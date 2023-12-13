<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLocale($locale) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
        return redirect()->back();
    }
}
