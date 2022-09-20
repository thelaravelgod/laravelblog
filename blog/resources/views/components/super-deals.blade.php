<div class="super-deals-wraps global-padding">
    <div class="super-deals-wraps-inner">
        <div class="super-deals-header">
            <div>
                <img
                    src='{{ asset("images/homepage/$image") }}'
                    width="
                        @if($image == 'superdeals.PNG')
                            70%
                        @else
                            100%
                        @endif
                    "
                    alt="Zansi Logo"
                >
            </div>
            <div class="super-deals-view-more"style="text-align: right;">VIEW MORE ></div>
        </div>
        <div class="super-deals-slice">
            <x-super-deals-each
                eachImage="{{$detailsImgA}}"
                eachNewPrice="{{$detailsPriceA}}"
                eachOldPrice="{{$detailsFormerPriceA}}"
                eachDifference="{{$detailsDifferenceA}}"
                eachRemainingOrder="{{$detailsRemainingOrderCountA}}"
            />
            <x-super-deals-each
                eachImage="{{$detailsImgB}}"
                eachNewPrice="{{$detailsPriceB}}"
                eachOldPrice="{{$detailsFormerPriceB}}"
                eachDifference="{{$detailsDifferenceB}}"
                eachRemainingOrder="{{$detailsRemainingOrderCountB}}"
            />
            <x-super-deals-each
                eachImage="{{$detailsImgC}}"
                eachNewPrice="{{$detailsPriceC}}"
                eachOldPrice="{{$detailsFormerPriceC}}"
                eachDifference="{{$detailsDifferenceC}}"
                eachRemainingOrder="{{$detailsRemainingOrderCountC}}"
            />
            <x-super-deals-each
                eachImage="{{$detailsImgD}}"
                eachNewPrice="{{$detailsPriceD}}"
                eachOldPrice="{{$detailsFormerPriceD}}"
                eachDifference="{{$detailsDifferenceD}}"
                eachRemainingOrder="{{$detailsRemainingOrderCountD}}"
            />
            <x-super-deals-each
                eachImage="{{$detailsImgE}}"
                eachNewPrice="{{$detailsPriceE}}"
                eachOldPrice="{{$detailsFormerPriceE}}"
                eachDifference="{{$detailsDifferenceE}}"
                eachRemainingOrder="{{$detailsRemainingOrderCountE}}"
            />
            <x-super-deals-each
                eachImage="{{$detailsImgF}}"
                eachNewPrice="{{$detailsPriceF}}"
                eachOldPrice="{{$detailsFormerPriceF}}"
                eachDifference="{{$detailsDifferenceF}}"
                eachRemainingOrder="{{$detailsRemainingOrderCountF}}"
            />
        </div>
    </div>
</div>