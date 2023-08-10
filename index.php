<?php get_header(); ?>
<div class="container">
        <?php while(have_posts()) { ?>
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php endif; ?>
                <?php the_post(); ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php //the_content(); ?>
        
        <?php } ?> 
</div>


<?php get_footer(); ?>