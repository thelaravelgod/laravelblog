<x-app-layout>
    <!-- navigation/slider -->
    <!-- <x-navigation-slider /> -->

    <div class="global-padding">
        loading...
    </div>

    <!-- this is to check the superdeals -->
    @php
        function percentageDecrease($detailsFormerPrice, $detailsPrice) {
            $detailsPrice = intval( $detailsPrice );
            $detailsFormerPrice = intval( $detailsFormerPrice );
            $step1 = ($detailsFormerPrice - $detailsPrice)/$detailsFormerPrice;
            $step2 = $step1 * 100;
            return number_format((float)$step2, 2, '.', '');
        }

        $decreaseA = percentageDecrease("13889.33", "10986.33");
        $decreaseB = percentageDecrease("10296.33", "2972.33");
        $decreaseC = percentageDecrease("2291.33", "834.32");
        $decreaseD = percentageDecrease("5791.33", "1927.88");
        $decreaseE = percentageDecrease("10296.33", "82348.98");
        $decreaseF = percentageDecrease("721.85", "129.99");

        $decreaseAA = percentageDecrease("10296.33", "2972.33");
        $decreaseBB = percentageDecrease("10296.33", "7536.97");
        $decreaseCC = percentageDecrease("10296.33", "5934.32");
        $decreaseDD = percentageDecrease("10296.33", "1717.88");
        $decreaseEE = percentageDecrease("10296.33", "6598.98");
        $decreaseFF = percentageDecrease("10296.33", "5429.99");
    @endphp
    <x-super-deals
        image="superdeals.PNG"
        
        detailsImgA="super1.jpg"
        detailsPriceA="10986.33"
        detailsFormerPriceA="13889.33"
        detailsRemainingOrderCountA="481"
        detailsDifferenceA="{{$decreaseA}}"

        detailsImgB="super2.jpg"
        detailsPriceB="7536.97"
        detailsFormerPriceB="13889.33"
        detailsRemainingOrderCountB="98"
        detailsDifferenceB="{{$decreaseB}}"

        detailsImgC="super3.jpg"
        detailsPriceC="834.32"
        detailsFormerPriceC="2291.33"
        detailsRemainingOrderCountC="45"
        detailsDifferenceC="{{$decreaseC}}"

        detailsImgD="super4.jpg"
        detailsPriceD="1927.88"
        detailsFormerPriceD="5791.33"
        detailsRemainingOrderCountD="66"
        detailsDifferenceD="{{$decreaseD}}"

        detailsImgE="super5.jpg"
        detailsPriceE="82348.98"
        detailsFormerPriceE="10296.33"
        detailsRemainingOrderCountE="109"
        detailsDifferenceE="{{$decreaseE}}"

        detailsImgF="super6.jpg"
        detailsPriceF="129.99"
        detailsFormerPriceF="721.85"
        detailsRemainingOrderCountF="23"
        detailsDifferenceF="{{$decreaseF}}"
    />

    <!-- this is to check the superdeals -->
    <x-super-deals
        image="plusdeals.png"
        detailsImgA="plus1.jpg"
        detailsPriceA="2972.33"
        detailsFormerPriceA="10296.33"
        detailsRemainingOrderCountA="437"
        detailsDifferenceA="{{$decreaseAA}}"

        detailsImgB="plus2.jpg"
        detailsPriceB="7536.97"
        detailsFormerPriceB="10296.33"
        detailsRemainingOrderCountB="98"
        detailsDifferenceB="{{$decreaseBB}}"

        detailsImgC="plus3.jpg"
        detailsPriceC="5934.32"
        detailsFormerPriceC="10296.33"
        detailsRemainingOrderCountC="45"
        detailsDifferenceC="{{$decreaseCC}}"

        detailsImgD="plus4.jpg"
        detailsPriceD="1717.88"
        detailsFormerPriceD="10296.33"
        detailsRemainingOrderCountD="66"
        detailsDifferenceD="{{$decreaseDD}}"
        
        detailsImgE="plus5.jpg"
        detailsPriceE="6598.98"
        detailsFormerPriceE="10296.33"
        detailsRemainingOrderCountE="109"
        detailsDifferenceE="{{$decreaseEE}}"

        detailsImgF="plus6.jpg"
        detailsPriceF="5429.99"
        detailsFormerPriceF="10296.33"
        detailsRemainingOrderCountF="34"
        detailsDifferenceF="{{$decreaseFF}}"
    />

    <!-- container for div containing top searchable items -->
    <!-- this will be divided into categories -->
    <x-quick-search />

    <!-- this is to display a random selection of individual pages -->
    <x-more-to-love />
    <!-- <div style="background: red;" class="global-padding">
        <div style="background: white;width: 100%;">j</div>
    </div> -->
</x-app-layout>