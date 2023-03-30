<?php 
    $subscribe_data = get_field('subscribe_section_block','options');
    // var_dump(get_field('subscribe_section_block','options'));
    /* Example
     $subscribe_data = array(
        'count_subscribers'     => '100,000',
        'text_description'      => 'text'
     );
    */

?>

<section class="
	subscribe_section
	<?= get_sub_field('class_list') ?>
">

    <div class="wrapper-container">
        <div class="subscribe__body flex align-center justify-between wrap">
            <div class="subscribe__info">
                <div class="title text-size036 fw-semibold">Join <span class="text-red"><?=  $subscribe_data['count_subscribers'] ?></span> subscribers
                </div>
                <div class="subtitle text-size018 popins"><?=  $subscribe_data['text_description'] ?></div>
            </div>
            <div class="subscribe__email flex align-center">
                <input class="u-input" type="text" name="clauseName" id="clauseName" value=""
                        placeholder="Enter your email"/>
                <button class="btn btn-red" type="submit">Subscribe</button>
            </div>
        </div>
    </div>

</section>