<?php
// $news_page_id = get_option('page_for_posts');
// $news_page_url = get_permalink($news_page_id);

$slider_news_type = get_field('slider_news_type', 'options');

$news_list = array();
// var_dump($slider_news_type);

if ($slider_news_type == 'last'):

    $count_of_last_items = get_field('count_of_last_items', 'options');

    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => $count_of_last_items,
        'post_status' => 'publish'
    ));

    foreach ($recent_posts as $post) {
        $news_list[] = $post['ID'];
    }

else:

    $news_list = get_field('count_of_last_items', 'options');

endif;


if ($news_list):
    ?>

    <div class="slider-wrapper">

        <div class="news_list uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

            <ul class="uk-slider-items uk-grid uk-grid-match" uk-height-viewport="offset-top: true; offset-bottom: 30">
            <?php
            foreach ($news_list as $key_news_id => $news_id) {
                include('news-item.php');
            }
            ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
               uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
               uk-slider-item="next"></a>

        </div>
    </div>

<?php
endif;