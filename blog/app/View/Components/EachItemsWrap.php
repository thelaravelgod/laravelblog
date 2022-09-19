<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EachItemsWrap extends Component
{
    public $mainname;
    public $imga;
    public $imgb;
    public $imgc;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mainname, $imga, $imgb, $imgc)
    {
        $this->mainname = $mainname;
        $this->imga = $imga;
        $this->imgb = $imgb;
        $this->imgc = $imgc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.each-items-wrap');
    }
}
