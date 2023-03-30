<?php
// $news_id

$news_data = array(
    'title' => get_the_title($news_id),
    'image' => wp_get_attachment_image_src(get_post_thumbnail_id($news_id), 'full')[0],
    'link' => get_permalink($news_id), // Додай як вважаєш за потрібне
    'description' => get_field('short_description', $news_id),
    'latest' => ($key_news_id == 0),

);


?>

<li class="uk-width-3-4">
    <div class="uk-cover-container">
        <div class="info">
            <div class="marker-news text-red text-size018 fw-semibold flex align-center">
                News <?= $news_data['latest'] ? '<span class="marker marker-red">Latest</span>' : '' ?>
            </div>
            <h3 class="title text-black fw-semibold text-size036"><?= $news_data['title'] ?></h3>
            <p class="subtitle text-size018 text-grey03 inter"><?= $news_data['description'] ?></p>
            <div class="learn_more">
                <a class="text-red text-size018 inter" href="<?= $news_data['link'] ?>">Learn more →</a>
            </div>
        </div>
        <div class="img">
            <img src="<?= $news_data['image'] ?>" width="1800" height="1200" alt="<?= $news_data['title'] ?>">
        </div>
    </div>
</li>