<?php
global $site_name;
?>
<section class="
	text-array_section
	<?= get_sub_field('class_list') ?>
">

    <div class="about-container">
        <div class="text-array_section-container flex align-center justify-between">
            <div class="left-right-block <?= get_sub_field('image_position') . '-array_position' ?> flex align-center justify-between">

                <div class="img_block <?= (get_sub_field('image_position') == 'left') ? '' : 'uk-hidden@s' ?>">
                    <?php include('parts/image-array-part.php'); ?>
                </div>

                <div class="left-right-text_block">
                    <?php
                    $main_block = get_sub_field('text_block');
                    include('parts/main_block-part.php');
                    ?>
                </div>
            </div>

            <div class="img">
                <?php
                if (get_sub_field('image_position') == 'right'):
                    ?>
                    <div class="img_block uk-visible@s">
                        <?php include('parts/image-array-part.php'); ?>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>