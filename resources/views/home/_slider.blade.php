<!--- banner Slider starts Here --->
<script src="{{asset('assets')}}/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!----//End-slider-script---->
<!-- Slideshow 4 -->
<div  id="top" class="callbacks_container">
    <ul class="rslides" id="slider4">
        <li>
            <div class="banner">
                <div class="container">
                    <div class="banner-main">
                        <h2> HELP TURN<br>TEARS TO SMILES</h2>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud".</p>
                        <a href="#">DONATE</a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="banner-two">
                <div class="container">
                    <div class="banner-main">
                        <h2> CHILDREN CARE</h2>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud".</p>
                        <a href="#">DONATE</a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="banner-three">
                <div class="container">
                    <div class="banner-main">
                        <h2> HELP TURN<br>TEARS TO SMILES</h2>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud". </p>
                        <a href="#">DONATE</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="clearfix"> </div>
<!--- banner Slider Ends Here --->

