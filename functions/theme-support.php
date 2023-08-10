<?php

// Adding WP Functions & Theme Support
if ( ! function_exists( 'pt2023_theme_setup' ) ) :
    function pt2023_theme_setup() {
        
        // Add WP Thumbnail Support
        add_theme_support( 'post-thumbnails' );

        // Default thumbnail size
        //set_post_thumbnail_size(125, 125, true);

        // Add RSS Support
        add_theme_support( 'automatic-feed-links' );

        // Add Support for WP Controlled Title Tag
        //add_theme_support( 'title-tag' );


        // Add HTML5 Support
        /*add_theme_support( 'html5', 
            array( 
                'comment-list', 
                'comment-form', 
                'search-form', 
            ) 
        );*/

        
        /*add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );*/

        
        // Adding post format support
        add_theme_support( 'post-formats',
            array(
                'aside',             // title less blurb
                'gallery',           // gallery of images
                'link',              // quick link to other site
                'image',             // an image
                'quote',             // a quick quote
                'status',            // a Facebook like status update
                'video',             // video
                'audio',             // audio
                'chat'               // chat transcript
            )
        );

        //add_post_type_support( 'page', 'excerpt' );

        // Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
        //$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1000 );	

    }
endif; //end theme support
add_action( 'after_setup_theme', 'pt2023_theme_setup' );



//WP-ENQUEUE
function pt2023_files() {
    wp_enqueue_style('pt2023_main_styles', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('pt_google_fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap', false ); 
	wp_enqueue_script( 'pt2023_scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true ); //true means enqueue in footer 
}
add_action('wp_enqueue_scripts', 'pt2023_files', 999);


//MENU
function pt2023_menu() {
    register_nav_menus(
        array(
            'primary'        => _( 'PT 2023 Desktop Menu' ),
            'primary-mobile' => _( 'PT 2023 Mobile Menu' ),
            'secondary'      => _('PT 2023 Footer Menu'),
        )
    );
}
add_action( 'init', 'pt2023_menu' );




//REGISTER SIDEBARS
add_action( 'widgets_init', 'pt2023_sidebars' );
function pt2023_sidebars() {

  $my_sidebars = array(
    array(
      'name'          => 'Header Ad Area',
      'id'            => 'header-ad-area',
      'description'   => 'Put here the ad code for the header',
    ),
    array(
      'name'          => 'Right Sidebar',
      'id'            => 'right-sidebar',
      'description'   => 'Right Sidebar as right-sidebar',
    ),
    array(
      'name'          => 'Left Sidebar',
      'id'            => 'left-sidebar',
      'description'   => 'Left Sidebar as left-sidebar',
    ),  
  );

  $defaults = array(
    'name'          => 'Awesome Sidebar',
    'id'            => 'awesome-sidebar',
    'description'   => 'The Awesome Sidebar is shown on the left hand side of blog pages in this theme',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
  );

  foreach( $my_sidebars as $sidebar ) {
    $args = wp_parse_args( $sidebar, $defaults );
    register_sidebar( $args );
  }
}



// Instructs WordPress to update the image_default_link_type option to ‘none’
// Lightbox needs images link set to none
/*add_action('init', 'pt2023_set_imgage_link', 10);
function pt2023_set_imgage_link() {
    $image_set = get_option( 'image_default_link_type' );

    echo $image_set;
     
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}*/