<?php 

    if(empty($text_image_data)){
        $text_image_data = array(
            'main_block'        => get_sub_field('text_block'),
            'class_list'        => get_sub_field('class_list') ?? '',
            'image_position'    => get_sub_field('image_position'),
            'image'             => get_sub_field('image'),
            'text_after_image'  => get_sub_field('text_after_image'),
            'product_category'  => get_sub_field('product_category') ?? '',
            'select_block_type' => get_sub_field('select_block_type') ?? '', // замість classList будемо оце юзати. Якщо треба новий тип додати - пиши мені
        );
    }


    if(!empty($text_image_data['product_category'])){

        $term = $text_image_data['product_category'];

        $product_taxonomy = get_field('product_taxonomy', 'term_' .  $term->term_id);
        // var_dump( $product_taxonomy );

        $text_image_data['main_block'] = array(
            'title' 			=> $term->name,
            'subtitle' 			=> $product_taxonomy['subtitle'],
            'text' 				=> $product_taxonomy['description'],
            'button_group' 		=> array(
                'show_button'		=> true,
                'button_text'		=> 'Learn more',
                'button_link'		=> get_term_link($term->term_id)
            ),
        );
        $text_image_data['image'] = $product_taxonomy['image'];
    }

    $main_block = $text_image_data['main_block'];
    
    // var_dump($text_image_data);
    


?>
<section class="
	text-image_section
	<?= $text_image_data['class_list'] ?>
	<?= $text_image_data['select_block_type'] ?>
">

    <div class="wrapper-container">
        <div class="text-image_section-container">
            <div class="left-right-block <?= $text_image_data['image_position'] . '-image_position' ?> flex align-center justify-between">

                <div class="img_block <?= ($text_image_data['image_position'] == 'left') ? '' : 'uk-hidden@s' ?>">
                    <img src="<?= $text_image_data['image'] ?>" alt="<?= $main_block['title'] ?>">

                    <?php if(isset($text_image_data['text_after_image']) && $text_image_data['text_after_image']): ?>
                        <div class="text-image_section-text_after_image">
                            <?= $text_image_data['text_after_image'] ?>
                        </div>   
                    <? endif; ?>
                </div>

                <div class="left-right-text_block">
                    <?php
                    include('parts/main_block-part.php');
                    ?>
                </div>

                <?php
                if ($text_image_data['image_position'] == 'right'):
                    ?>
                    <div class="img_block uk-visible@s">
                        <img src="<?= $text_image_data['image'] ?>" alt="<?= $main_block['title'] ?>">
                        <?php if(isset($text_image_data['text_after_image']) && $text_image_data['text_after_image']): ?>
                            <div class="text-image_section-text_after_image">
                                <?= $text_image_data['text_after_image'] ?>
                            </div>   
                        <? endif; ?>
                    </div>
                <?php
                endif;
                ?>
            </div>

        </div>
    </div>
</section>