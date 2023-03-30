<?php 

    if(empty($main_data_block)):

        $main_type = get_sub_field('main_block_type') ?? 'bottom_text';

        $main_data_block = array(
            'class_list' => ($main_type == 'custom') ? get_sub_field('class_list') : 'getintouch',
            'main_block' => ($main_type == 'custom') ? get_sub_field('main_block') : get_field('default_main_block','options')

        );

    endif;

?>
 
<section class="
	main_section
	<?=  $main_data_block['class_list']; ?>
	<?=  $main_data_block['main_type']; ?>
">

    <div class="wrapper-container">
        <?php 
            $main_block = $main_data_block['main_block']; 
        
        ?>

        <?php include('parts/main_block-part.php'); ?>
    </div>
    
</section>

<?php $main_data_block = NULL; ?>