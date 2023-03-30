<?php 

    $image_array = get_sub_field('image');
?>


<div uk-slider>
    <ul class="uk-slider-items uk-child-width-1-1">


<?php
    foreach( $image_array as $image_url):
?>

    <li>
        <img src="<?= $image_url ?>" alt="<?= $site_name ?>">
    </li>


<?php endforeach; ?>


</ul>
</div>