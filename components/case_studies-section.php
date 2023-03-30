<?php

$case_studies_list = get_sub_field('case_studies_list');
$case_button_group = get_sub_field('button_group');
?>

<section class="
    case_studies_list_section
	<?= get_sub_field('class_list') ?>
">

    <div class="wrapper-case-studies">

        <ul class="case__list">
            <?php
            if ($case_studies_list):

                foreach ($case_studies_list as $case_studies_id) {

                    include('parts/case_studies-item.php');
                }

            endif;
            ?>
        </ul>
        <?php

        if ($case_button_group['show_button']):

            $button_data = $case_button_group;
            ?>
            <div class="button_group">
                <?php include('parts/button-block.php'); ?>
            </div>
        <?php
        endif;
        ?>

    </div>
</section>