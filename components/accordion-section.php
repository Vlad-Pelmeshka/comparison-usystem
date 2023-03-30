<?php
$accordion_list = get_sub_field('accordion_list');

?>
<section class="
	accordion_section
">

    <div class="wrapper-container">
        <div class="accordion_section-container">

            <?php
            $main_block = get_sub_field('main_block');
            if ($main_block['show_main_block']):
                ?>
                <div class="accordion_section-main_block">
                    <?php include('parts/main_block-part.php'); ?>
                </div>
            <?php endif; ?>


            <ul uk-accordion>
                <?php
                foreach ($accordion_list as $accordion_id):
                    include('parts/accordion-item.php');
                endforeach; ?>
            </ul>


        </div>
    </div>

</section>