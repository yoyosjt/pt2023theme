<?php 	
    $custom_cat = '';
	$custom_cat = get_post_meta($post->ID, 'post-custom-category', true); 
	if ($custom_cat == ''){
		$category_name = get_primary_category();
		$category_id = get_cat_ID( $category_name );
		$category_link = get_category_link( $category_id );
	} else {
		$category_name = $custom_cat;
		$category_link = '';
	}
?>
<?php if ( has_post_thumbnail() ) : ?>
        		<figure class="post-featured-image">
					<?php echo get_the_post_thumbnail(
							null,
							'medium',
							array( 
								'sizes' => '(max-width: 399px) 400px, (max-width: 599px) 690px, (max-width: 899px) 900px, (min-width: 900px) 690px, 690px',
								'srcset' => 
									get_the_post_thumbnail_url($post->ID, 'thumbnail') . ' 400w,' .
									get_the_post_thumbnail_url($post->ID, 'medium') . ' 690w,' .
									get_the_post_thumbnail_url($post->ID, 'large') . ' 900w'
							)
						);
					?>
					<figcaption><?php echo get_the_post_thumbnail_caption(); ?></figcaption>
				</figure> 
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-post'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    <header class="article-header">
        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $category_name; ?>" class="primary-category"><?php echo $category_name; ?></a>

		<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>

        <?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->

    <section class="entry-content" itemprop="text">
		<?php the_content(); ?>
	</section> <!-- end article section -->
	
	<footer class="article-footer">
		article footer
	</footer> <!-- end article footer -->
</article> <!-- end article -->

