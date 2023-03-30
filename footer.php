<?php
/**
 * FOOTER
 *
 */


	$locations = get_nav_menu_locations();

	$icons_list;
	foreach (wp_get_nav_menu_items($locations['icons_list']) as  $value) {
		$icons_list[] = array(
			'icon' => get_field('icon_item', $value->ID),
			'link' => $value->url
		);
	}

	$footer_data = array(
		'main_logo' 		=> get_field('logo','options'),
		'footer_text' 		=> get_field('footer_custom_text','options'),
		'subfooter_data' 	=> get_field('subfooter_data','options')
	);


	$footer_menus = array(
		'footer_menu_1' => wp_get_nav_menu_object($locations['footer_menu_1']),
		'footer_menu_2' => wp_get_nav_menu_object($locations['footer_menu_2']),
		'footer_menu_3' => wp_get_nav_menu_object($locations['footer_menu_3'])
	);

    global $footer_type;

    $footer_type = $footer_type ?? 'long';
    

    if(isset($footer_type) && $footer_type=='long'):
        include "footer/footer-long.php";
    else:
        include "footer/footer-short.php";
    endif;
?>



<?php wp_footer(); ?>
</body>

</html>