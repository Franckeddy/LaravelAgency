<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    final public function index(): RedirectResponse {
        //$properties = Property::orderBy('created_at', 'desc')->limit(4)->get();
        return redirect()->route('property.index');
    }
}
