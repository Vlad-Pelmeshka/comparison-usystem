<?php

	$product_list_data = array(
        'slider_type'   => get_sub_field('slider_type'),
        'card_type'     => get_sub_field('card_type'),
        'products'      => get_sub_field('products'),
    );
    
    $product_list = [];

    if($product_list_data['card_type'] == 'product' ){

        foreach($product_list_data['products'] as $key => $product_id){
            $product_list[$key] = array(
                'title'         => get_the_title($product_id),
                'pretitle_text' => get_field('pretitle_text',$product_id),
                'image'         => get_field('data_list', $product_id)['image_for_list'],
                'description'   => get_field('short_description',$product_id),
                'link'          => get_permalink($product_id)
            );
        }
    }

    var_dump($product_list);

?>

<section class="
    product_list_section
	<?= $product_list_data['slider_type'] ?>
">
    <?php
    $main_block = get_sub_field('main_block');
    if($main_block['show_main_block']):
        ?>
        <div class="product_list_section-main_block">
            <?php include('parts/main_block-part.php'); ?>
        </div>
    <?php endif; ?>
    <!-- Вивести продукт ліст -->

    <?php foreach($product_list as $product): ?>

    <?php endforeach; ?>

</section>