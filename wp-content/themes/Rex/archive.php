<?php
/*
Template Name: Archives
*/
?>
<?php get_header();
// the query to set the posts per page to 3

$args = array('posts_per_page' => 3, 'paged' => $paged );
query_posts($args);

?>

<!-- Start blog banner section -->
<section id="blog-banner">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/blog-banner.jpg" alt="img">
    <div class="blog-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-banner-area">
                        <h2><?php the_title(); ?></h2>
                        <ol class="breadcrumb">
                            <li><a href="<?php home_url(); ?>">Home</a></li>
                            <li class="active">Blog Archive</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog banner section -->

<!-- Start blog section -->
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-area">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <div class="blog-left blog-archive">

                                <?php
                                if ( have_posts() ) :

                                    while (have_posts()) : the_post();
                                ?>
                                <!-- Start single blog post -->
                                <article class="single-from-blog">
                                    <figure>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    </figure>
                                    <div class="blog-title">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <p><?php echo __('Posted by '); ?><a class="blog-admin" href="#"><?php the_author(); ?></a> on <span class="blog-date"><?php the_time('jS F Y');?></span></p>
                                    </div>
                                    <?php the_excerpt(); ?>
                                    <div class="blog-footer">
                                        <a href="#"><span class="fa fa-comment"></span><?php comments_number();?></a>
                                        <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                                    </div>
                                </article>
                                <!-- End single blog post -->

                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <p><?php echo __('No contetnt found'); ?></p>
                                <?php endif; ?>
                                <?php if (function_exists("pagination")) {
                                    pagination($additional_loop->max_num_pages);
                                } ?>
                            </div>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog section -->

<?php
get_footer();