<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $tenant = app()->make('tenant');


        return view('welcome', compact('tenant'));
    }
}
