<div class="more-to-love-wraps global-padding">
    <div class="more-to-love-slice">
        @for ($i = 0; $i < 25; $i++)
            <div class="more-to-love-each">
                <img src='{{ asset("images/homepage/eachimage.webp") }}' width="100%" alt="Zansi Logo" class="more-to-love-each-prod-image">
                <div class="more-to-love-each-prod-name">The product Name here</div>
                <div class="more-to-love-each-prod-price-flex">
                    <div class="more-to-love-each-smalltext">&#8358;</div>
                    <div class="more-to-love-each-bigtext">785</div>
                    <div class="more-to-love-each-smalltext">.76</div>
                </div>
                <div>
                    <!-- qqq -->
                </div>
            </div>
        @endfor
        <!-- <div>a</div>
        <div>a</div>
        <div>a</div>
        <div>a</div>
        <div>a</div> -->
    </div>
</div>