<?php

	$banner_type = get_sub_field('banner_type') ?? 'default_data';
	$banner_data = ($banner_type == 'custom') ? get_sub_field('banner_group') : get_field('default_banner_group','options');
	$banner_bottom_text_group =  $banner_data['banner_bottom_text_group'];
	/*
		show_bottom_text => true,
		background_for_text => '#122',
		color_for_text => '#122',
		banner_bottom_text => 'text'
	*/

?>

<section class="
	banner_section
	<?= $banner_data['class_list'] ?>
">
	<div class="img" style="background-image: url('<?=  $banner_data['image'] ?>')">
		<?php
		$main_block =  $banner_data['main_block'];
		if($main_block['show_main_block']):
		?>
			<div class="wrapper-container">
				<?php include('parts/main_block-part.php'); ?>
			</div>
		<?php endif; ?>
	</div>

	<?php if($banner_bottom_text_group['show_bottom_text']): ?>
		<div class="banner_section_bottom_text" style="background-color: <?= $banner_bottom_text_group['background_for_text'] ?>; color: <?= $banner_bottom_text_group['color_for_text'] ?>">
		<?= $banner_bottom_text_group['banner_bottom_text'] ?>
		</div>

	<?php endif; ?>

</section>