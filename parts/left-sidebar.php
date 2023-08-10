<?php
    if (function_exists('pt2023_get_posts')) {
	    echo pt2023_get_posts('', 2, 5, 'DESC', 1); //$title, $cat, $numofposts, $order, $excerpt)
    }
?>

<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
<?php endif; ?>