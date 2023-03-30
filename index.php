<?php

	/* Blog page */

get_header();

$main_data_block['main_block'] = array(
	'title' 			=> 'Read our recent updates',
	'subtitle' 			=> 'News',
	'text' 				=> '',
	'button_group' 		=> array(
		'show_button'		=> false
	),
);
$main_data_block['main_type'] = 'title-section';

include 'components/main-section.php';
	
get_template_part('components/news-blog-section');

get_template_part('components/subscribe-section');
get_template_part('components/main-section');
?>




<?php get_footer(); ?>
