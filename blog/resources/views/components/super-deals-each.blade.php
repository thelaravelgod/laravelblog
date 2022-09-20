<div class="super-deals-slice-each">
    <img src='{{ asset("images/homepage/$eachImage") }}' alt="product" class="super-deals-slice-each-img">
    <div class="super-deals-slice-each-price">&#8358; {{$eachNewPrice}}</div>
    <div class="super-deals-slice-each-former-price">&#8358; {{$eachOldPrice}}</div>
    <div class="super-deals-slice-each-decrease">{{$eachDifference}}% <i class="fa-solid fa-arrow-trend-down"></i></div>
    <div class="super-deals-slice-each-orders-left">{{$eachRemainingOrder}} Orders Left</div>
</div>