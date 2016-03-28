<?php
get_header();
?>

<!-- Start error page -->
<section id="error-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-page-area">
                    <div class="error-no-area">
                        <div class="error-no">
                            <h2><?php echo __('404 Error'); ?></h2>
                            <p><?php echo __('Sorry'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="error-message">
                    <h4><?php echo __('Woops! Something gone wrong'); ?></h4>
                    <p><?php echo __('Sorry, the page you have requested has either been moved,or does not exist, Return to our <a href="' . home_url() . '">homepage</a>.'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End error page -->

<?php
get_footer();