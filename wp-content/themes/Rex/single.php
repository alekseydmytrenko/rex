<?php
get_header();
?>

<!-- Start blog banner section -->
<section id="blog-banner">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/blog-banner.jpg" alt="img">
    <div class="blog-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-banner-area">
                        <h2>Blog Single</h2>
                        <ol class="breadcrumb">
                            <li><a href="<?php home_url(); ?>">Home</a></li>
                            <li class="active">Blog Single</li>
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
                            <div class="blog-left blog-details">
                            <?php

                            if ( have_posts() ) : while (have_posts()) : the_post();
                            ?>
                                <!-- Start single blog post -->
                                <article class="single-from-blog">
                                    <div class="blog-title">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php echo __('Posted by '); ?><a class="blog-admin" href="#"><?php the_author(); ?></a> on <span class="blog-date"><?php the_time('jS F Y');?></span></p>
                                    </div>
                                    <figure>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                                    </figure>
                                    <div class="blog-details-content">
                                        <?php the_content(); ?>
                                        <?php the_tags( '<span>Tag : </span>', ', ', '<br />' ); ?>
                                        <h1><?php the_title(); ?></h1>
                                        <h2><?php the_title(); ?></h2>
                                        <h3><?php the_title(); ?></h3>
                                        <h4><?php the_title(); ?></h4>
                                        <h5><?php the_title(); ?></h5>
                                        <h6><?php the_title(); ?></h6>
                                    </div>
                                </article>
                                <div class="blog-comment">
                                    <ul class="comments">
                                        <?php
                                        //Gather comments for a specific page/post
                                        $comments = get_comments(array(
                                        'post_id' => $post->ID,
                                        'status' => 'approve' //Change this to the type of comments to be displayed
                                        ));

                                        //Display the list of comments
                                        wp_list_comments(array(
                                        'per_page' => 10, //Allow comment pagination
                                        'reverse_top_level' => false //Show the latest comments at the top of the list
                                        ), $comments);
                                        ?>
                                    </ul>
                                    <?php comments_template(); ?>
                                </div>
                                <!-- End single blog post -->
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p><?php echo __('No contetnt found'); ?></p>
                            <?php endif; ?>
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