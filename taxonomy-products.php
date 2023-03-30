<?php
/*

    Product - Category page

*/
get_header();

if( have_posts() ){
	// перебираем все имеющиеся посты и выводим их
	while( have_posts() ){
		the_post();

        $data_list = get_field('data_list',get_the_ID());

        $text_image_data = array(
            'main_block' => [
                'title' 			=> get_the_title(),
                'subtitle' 			=> get_field('pretitle_text',get_the_ID()),
                'text' 				=>  $data_list['description_for_list'],
                'button_group' 		=> array(
                    'show_button'		=> true,
                    'button_text'		=> 'Learn more',
                    'button_link'		=> get_the_permalink()
                ),
            ],
            'image' => $data_list['image_for_list'],
            'image_position' => 'left',
            'class_list' => ''

        );

        include('components/text-image-section.php');

        $text_image_data = '';

        // var_dump($product_data);

    }
        
}


// get_template_part('components/banner-section');
get_template_part('components/subscribe-section');
get_template_part('components/slider-news-section');
get_template_part('components/main-section');
?>

<?php get_footer(); ?>
