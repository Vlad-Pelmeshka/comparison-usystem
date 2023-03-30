<?php

$args = array(
    'post_type' => array('post'),
);

$query = new WP_Query($args);

$data_arr = array();


foreach ($query->posts as $key => $post) {

    $data_arr[$key]['title'] = $post->post_title;
    $data_arr[$key]['date'] = get_the_date('jS F Y', $post->ID);
    $data_arr[$key]['link'] = get_permalink($post->ID);
    $data_arr[$key]['img'] = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    $data_arr[$key]['description'] = get_field('short_description', $post->ID);

}
//var_dump($data_arr);

?>

<div class="news">
    <div class="wrapper-container">
        <?php $main_block = get_sub_field('main_block'); ?>

        <div class="uk-position-relative" uk-slideshow="animation: fade">


            <ul class="uk-slideshow-items">
                <?php foreach ($query->posts as $key => $post): ?>
                    <li>
                        <div class="news__section flex">
                            <div class="news__section-image">
                                <img src="<?= $data_arr[$key]['img'] ?>" alt="<?= $data_arr[$key]['title'] ?>">
                            </div>
                            <div class="news__section-info">
                                <div class="subtitle-section flex align-center">
                                    <div class="subtitle fw-semibold text-size018 text-red"><?= $data_arr[$key]['date'] ?></div>
                                </div>
                                <div class="title fw-semibold text-size036 text-black"><?= $data_arr[$key]['title'] ?></div>
                                <div class="description inter text-size016 fw-regular"><?= $data_arr[$key]['description'] ?></div>
                                <a class="btn btn-red" href="<?= $data_arr[$key]['link'] ?>">Read the full article</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="podcast_section-list">
                <ul class="uk-thumbnav news__list flex">
                    <?php foreach ($query->posts as $key => $post): ?>
                        <li class="news__list-item" uk-slideshow-item="<?= $key ?>">
                            <a href="#">
                                <div class="info">
                                    <div class="subtitle fw-semibold text-size018 text-red"><?= $data_arr[$key]['date'] ?></div>
                                    <div class="title fw-semibold text-size024 text-black"><?= $data_arr[$key]['title'] ?></div>
                                    <p class="description inter text-size016 "><?= $data_arr[$key]['description'] ?></p>
                                    <div class="button inter text-size016 text-red">
                                        Read the full article →
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="<?= $data_arr[$key]['img'] ?>" alt="<?= $data_arr[$key]['title'] ?>">
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</div>
