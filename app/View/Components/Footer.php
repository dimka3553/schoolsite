<?php

namespace App\View\Components;

use App\Models\InfoPage;
use App\Models\SchoolClass;
use Illuminate\View\Component;

class Footer extends Component
{
    public $classes;
    public $infopages;

    public function __construct()
    {
        $this->classes = SchoolClass::all();
        $this->infopages = Infopage::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
