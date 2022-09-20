<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SuperDeals extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $image,
        $detailsImgA, $detailsPriceA, $detailsFormerPriceA, $detailsRemainingOrderCountA,
        $detailsImgB, $detailsPriceB, $detailsFormerPriceB, $detailsRemainingOrderCountB,
        $detailsImgC, $detailsPriceC, $detailsFormerPriceC, $detailsRemainingOrderCountC,
        $detailsImgD, $detailsPriceD, $detailsFormerPriceD, $detailsRemainingOrderCountD,
        $detailsImgE, $detailsPriceE, $detailsFormerPriceE, $detailsRemainingOrderCountE,
        $detailsImgF, $detailsPriceF, $detailsFormerPriceF, $detailsRemainingOrderCountF,
        $detailsDifferenceA, $detailsDifferenceB, $detailsDifferenceC, $detailsDifferenceD, 
        $detailsDifferenceE, $detailsDifferenceF){
        $this->image = $image;

        $this->detailsImgA = $detailsImgA;
        $this->detailsPriceA = $detailsPriceA;
        $this->detailsFormerPriceA = $detailsFormerPriceA;
        $this->detailsRemainingOrderCountA = $detailsRemainingOrderCountA;

        $this->detailsImgB = $detailsImgB;
        $this->detailsPriceB = $detailsPriceB;
        $this->detailsFormerPriceB = $detailsFormerPriceB;
        $this->detailsRemainingOrderCountB = $detailsRemainingOrderCountB;
        $this->detailsDifferenceA = $detailsDifferenceA;

        $this->detailsImgC = $detailsImgC;
        $this->detailsPriceC = $detailsPriceC;
        $this->detailsFormerPriceC = $detailsFormerPriceC;
        $this->detailsRemainingOrderCountC = $detailsRemainingOrderCountC;

        $this->detailsImgD = $detailsImgD;
        $this->detailsPriceD = $detailsPriceD;
        $this->detailsFormerPriceD = $detailsFormerPriceD;
        $this->detailsRemainingOrderCountD = $detailsRemainingOrderCountD;

        $this->detailsImgE = $detailsImgE;
        $this->detailsPriceE = $detailsPriceE;
        $this->detailsFormerPriceE = $detailsFormerPriceE;
        $this->detailsRemainingOrderCountE = $detailsRemainingOrderCountE;

        $this->detailsImgF = $detailsImgF;
        $this->detailsPriceF = $detailsPriceF;
        $this->detailsFormerPriceF = $detailsFormerPriceF;
        $this->detailsRemainingOrderCountF = $detailsRemainingOrderCountF;

        $this->detailsDifferenceA = $detailsDifferenceA;
        $this->detailsDifferenceB = $detailsDifferenceB;
        $this->detailsDifferenceC = $detailsDifferenceC;
        $this->detailsDifferenceD = $detailsDifferenceD;
        $this->detailsDifferenceE = $detailsDifferenceE;
        $this->detailsDifferenceF = $detailsDifferenceF;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.super-deals');
    }
}
