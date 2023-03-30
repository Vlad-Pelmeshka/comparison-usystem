<?php 
    // $accordion_id;

    $accordion_item = array(
        'title'       => get_the_title($accordion_id),
        'description' => get_post_field('post_content', $accordion_id)        ,
    );

?>
<li>
    <a class="uk-accordion-title" href="#"><?= $accordion_item['title'] ?></a>
    <div class="uk-accordion-content">
        <?= $accordion_item['description'] ?>
    </div>
</li>