<?php 
    /*
    $flex_item = array(
        'svg_icon'          => 'link',
        'item_title'        => 'text'
        'item_decription'   => 'description'
    );

    */

?>
<li class="flex_element_section flex flow-column align-center">
    <div class="icon-box flex align-center justify-center">
        <img src="<?= $flex_item['svg_icon'] ?>" alt="<?= $flex_item['item_title'] ?>">
    </div>
    <div class="title fw-semibold text-size020 "><?= $flex_item['item_title'] ?></div>
    <p class="text text-center inter">
        <?= $flex_item['item_decription'] ?>
    </p>
</li>