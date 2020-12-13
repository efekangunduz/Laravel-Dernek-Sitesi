<!--header start here-->
<div class="mother-grid">
    <div class="container">
        <div class="header">
            <div class="header-left">
                <a href="index.html"> <img src="{{asset('assets')}}/images/logo.png"> </a>
            </div>
            <span class="menu"> <img src="images/icon-1.png"></span>
            <div class="clear"> </div>
            <div class="header-right">
                <ul class="res">
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="whatwedo.html">WHAT WE DO</a></li>
                    <li><a href="getinvoled.html">GETINVOLED</a></li>
                    <li><a href="give.html">GIVE</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
                <script>
                    $( "span.menu").click(function() {
                        $(  "ul.res" ).slideToggle("slow", function() {
                            // Animation complete.
                        });
                    });
                </script>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--/header end here-->
