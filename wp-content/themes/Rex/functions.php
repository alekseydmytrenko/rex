<?php
function getStyle() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'getStyle');

function theme_setup() {
    //Add featured image support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');


//AJAX nonce create
wp_enqueue_script('jquery');
add_action( 'wp_enqueue_scripts', function() {

    //load script
    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/ajax-script.js', array('jquery') );
    // in JavaScript, object properties are accessed as ajax_object.ajax_url, ajax_object.nonce
    wp_localize_script(
        'ajax-script',
        'ajax_object',
        array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce( 'form-send-mail' )
        )
    );
});

//AJAX nonce verify
add_action('wp_ajax_sendMail', 'sendMail');
add_action('wp_ajax_nopriv_sendMail', 'sendMail');
function sendMail(){
    if ( wp_verify_nonce( $_POST['nonce'], 'form-send-mail' ) ) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if( wp_mail( $email, 'From ' . $name, $message ) ) {
            echo 'Mail sent!';
        } else {
            echo 'Error!';
        }
        die();
    } else {
        echo 'Security error!';
        die();
    }
}

// Add contact information
function contact_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'contact' , array(
        'title'         => __( 'Contact', 'rex' ),
        'priority'      => 25,
        'description'   => 'Add your contacts!',
    ) );
    //Postal address
    $wp_customize->add_setting('postal_address', array(
        'title'         => __('Postal address', 'rex'),
        'description'   => 'Postal address',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'postal_address',
            array(
                'label'          => __( 'Postal address', 'rex' ),
                'section'        => 'contact',
                'settings'       => 'postal_address',
                'type'           => 'text',
            )
        )
    );

    //Headquarters
    $wp_customize->add_setting('headquarters', array(
        'title'         => __('Headquarters', 'rex'),
        'description'   => 'Headquarters',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'headquarters',
            array(
                'label'          => __( 'Headquarters', 'rex' ),
                'section'        => 'contact',
                'settings'       => 'headquarters',
                'type'           => 'text',
            )
        )
    );

    //Phone
    $wp_customize->add_setting('phone', array(
        'title'         => __('Phone', 'rex'),
        'description'   => 'Phone',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'phone',
            array(
                'label'          => __( 'Phone', 'rex' ),
                'section'        => 'contact',
                'settings'       => 'phone',
                'type'           => 'text',
            )
        )
    );

    //Fax
    $wp_customize->add_setting('fax', array(
        'title'         => __('Fax', 'rex'),
        'description'   => 'Fax',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'fax',
            array(
                'label'          => __( 'Fax', 'rex' ),
                'section'        => 'contact',
                'settings'       => 'fax',
                'type'           => 'text',
            )
        )
    );

    //Email support
    $wp_customize->add_setting('email_sup', array(
        'title'         => __('Support E-mail', 'rex'),
        'description'   => 'Support E-mail',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'email_sup',
            array(
                'label'          => __( 'Support E-mail', 'rex' ),
                'section'        => 'contact',
                'settings'       => 'email_sup',
                'type'           => 'text',
            )
        )
    );

    //Email sales
    $wp_customize->add_setting('email_sal', array(
        'title'         => __('Sales E-mail', 'rex'),
        'description'   => 'Sales E-mail',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'email_sal',
            array(
                'label'          => __( 'Sales E-mail', 'rex' ),
                'section'        => 'contact',
                'settings'       => 'email_sal',
                'type'           => 'text',
            )
        )
    );
}
add_action( 'customize_register', 'contact_customize_register' );


// Add social links
function social_links_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'social_links' , array(
        'title'         => __( 'Social links', 'rex' ),
        'priority'      => 30,
        'description'   => 'Add links to your social pages!',
    ) );
    //Facebook
    $wp_customize->add_setting('facebook_link', array(
        'title'         => __('Facebook link', 'rex'),
        'description'   => 'Facebook page link',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'facebook_link',
            array(
                'label'          => __( 'Facebook', 'rex' ),
                'section'        => 'social_links',
                'settings'       => 'facebook_link',
                'type'           => 'text',
            )
        )
    );
    //Twitter
    $wp_customize->add_setting('twitter_link', array(
        'title'         => __('Twitter link', 'rex'),
        'description'   => 'Twitter page link',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'twitter_link',
            array(
                'label'          => __( 'Twitter', 'rex' ),
                'section'        => 'social_links',
                'settings'       => 'twitter_link',
                'type'           => 'text',
            )
        )
    );
    //Google plus
    $wp_customize->add_setting('google_plus_link', array(
        'title'         => __('Google+ link', 'rex'),
        'description'   => 'Google+ page link',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'google_plus__link',
            array(
                'label'          => __( 'Google+', 'rex' ),
                'section'        => 'social_links',
                'settings'       => 'google_plus_link',
                'type'           => 'text',
            )
        )
    );
    //Google plus
    $wp_customize->add_setting('youtube_link', array(
        'title'         => __('Youtube link', 'rex'),
        'description'   => 'Youtube page link',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'youtube__link',
            array(
                'label'          => __( 'Youtube', 'rex' ),
                'section'        => 'social_links',
                'settings'       => 'youtube_link',
                'type'           => 'text',
            )
        )
    );
    //LinkedIn
    $wp_customize->add_setting('linkedin_link', array(
        'title'         => __('LinkedIn link', 'rex'),
        'description'   => 'LinkedIn page link',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'linkedin_link',
            array(
                'label'          => __( 'LinkedIn', 'rex' ),
                'section'        => 'social_links',
                'settings'       => 'linkedin_link',
                'type'           => 'text',
            )
        )
    );
    //Dribbble
    $wp_customize->add_setting('dribbble_link', array(
        'title'         => __('Dribbble link', 'rex'),
        'description'   => 'Dribbble page link',
        'default'       => ''
    ));
    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'dribbble_link',
            array(
                'label'          => __( 'Dribbble', 'rex' ),
                'section'        => 'social_links',
                'settings'       => 'dribbble_link',
                'type'           => 'text',
            )
        )
    );
}
add_action( 'customize_register', 'social_links_customize_register' );

//Add page widget area
function page_sidebar_widget() {

    $args = array(
        'name'          => 'Blog-right',
        'id'            => 'blog-right',
        'before_widget' => '<div class="single-widget widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    );

    register_sidebar( $args );

}
add_action( 'widgets_init', 'page_sidebar_widget' );

//Pagination
function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<nav><ul class=\"pagination blog-pagination\">";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>";
        if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<li><a href='".get_pagenum_link($i)."' class=\"current\">".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a></li>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\" aria-label=\"Next\"><span aria-hidden=\"true\">&raquo;</span></a></li>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label=\"Next\"><span aria-hidden=\"true\">&raquo;</span></a></li>";
        echo "</ul></nav>\n";
    }
}
