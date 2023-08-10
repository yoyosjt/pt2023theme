<?php
    if (function_exists('pt2023_get_posts')) {
        //$title, $cat, $numofposts, $order, $excerpt)
        //empty both title and cat to show Recent
	    echo pt2023_get_posts('', '', 5, 'DESC', 1); 
    }
?>

<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'right-sidebar' ); ?>
<?php endif; ?>