<?php

$args = array(
    'post_type' => array('post'),
);

$query = new WP_Query($args);

$data_arr = array();


foreach ($query->posts as $key => $post) {

    $data_arr[] = array(
        'title'         => $post->post_title,
        'date'          => get_the_date('jS F Y', $post->ID),
        'link'          => get_permalink($post->ID),
        'img'           => wp_get_attachment_url(get_post_thumbnail_id($post->ID)),
        'description'   => get_field('short_description', $post->ID)
    );
}

$first_post = $data_arr[0];

array_shift($data_arr);

//var_dump($data_arr);

?>

<div class="news">
    <div class="wrapper-container">
        <?php $main_block = get_sub_field('main_block'); ?>

        <div class="uk-position-relative" uk-slideshow="animation: fade">


            <ul class="uk-slideshow-items">
                    <li>
                        <div class="news__section flex">
                            <div class="news__section-image">
                                <img src="<?= $first_post['img'] ?>" alt="<?= $first_post['title'] ?>">
                            </div>
                            <div class="news__section-info">
                                <div class="subtitle-section flex align-center">
                                    <div class="subtitle fw-semibold text-size018 text-red"><?= $first_post['date'] ?></div>
                                </div>
                                <div class="title fw-semibold text-size036 text-black"><?= $first_post['title'] ?></div>
                                <div class="description inter text-size016 fw-regular"><?= $first_post['description'] ?></div>
                                <a class="btn btn-red" href="<?= $first_post['link'] ?>">Read the full article</a>
                            </div>
                        </div>
                    </li>
            </ul>

            <div class="podcast_section-list">
                <ul class="uk-thumbnav news__list flex">
                    <?php foreach ($data_arr as $key => $post): ?>
                        <li class="news__list-item" uk-slideshow-item="<?= $key ?>">
                            <a href="#">
                                <div class="info">
                                    <div class="subtitle fw-semibold text-size018 text-red"><?= $post['date'] ?></div>
                                    <div class="title fw-semibold text-size024 text-black"><?= $post['title'] ?></div>
                                    <p class="description inter text-size016 "><?= $post['description'] ?></p>
                                    <div class="button inter text-size016 text-red">
                                        Read the full article →
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</div>
