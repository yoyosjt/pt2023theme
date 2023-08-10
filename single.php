<?php get_header(); ?>
<div class="site-mid-container">
    <aside id="left-sidebar" class="sidebars">
        <?php get_template_part( 'parts/left', 'sidebar' ); ?>
    </aside>
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php //if ( in_category('noad') ) { ?>
                <?php //get_template_part( 'parts/loop', 'single-noad' ); ?>
            <?php //} else { ?>
                <?php get_template_part( 'parts/loop', 'single' ); ?>
            <?php //} ?>
        <?php endwhile; else : ?>
            <?php get_template_part( 'parts/content', 'missing' ); ?>
        <?php endif; ?>
    </main>
    <aside id="right-sidebar" class="sidebars">
        <?php get_template_part( 'parts/right', 'sidebar' ); ?>
    </aside>

</div>


<?php get_footer(); ?>