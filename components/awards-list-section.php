<?php 
    global $site_name;
?>
<section class="
	awards-list_section
">

    <div class="wrapper-container">
        <div class="awards-list_section-container" >

            <?php
            $main_block = get_sub_field('main_block');
            if($main_block['show_main_block']):
                ?>
                <div class="awards-list_section-main_block">
                    <?php include('parts/main_block-part.php'); ?>
                </div>
            <?php endif; ?>

            <div class="awards-list-image">
                <img src="<?= get_sub_field('awards_image') ?>" alt="<?= $site_name ?>">
            </div>

            <div class="awards-list-block">
                <?= get_sub_field('awards_list') ?>
            </div>


        </div>
    </div>
</section>