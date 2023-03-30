<?php 
    $tab_list = get_sub_field('tab_list');
    /*
    // Example

    tab_list = array(
        0 => array (
            'tab_title' => 'text',
            'tab_image' => 'url',
            'tab_standart_data'  => array(
                'type_data' => 'type'
                'image-title-text' => array(
                    0 => array(
                        'image'  => 'url',
                        'title'  => 'text',
                        'text'   => 'text'
                    ),
                    1 => ...
                )
            )
        ),
        1 => ...

    );

    */
?>

<ul class="uk-subnav uk-subnav-pill tab_list" uk-switcher="animation: uk-animation-fade">
    <?php foreach ($tab_list as $tab_item): ?>

        <li>
            <div class="tab_list-item">
                <div class="tab_list-item-image">
                    <img src="<?= $tab_item['tab_image'] ?>" alt="<?= $tab_item['tab_title'] ?>">
                </div>
                <div class="tab_list-item-title">
                    <?= $tab_item['tab_title'] ?>
                </div>
                <div class="tab_list-item-learn_more">Learn more</div>
            </div>   
        </li>

    <?php endforeach; ?>
</ul>

<ul class="uk-switcher uk-margin tab_list-block">
    
    <?php foreach ($tab_list as $tab_item): ?>

    <li>
        <div class="tab_block">
            <div class="<?= $tab_item['tab_standart_data']['type_data'] ?>">
                <?php 
                    switch($tab_item['tab_standart_data']['type_data']){
                        case 'image-title-text':
                            $tab_block_data = $tab_item['tab_standart_data']['image-title-text'];

                            foreach ($tab_block_data as $tab_block_item):
                            ?>


                                <div class="tab_block-item">


                                    <div class="tab_block-item-image">
                                        <img src="<?= $tab_block_item['image'] ?>" alt="<?= $tab_block_item['title'] ?>">
                                    </div>
                                    <div class="tab_block-item-title">
                                        <?= $tab_block_item['title'] ?>
                                    </div>
                                    <div class="tab_block-item-text">
                                        <?= $tab_block_item['text'] ?>
                                    </div>

                                </div>


                            <?php
                            endforeach;
                            break;
                        // Якщо будуть іншого типу блоки то ми сюди додамо 
                    }
                ?>
            </div>   
        </div>   
    </li>

    <?php endforeach; ?>
</ul>