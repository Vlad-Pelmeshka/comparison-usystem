<?php
get_header();

$title = get_the_title();
$site_logo = get_field('logo', 'options');

$author_id = get_post_field('post_author', get_the_ID());

$author = array(
    'icon' => get_avatar_url($author_id),
    'name' => get_the_author_meta('last_name', $author_id) . " " . get_the_author_meta('first_name', $author_id),
    'desc' => get_field('description', 'user_' . $author_id)
);

$args_other = array(
    'post_type' => array('post'),
    'post__not_in' => array(get_the_ID())
);

$query_other = new WP_Query($args_other);

$data_arr = array();


foreach ($query_other->posts as $key => $post_other) {

    $data_arr[$key]['title'] = $post_other->post_title;
    $data_arr[$key]['date'] = get_the_date('jS F Y', $post_other->ID);
    $data_arr[$key]['link'] = get_permalink($post_other->ID);
    $data_arr[$key]['img'] = wp_get_attachment_url(get_post_thumbnail_id($post_other->ID));

}
?>

    <div class="news_section">
        <div class="wrapper-news-single">
            <div class="news_section-container flex">
                <div class="news_section-main">
                    <div class="image">
                        <img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="<?= $title ?>">
                    </div>
                    <div class="logo">
                        <img src="<?= $site_logo ?>" alt="<?= $title ?>">
                    </div>
                    <div class="info">
                        <div class="title fw-semibold text-size048">
                            <?= $title ?>
                        </div>
                        <div class="date fw-semibold text-size018 text-red">
                            <?= get_the_date('jS F Y') ?>
                        </div>
                        <div class="author">
                            <div class="author__image">
                                <img src="<?= $author['icon'] ?>" alt="<?= $author['name'] ?>">
                            </div>
                            <div class="author__name fw-medium inter">
                                <?= $author['name'] ?>
                            </div>
                            <div class="author__description inter fw-regular">
                                <?= $author['desc'] ?>
                            </div>
                        </div>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <div class="news_section-other">
                    <ul class="news-list">
                        <?php foreach ($query_other->posts as $key => $post_other): ?>
                            <li class="news-list__item">
                                <a class="flex" href="<?= $data_arr[$key]['link'] ?>">
                                    <div class="image">
                                        <img src="<?= $data_arr[$key]['img'] ?>" alt="<?= $data_arr[$key]['img'] ?>">
                                    </div>
                                    <div class="info">
                                        <div class="date text-size012 fw-semibold text-red"><?= $data_arr[$key]['date'] ?></div>
                                        <div class="title fw-semibold text-size016 text-black"><?= $data_arr[$key]['title'] ?></div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php

get_template_part('components/subscribe-section');
get_footer();

?>