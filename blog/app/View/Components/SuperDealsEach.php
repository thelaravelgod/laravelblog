<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SuperDealsEach extends Component
{
    public $eachImage;
    public $eachNewPrice;
    public $eachOldPrice;
    public $eachDifference;
    public $eachRemainingOrder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($eachImage, $eachNewPrice, $eachOldPrice, $eachDifference, $eachRemainingOrder)
    {
        $this->eachImage = $eachImage;
        $this->eachNewPrice = $eachNewPrice;
        $this->eachOldPrice = $eachOldPrice;
        $this->eachDifference = $eachDifference;
        $this->eachRemainingOrder = $eachRemainingOrder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.super-deals-each');
    }
}
