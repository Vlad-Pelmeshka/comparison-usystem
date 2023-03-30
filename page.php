<?php
/**
 * INDEX PAGE
 *
 */

get_header();

$site_name      = get_bloginfo( 'name' );
$the_content    = get_the_content();
$add_top_line   = get_field('add_top_line');
$footer_type    = get_field('footer_type');
$is_h1          = false;
if($add_top_line)
    get_template_part('components/parts/page_top_line-part');
?>
<?php if(!empty($the_content)): ?>
<section>
    <div class="uk-container default_page_content" >

        
        <div class="default_block_content">
            <?php the_content() ?>
        </div>  
        
        <?php 
            if(get_field('show_page_naw-list')):
                ?>
                    <div class="naw-list_block">   
                    </div>

                <?php
            endif;
        ?>
    </div>
</section>
<?php endif; ?>

 <?php


    page_content_f();

?>


<?php get_footer(); ?>
