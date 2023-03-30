<?php
/**
 * FRONT PAGE
 *
 */

get_header();

$site_name      = get_bloginfo( 'name' );
$is_h1          = false;
$the_content    = get_the_content();

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
