<?php
    global $main_slider_type;
    
    $slider_type = $main_slider_type ?? get_sub_field('slider_type');
    
?>

<section class="
	slider_section
	<?= get_sub_field('class_list') ?>
">

    <div class="slider_section-container">

        <?php
        $main_block = get_field('main_block_news', 'options');
        ?>
        <div class="slider_section-main_block">
            <div class="wrapper-container">
                <?php include('parts/main_block-part.php'); ?>
            </div>
        </div>


        <?php include('parts/news-list.php'); ?>


    </div>
</section>