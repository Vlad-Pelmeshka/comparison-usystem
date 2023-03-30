<?php
/*
	// Example
	$main_block = array(
		'title' 			=> 'text',
		'subtitle_custom' 	=> 'special subtitle text as example for background inage text',
		'subtitle' 			=> 'red text',
		'text' 				=> 'standart text',
		'button_group' 		=> array(
			'show_button'		=> true,
			'button_text'		=> 'text',
			'button_link'		=> 'link'
		),
	);
*/
	global $is_h1; // For h1-h2 structure
?>
<div class="main_block">
	<div class="main_block-text_group">

		<?php if(isset($main_block['subtitle']) && $main_block['subtitle']): ?>
			<div class="main_block-subtitle">
				<div class="main_block-subtitle-text">
					<?= $main_block['subtitle'] ?>
				</div>
			</div>
		<?php endif; ?>
		
		<?php if(isset($main_block['subtitle_custom']) && $main_block['subtitle_custom']): ?>
			<div class="main_block-subtitle_custom">
				<div class="main_block-subtitle_custom-text">
					<?= $main_block['subtitle_custom'] ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if($main_block['title']): ?>
			<div class="main_block-title">
				<?php

					if($is_h1):
						echo '<h2>' . $main_block['title'] . '</h2>';
					else:
						echo '<h1>' . $main_block['title'] . '</h1>';
						$is_h1 = true;
					endif;
				 ?>
			</div>
		<?php endif; ?>

		<?php if($main_block['text']): ?>
			<div class="main_block-text">
				<?= $main_block['text'] ?>
			</div>
		<?php endif; ?>
	</div>

	<?php
	if($main_block['button_group']['show_button']):
		$button_data = $main_block['button_group'];
		?>

		<div class="button_group">
			<?php include('button-block.php'); ?>
		</div>

		<?php
	endif;
	?>

</div>