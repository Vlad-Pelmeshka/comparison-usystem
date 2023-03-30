<?php

$podcasts_list = get_sub_field('podcasts');

foreach ($podcasts_list as $key => $podcast_item) {

    $podcasts_list[$key] = array(
        'key' => $podcast_item,
        'title' => get_the_title($podcast_item),
        'date' => get_the_date('jS F Y', $podcast_item),
        'description' => get_post_field('post_content', $podcast_item),
        'image' => get_field('podcast_image', $podcast_item),
        'author' => get_field('author', $podcast_item),
        'episode' => get_field('episode', $podcast_item),
    );
}
?>

<section class="podcast_section">

    <div class="podcast_section-container">

        <div class="wrapper-container">
            <?php
            $main_block = get_sub_field('main_block');
            ?>
            <div class="podcast_section-main_block">
                <?php include('parts/main_block-part.php'); ?>
            </div>

            <div class="uk-position-relative" uk-slideshow="animation: fade">


                <ul class="uk-slideshow-items">
                    <?php foreach ($podcasts_list as $podcast_item): ?>
                        <li class="podcast_section-item">
                            <div class="podcast_section-item-content flex">
                                <div class="image">
                                    <img src="<?= $podcast_item['image'] ?>" alt="<?= $podcast_item['title'] ?>">
                                </div>
                                <div class="info">
                                    <div class="date"><?= $podcast_item['date'] ?></div>
                                    <div class="title">
                                        Episode <?= $podcast_item['episode'] ?> - <?= $podcast_item['title'] ?>
                                    </div>
                                    <div class="description"><?= $podcast_item['description'] ?></div>
                                    <div class="author"><?= $podcast_item['author'] ?></div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="podcast_section-list">
                    <ul class="uk-thumbnav flex">
                        <?php foreach ($podcasts_list as $key => $podcast_item): ?>
                            <li uk-slideshow-item="<?= $key ?>">
                                <a href="#">
                                    <div class="item-container flex flow-column align-center justify-center">
                                        <div class="top flex align-center justify-between">
                                            <div class="episode">Episode</div>
                                            <div class="number"><?= $key ?></div>
                                        </div>
                                        <div class="image">
                                            <img src="<?= $podcast_item['image'] ?>"
                                                 alt="<?= $podcast_item['title'] ?>">
                                        </div>
                                        <div class="title">
                                            <?= $podcast_item['title'] ?>
                                        </div>
                                        <div class="author">
                                            <?= $podcast_item['author'] ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</section>