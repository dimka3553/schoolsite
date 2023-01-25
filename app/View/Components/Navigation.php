<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    public $tenant;

    public function __construct()
    {
        $this->tenant = app()->make('tenant');
        //
    }

    public function render()
    {
        return view('components.navigation');
    }
}
