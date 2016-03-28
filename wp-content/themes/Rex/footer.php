<!-- Start Footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-top-area">
                        <a class="footer-logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.jpg" alt="Logo"></a>
                        <div class="footer-social">
                            <a class="facebook" href="<?php echo get_theme_mod('facebook_link'); ?>"><span class="fa fa-facebook"></span></a>
                            <a class="twitter" href="<?php echo get_theme_mod('twitter_link'); ?>"><span class="fa fa-twitter"></span></a>
                            <a class="google-plus" href="<?php echo get_theme_mod('google_plus_link'); ?>"><span class="fa fa-google-plus"></span></a>
                            <a class="youtube" href="<?php echo get_theme_mod('youtube_link'); ?>"><span class="fa fa-youtube"></span></a>
                            <a class="linkedin" href="<?php echo get_theme_mod('linkedin_link'); ?>"><span class="fa fa-linkedin"></span></a>
                            <a class="dribbble" href="<?php echo get_theme_mod('dribbble_link'); ?>"><span class="fa fa-dribbble"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
    </div>
</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

<!-- initialize jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.js"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/waypoints.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.counterup.js"></script>
<!-- mixit slider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.fancybox.pack.js"></script>
<!-- Wow animation -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/wow.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>

</body>
</html>