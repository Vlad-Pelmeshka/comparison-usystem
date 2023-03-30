
<?php

	$banner_data = array(
        'image_type'    => get_sub_field('image_type'),
        'text'          => get_sub_field('text'),
        'image'         => get_sub_field('image'),
    );

?>

<section class="
    image_section
	<?= $banner_data['image_type'] ?>
">

    <!-- Виводимо зображення -->

<?php if($banner_data['text']): ?>
        <!-- Виводимо текст -->

<?php endif; ?>
