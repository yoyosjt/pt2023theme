<?php 

// Theme support options, wp_enqueue, menu
require_once(get_template_directory().'/functions/theme-support.php'); 


//adds a class field for menu anchor tags
add_filter('nav_menu_link_attributes', 'add_class_on_a', 1, 3);
function add_class_on_a($classes, $item, $args) {
    if (isset($args->add_ahref_class)) {
        $classes['class'] = $args->add_ahref_class;
    }
    return $classes;
}


//Gets posts for the sidebars
function pt2023_get_posts($title, $cat, $numofposts, $order, $excerpt) {

    global $post;
    
    $args = array(
        'numberposts'   => $numofposts,
        'category'      => $cat,
        'orderby'       => $order,
        'post_type'     => 'post',
        'post_status'   => 'publish',
    );
  
    $my_get_posts = get_posts( $args ); 
    $to_display ='';
    if($my_get_posts) {

        if ( $title == '' ) {
            if ( $cat == '' ) {
                $widgettitle = 'Recent'; 
            } else {
                $widgettitle = get_cat_name($cat);
            }
        } else {
            $widgettitle = $title;
        }
        $to_display .= '<h3 class="category-title">' . $widgettitle . '</h3>';

        $to_display .='<ul class="post-looper">';
        foreach ( $my_get_posts as $post ) : setup_postdata( $post );
            $to_display .= '<li>';
            $to_display .= '<a href="' . get_the_permalink() . '" class="" aria-hidden="true">';

            $to_display .= '<div class="thumbnail-wrapper">';
            $to_display .= get_the_post_thumbnail($post->ID, 'thumbnail', array( 'class' => 'hover-fade' )); 
            $to_display .= '</div>';
    
            $to_display .= '<div class="title-wrapper">';
            $to_display .= '<h4>' . get_the_title() . '</h4>';
            if ($excerpt==1){ $to_display .= '<p>' . $post->post_excerpt . '</p>'; }
            $to_display .= '</div>';

            $to_display .= '</a></li>';
        endforeach;
        $to_display .= '</ul>';
        } 
    
    wp_reset_postdata();
    return $to_display; 
  }





/*
function hasgallery(){
    global $post;
    return (strpos($post->post_content,'[gallery') !== false);
}*/


/**
 * Filter attributes for the current gallery image tag to add a 'data-full'
 * data attribute.
 *
 * @param array   $atts       Gallery image tag attributes.
 * @param WP_Post $attachment WP_Post object for the attachment.
 * @return array (maybe) filtered gallery image tag attributes.
 */
/*add_filter( 'wp_get_attachment_image_attributes', 'wpdocs_filter_gallery_img_atts', 10, 2 );
function wpdocs_filter_gallery_img_atts( $atts, $attachment ) {
	/*if ( $full_size = wp_get_attachment_image_src( $attachment->ID, 'full' ) ) {
		if ( ! empty( $full_size[0] ) ) {
			$atts['data-full'] = $full_size[0];

		}
	}*/

 /*   $atts['class'] = 'jess-img-class';
	return $atts;
}*/




// ADDS CUSTOM SIZES IN IMG MARKUP
/*function adjust_image_sizes_attr( $sizes, $size, $attachment_id ) {
    global $post;

    if (is_singular('post')) {

        /*if ( get_post_gallery() ){
            echo ' has gallery ';
            $sizes = '(max-width: 599px) 50vw, (min-width: 600px) 33vw, 400px';
        }*/
            
        //for single image in a post
      /*  $sizes = '(max-width: 399px) 400px, (max-width: 599px) 690px, (max-width: 899px) 900px, (min-width: 900px) 690px, 690px';
            
        return $sizes;
    }
 }
 add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 ); */



/*add_filter( "get_post_gallery", "modify_get_post_gallery_defaults", 10, 3 );
function modify_get_post_gallery_defaults($gallery, $post, $galleries) { 

    // Update the $gallery variable according to your website requirements and return this variable. You can modify the $gallery variable conditionally too if you want.
    /*echo " gal " . $gallery;
    echo " post " . $post;*/
  /*  $gallery .= " code heres ";
    return $gallery; 
}*/



/*
add_filter( 'post_gallery', 'my_gallery_shortcode', 1, 3 );
function my_gallery_shortcode( $output = '', $atts = null, $instance = null ) {
	$return = $output; // fallback

	// retrieve content of your own gallery function
	//$my_result = get_my_gallery_content( $atts );
    $my_result = " herer ";

	// boolean false = empty, see http://php.net/empty
	if( !empty( $my_result ) ) {
		$return = $my_result;
	}

	return $return;
}*/

 



/**
 * Add list of image URLs to the content if displaying a post with one or more image galleries.
 *
 * @param string $content Post content.
 * @return string (Maybe modified) post content.
 */

 /*
function wpdocs_show_gallery_image_urls( $content ) {
	global $post;

	// Only do this on singular items.
	/*if ( ! is_singular() ) {
		return $content;
	}

	// Make sure the post has a gallery in it.
	if ( ! has_shortcode( $post->post_content, 'gallery' ) ) {
		return $content;
	}*/

	// Retrieve all galleries of this post.
	//$galleries = get_post_galleries( $post );
 /*   $galleries_img_srcs = get_post_galleries_images( $post );

	if ( ! empty( $galleries_img_srcs ) ) {
		
		// Loop through all galleries found
		foreach( $galleries_img_srcs as $gallery ) {
			// Loop through each image in each gallery.
			foreach ( $gallery as $image_url ) {
                $image_id = attachment_url_to_postid($image_url); //ID of the Attachment
                $image = wp_get_attachment_image( $image_id ); //The complete &lt;img> tag
                echo $image;
			}
		}

	

		// Append our image list to the content of our post
		//$content .= $image_list;
	}
	return $content;
 }
add_filter( 'the_content', 'wpdocs_show_gallery_image_urls' ); */





// modifies the img element in the post
/*function html5_insert_image($html, $id, $caption, $title, $align, $url) {
    $html5 = "<figure id='post-$id media-$id' class='align-$align'>";
    $html5 .= "<img src='$url' alt='$title jess' />";
    if ($caption) {
      $html5 .= "<figcaption>$caption</figcaption>";
    }
    $html5 .= "</figure>";
    return $html5;
  }
  add_filter( 'image_send_to_editor', 'html5_insert_image', 10, 9 ); */



function get_primary_category(){
    $primary_cat = ''; // I have this set in some shortcodes

    if (!isset($primary_cat) || $primary_cat == '') {
        if ( class_exists('WPSEO_Primary_Term') ) {
            // Show the post's 'Primary' category, if this Yoast feature is available, & one is set. category can be replaced with custom terms
            $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );

            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term               = get_term( $wpseo_primary_term );

            if (is_wp_error($term)) {
                $categories = get_the_terms(get_the_ID(), 'category');
                $primary_cat = $categories[0]->name;
            } else {
                $primary_cat = $term->name;
            }
        } else {
            $categories = get_the_terms(get_the_ID(), 'category');
            $primary_cat = $categories[0]->name;
        }
    }
    return $primary_cat;
}





/*function lwp_4056_bottom_admin_bar()
{
    ?>
    <style>
        div#wpadminbar {
            top: auto;
            bottom: 0;
            position: fixed;
        }
        .ab-sub-wrapper {
            bottom: 32px;
        }
        html[lang] {
            margin-top: 0 !important;
            margin-bottom: 32px !important;
        }
        @media screen and (max-width: 782px){
            .ab-sub-wrapper {
                bottom: 46px;
            }
            html[lang] {
                margin-bottom: 46px !important;
            }
        }
    </style>
    <?php
}
function lwp_4056_check_username()
{
    if(is_admin()) return;
    $user = wp_get_current_user();
    //if($user && isset($user->user_login) === $user->user_login) {
    if($user && isset($user->user_login) && 'jesstura' === $user->user_login) {
        // Remove extra conditions after $user from above to apply for everyone
        add_action('wp_head', 'lwp_4056_bottom_admin_bar', 100);
    }
}
add_action('init', 'lwp_4056_check_username'); */



