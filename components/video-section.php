<section class="
	video_section
">

    <div class="wrapper-container">
        <div class="video_section-container">
            <?php
            $main_block = get_sub_field('main_block');
            if ($main_block['show_main_block']):
                ?>
                <div class="video_section-main_block">
                    <?php include('parts/main_block-part.php'); ?>
                </div>
            <?php endif; ?>

            <div class="video_section-block">
                <video src="<?= get_sub_field('video_item') ?>" width="1800" height="1200" loop controls playsinline
                       uk-video="autoplay: inview"></video>
            </div>
        </div>
    </div>

</section>