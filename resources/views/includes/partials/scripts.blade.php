
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->

    <script type="text/javascript" src="js/numscroller-1.0.js"></script><!-- numscroller js file -->

    <!-- scrolling script -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script> 
    <!-- //scrolling script -->

    <!-- //here starts scrolling icon -->
    <script src="js/SmoothScroll.min.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <!-- here stars scrolling script -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */
                                    
                $().UItoTop({ easingType: 'easeOutQuart' });
                                    
                });
        </script>
        <!-- //here ends scrolling script -->
    <!-- //here ends scrolling icon -->

    <!-- Navigation-JavaScript -->
        <script src="js/classie.js"></script>
        <script src="js/main.js"></script>
    <!-- //Navigation-JavaScript -->
            
    <!-- FlexSlider-JavaScript -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(function(){
                SyntaxHighlighter.all();
                    });
                    $(window).load(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                });
            });
        </script>
    <!-- //FlexSlider-JavaScript -->

    <!-- bars js files -->
        <script src="js/bars.js"></script>
    <!-- //bars js files -->

    <!-- banner text effect js file -->
        <script src="js/modernizr.custom.72111.js"></script>
    <!-- banner text effect js file -->

    <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->