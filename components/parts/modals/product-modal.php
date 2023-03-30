<?php

$data_list = get_field('product_modal_group', 'options');


foreach ($data_list as $section_key => $section) {
    foreach ($section['product_list'] as $product_key => $product_id) {

        $data_list[$section_key][$product_key] = array(
            'id' => $product_id,
            'title' => get_the_title($product_id),
            'pretitle' => get_field('pretitle_text', $product_id),
            'modal_data' => get_field('modal_data', $product_id)
        );

    }
}

/*

$data_list => [
    0 => [
        'category_name'
        'product_list => [
            0 => [
                'id',
                'title',
                'pretitle',
                'modal_data' => [
                    'small_description',
                    'modal_image'
                ]
            ],
            1 => []
            
        ]
    ],
    1 => []
]


*/


?>

<div class="offcanvas products" id="offcanvas-products" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <div class="modal-products">

            <ul class="accordion" uk-accordion="multiple: true">

                <?php foreach ($data_list as $section_key => $section): ?>
                    <li class="accordion__item">
                        <a class="uk-accordion-title" href="#"><?= $section['category_name'] ?></a>
                        <div class="uk-accordion-content">
                            <ul class="uk-subnav uk-subnav-pill"
                                uk-switcher="animation: uk-animation-fade; connect: #switcher-<?= $section_key ?>">

                                <?php foreach ($section['product_list'] as $product_key => $product_id): ?>
                                    <li switch-data="<?= $section_key ?>">
                                        <a href="#">
                                            <?= $data_list[$section_key][$product_key]['pretitle'] ?>
                                            <span> <?= $data_list[$section_key][$product_key]['title'] ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

            <?php foreach ($data_list as $section_key_tab => $section): ?>
                <ul id="switcher-<?= $section_key_tab ?>" class="uk-switcher uk-margin">
                    <?php foreach ($section['product_list'] as $product_key => $product_id): ?>
                        <li>
                            <div class="content">
                                <h2 class="title"><?= $data_list[$section_key_tab][$product_key]['pretitle'] ?></h2>
                                <p class="subtitle"><?= $data_list[$section_key_tab][$product_key]['title'] ?></p>
                                <div class="text">
                                    <?= $data_list[$section_key_tab][$product_key]['modal_data']['small_description'] ?>
                                </div>
                                <a class="btn btn-red" href="#">Learn more about this product</a>
                            </div>
                            <div class="image">
                                <img src="<?= $data_list[$section_key_tab][$product_key]['modal_data']['modal_image'] ?>"
                                     alt="product img">
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>


        </div>
    </div>
</div>
