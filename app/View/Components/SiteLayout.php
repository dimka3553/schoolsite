<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class SiteLayout extends Component
{
    public $tenant;

    public function __construct()
    {
        $this->tenant = app()->make('tenant');
        //
    }

    public function render(): View
    {
        return view('layouts.site');
    }
}
