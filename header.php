<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>
<body>
    <div id="mob-nav" class="menu-nav">
        <input type="checkbox" class="menu-nav__checkbox" id="menu-nav-toggle">
        <label for="menu-nav-toggle" class="menu-nav__button">
            <span class="menu-nav__burger">&nbsp;</span>
        </label>
        <div class="menu-nav__background">&nbsp;</div>
        <div class="menu-nav__contents-container">
            <div class="search-form-container">
                <form action="#" class="search">
                    <input type="text" class="search__input" placeholder="Search in PinoyThaiyo">
                    <button class="search__button">
                        <svg class="search__icon">
                            <use xlink:href="<?php echo get_theme_file_uri('/images/sprite.svg#icon-magnifying-glass'); ?>"></use>
                        </svg>
                    </button>
                </form>
            </div>
            <p class="menu-nav__menu-title">Navigation</p>
            <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'secondary',
                        'container' => 'nav',
                        'container_class' => 'menu-nav__nav',
                        'menu_class' => 'menu-nav__list',
                        'menu_id' => 'menu-ul',
                        'add_ahref_class' => 'red-on-hover',
                        'link_before' => '<span>',
                        'link_after'=>'</span>',
                        /*'fallback_cb' => 'pt2023_fallback_menu',
                        'depth' => 2,
                        'echo' => false,*/
                    ) 
                ); 
            ?>

            <p class="menu-nav__menu-title">Check Us Ont</p>

            <div class="mob-icons-nav">
                <a href="#" target="_blank" class="mob-icons-nav__links">
                    <span class="mob-icons-nav__label">PinoyThaiyo &nbsp;</span>
                    <svg class="mob-icons-nav__icon">
                        <use xlink:href="<?php echo get_theme_file_uri('/images/sprite.svg#icon-facebook'); ?>"></use>
                    </svg>
                </a>
                <a href="#" target="_blank" class="mob-icons-nav__links">
                    <span class="mob-icons-nav__label">PinoyThaiyo Go &nbsp;</span>
                    <svg class="mob-icons-nav__icon">
                        <use xlink:href="<?php echo get_theme_file_uri('/images/sprite.svg#icon-aircraft'); ?>"></use>
                    </svg>
                </a>      
            </div>
        </div>
    </div>

    <header class="site-header">
        <div class="header-one-wrapper">
            <div class="header-one">
                <div class="header-one__items header-one__logo">
                    <a href="http://localhost/pt2023/">
                        <img src="<?php echo get_theme_file_uri('/images/pinoythaiyo-logo.png'); ?>" alt="Pinoy Thaiyo logo" width="270">
                    </a>
                </div>
                <div class="header-one__items header-one__ad">
                    header ad here
                </div>
                <div class="header-one__items">
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
                </div>
            </div>
        </div>
        <div class="header-two-wrapper">
            <div class="header-two">
                <?php 
                    wp_nav_menu( 
                        array( 
                            'theme_location' => 'primary',
                            'container' => 'nav',
                            'container_class' => 'menu-nav__nav',
                            'menu_class' => 'menu-nav__list',
                            'menu_id' => 'desktop-menu',
                            'add_ahref_class' => 'red-on-hover',
                            'link_before' => '<span>',
                            'link_after'=>'</span>',
                            /*'fallback_cb' => 'pt2023_fallback_menu',
                            'depth' => 2,
                            'echo' => false,*/
                        ) 
                    ); 
                ?>
            </div>
        </div>
    </header>

    <div class="top-page-spacer">&nbsp;</div>