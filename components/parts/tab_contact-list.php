<?php 
    $tab_list = get_sub_field('tab_list');
    /*
    // Example

    tab_list = array(
        0 => array (
            'tab_title' => 'text',
            'tab_image' => 'url',
            'tab_contact_data'  => array(
                'form_id'   => 'id'
                'pretitle'  => 'text',
                'main_text' => 'text',
                'phone'     => '+380925465255',
                'mail'      => 'mail'
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
            </div>   
        </li>

    <?php endforeach; ?>
</ul>

<ul class="uk-switcher uk-margin tab_list-block">
    
    <?php foreach ($tab_list as $tab_item): 
        $contact_data = $tab_item['tab_contact_data'];   
    ?>

    <li>
        <div class="tab_block">
            <div class="tab_block-description">
                <div class="tab_block-pretitle">
                    <?= $contact_data['pretitle'] ?>
                </div>
                <div class="tab_block-main_text">
                    <?= $contact_data['main_text'] ?>
                </div>
                <div class="tab_block-phone">
                    <a href="tel:<?= $contact_data['phone'] ?>"><?= $contact_data['phone'] ?></a>
                </div>
                
                <div class="tab_block-mail">
                    <a href="mailto:<?= $contact_data['mail'] ?>"><?= $contact_data['mail'] ?></a>
                </div>
            </div>
            <div class="tab_block-form">
                <?php  echo do_shortcode('[contact-form-7 id="' . $contact_data['form_id'] . '" title="Contact form Engl"]'); ?>
            </div>
        </div>   
    </li>

    <?php endforeach; ?>
</ul>