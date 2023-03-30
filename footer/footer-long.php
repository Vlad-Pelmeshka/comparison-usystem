<footer class="footer footer-long">

    <!--Footer top-->
    <section class="footer-top">
        <div class="wrapper-container">
            <div class="flex flow-column align-center">
                <div class="footer-top__logo">
                    <img src="<?= $footer_data['main_logo'] ?>" alt="logo company">
                </div>
                <div class="text-size012 text-grey inter text-center">
					<?= $footer_data['footer_text'] ?>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-bottom">
        <div class="wrapper-container">
            <ul class="footer__list flex justify-between wrap">
                <li class="footer__item">
                    <div class="title fw-medium inter"><?= $footer_menus['footer_menu_1']->name ?></div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_1',
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
                </li>

                <li class="footer__item">
                    <div class="title fw-medium inter"><?= $footer_menus['footer_menu_2']->name ?></div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_2',
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
                </li>

                <li class="footer__item">
                    <div class="title fw-medium inter"><?= $footer_menus['footer_menu_3']->name ?></div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_3',
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
                </li>

                <li class="footer__item">
                    <div class="title fw-medium inter">Connect with us</div>
                    <div class="social flex align-center">
                        <?php
                        foreach ($icons_list as $value) {
                            ?>

                            <a target="_blank" href="<?= $value['link'] ?>"><img src="<?= $value['icon'] ?>" alt="<?= $value['link'] ?>"></a>

                            <?php
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer__copyright flex align-center justify-center">
        <div class="subfooter_list flex align-center">
			<?php foreach($footer_data['subfooter_data'] as $subfooter_item):
				$subfooter_item = $subfooter_item["subfooter_item"];
				?>
					<div class="subfooter_item"><?= $subfooter_item ?></div>
				<?php
			endforeach;?>
		</div>
    </div>
</footer>