<?php 

$left_group     = get_sub_field('left_group');
$right_group    = get_sub_field('right_group');

?>
<section class="
    two-column-text_section
	<?= get_sub_field('class_list') ?>
">

    <div class="wrapper-container">
        <div class="two-column-text_section-container">
            
            <div class="left_text-container <?= $left_group['class_list'] ?> text-<?= $left_group['text_position'] ?>-position">
                <?php
                    $main_block = $left_group['text_block'];
                    include('parts/main_block-part.php');
                ?>
            </div>    
            <div class="right_text-container <?= $right_group['class_list'] ?> text-<?= $right_group['text_position'] ?>-position">
                <?php
                    $main_block = $right_group['text_block'];
                    include('parts/main_block-part.php');
                ?>
            </div>

        </div>
    </div>
</section>