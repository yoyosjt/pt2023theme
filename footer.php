<footer class="footer">
    <div class="footer-one-wrapper">
        <div class="footer-one">
            <section class="about-us">
                <a href="http://localhost/pt2023/" class="pt-logo">
                    <img src="<?php echo get_theme_file_uri('/images/pinoythaiyo-logo.png'); ?>" alt="Pinoy Thaiyo logo" width="270">
                </a>
                <p>Serving Filipinos in Thailand for x years.</p>
                <nav class="icons-nav">
                        <a href="#" target="_blank" class="icons-nav__icon-box">
                            <svg class="icons-nav__icon">
                                <use xlink:href="<?php echo get_theme_file_uri('/images/sprite.svg#icon-magnifying-glass'); ?>"></use>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="icons-nav__icon-box">
                            <svg class="icons-nav__icon">
                                <use xlink:href="<?php echo get_theme_file_uri('/images/sprite.svg#icon-facebook'); ?>"></use>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="icons-nav__icon-box">
                            <svg class="icons-nav__icon">
                                <use xlink:href="<?php echo get_theme_file_uri('/images/sprite.svg#icon-aircraft'); ?>"></use>
                            </svg>
                        </a>
                    </nav>
            </section>
            <nav class="quick-links">
                <h3 class="footer-titles">Quick Links</h3>
                <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'secondary',
                                'menu_class' => 'footer-menu',
                                //'menu_id' => 'footer-menu',
                                //'add_ahref_class' => 'red-on-hover',
                                //'link_before' => '<span>',
                                //'link_after'=>'</span>',
                                'depth' => 0,
                            ) 
                        ); 
                ?>
            </nav>
        </div>
    </div>
    <div class="footer-two-wrapper">
        All Rights Reserved &copy; 2023 | By <a href="https://jesstura.com" target="_blank">JessTura.com</a>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>