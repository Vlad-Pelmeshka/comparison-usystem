<?php

$site_name = get_bloginfo('name');

$header_data = array(
    'main_logo' => get_field('logo', 'options'),
    'footer_text' => get_field('footer_custom_text', 'options'),
    'subfooter_data' => get_field('subfooter_data', 'options')
);

?>

    <header class="header">
        <div class="wrapper-header">
            <div class="first-line">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?= $header_data['main_logo'] ?>" alt="<?= $site_name ?>">
                    </a>
                </div>
                <div class="main_menu">
                    <div class="icon_home">
                        <a href="<?php echo home_url(); ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1_1590)">
                                    <path d="M10 20V14H14V20H19V12H22L12 3L2 12H5V20H10Z" fill="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_1590">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Home</span>
                        </a>
                    </div>
                    <div class="product_button" uk-toggle="target: #offcanvas-products">
                        Products
                    </div>

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'menu' => '',
                        'menu_class' => '',
                        'container' => false,
                        'menu_id' => '',
                        'echo' => true,
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                        'items_wrap' => '<ul id="%1$s" class=" navbar-nav wrapper-header-links">%3$s</ul>',
                        'depth' => 0,
                        'walker' => ''
                    )); ?>
                    <div class="right_icons">
                        <div class="icon_imternet" uk-toggle="target: #offcanvas-language">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_104_954)">
                                    <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM18.92 8H15.97C15.65 6.75 15.19 5.55 14.59 4.44C16.43 5.07 17.96 6.35 18.92 8ZM12 4.04C12.83 5.24 13.48 6.57 13.91 8H10.09C10.52 6.57 11.17 5.24 12 4.04ZM4.26 14C4.1 13.36 4 12.69 4 12C4 11.31 4.1 10.64 4.26 10H7.64C7.56 10.66 7.5 11.32 7.5 12C7.5 12.68 7.56 13.34 7.64 14H4.26ZM5.08 16H8.03C8.35 17.25 8.81 18.45 9.41 19.56C7.57 18.93 6.04 17.66 5.08 16ZM8.03 8H5.08C6.04 6.34 7.57 5.07 9.41 4.44C8.81 5.55 8.35 6.75 8.03 8ZM12 19.96C11.17 18.76 10.52 17.43 10.09 16H13.91C13.48 17.43 12.83 18.76 12 19.96ZM14.34 14H9.66C9.57 13.34 9.5 12.68 9.5 12C9.5 11.32 9.57 10.65 9.66 10H14.34C14.43 10.65 14.5 11.32 14.5 12C14.5 12.68 14.43 13.34 14.34 14ZM14.59 19.56C15.19 18.45 15.65 17.25 15.97 16H18.92C17.96 17.65 16.43 18.93 14.59 19.56ZM16.36 14C16.44 13.34 16.5 12.68 16.5 12C16.5 11.32 16.44 10.66 16.36 10H19.74C19.9 10.64 20 11.31 20 12C20 12.69 19.9 13.36 19.74 14H16.36Z"
                                          fill="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_104_954">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <div class="search_button" uk-search-icon>
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_36_937)">
                                    <path d="M15.5 14H14.71L14.43 13.73C15.41 12.59 16 11.11 16 9.5C16 5.91 13.09 3 9.5 3C5.91 3 3 5.91 3 9.5C3 13.09 5.91 16 9.5 16C11.11 16 12.59 15.41 13.73 14.43L14 14.71V15.5L19 20.49L20.49 19L15.5 14ZM9.5 14C7.01 14 5 11.99 5 9.5C5 7.01 7.01 5 9.5 5C11.99 5 14 7.01 14 9.5C14 11.99 11.99 14 9.5 14Z"
                                          fill="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_36_937">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>

                            <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                                <form class="uk-search uk-search-navbar uk-width-1-1" action="/">
                                    <input class="uk-search-input text-size014" name="search" type="search"
                                           placeholder="Search..."
                                           aria-label="Search" autofocus>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="burger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="mobile-menu"></div>
        </div>
    </div>
        <div class="second-line">
            <div class="wrapper-header">
                <div class="sub_main_menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'sub_main_menu',
                        'menu' => '',
                        'menu_class' => '',
                        'container' => false,
                        'menu_id' => '',
                        'echo' => true,
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                        'items_wrap' => '<ul id="%1$s" class=" navbar-nav wrapper-header-links">%3$s</ul>',
                        'depth' => 0,
                        'walker' => ''
                    )); ?>
                </div>
            </div>
        </div>
    </header>

<?php

include "modals/lang-modal.php";

include "modals/product-modal.php";

?>