<?php
$flex_element_list = get_sub_field('flex_element_list');

?>
<section class="
	flex_element_section
	<?= get_sub_field('class_list') ?>
">

    <div class="flex_element_section-container">
        <div class="wrapper-container">
            <?php
            $main_block = get_sub_field('main_block');
            if ($main_block['show_main_block']):
                ?>
                <div class="flex_element_section-main_block">
                    <?php include('parts/main_block-part.php'); ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="wrapper-flex-elements">
            <ul class="flex_element_section-list">
                <?php
                foreach ($flex_element_list as $flex_item):
                    include('parts/flex_element-item.php');
                endforeach; ?>
            </ul>
        </div>
    </div>
</section>