<?php
/**
 * POST PAGE
 *
 */


get_header();
/*
$post_data = array(
    'title'         => get_the_title($post_id),
    'image'         => wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full' )[0] ?? '',
    'author_id'     => get_post_field( 'post_author', $post_id ),
    'category'      => get_the_category( $post_id )[0]->name ?? ''
);


$author = array(
    'icon'              => get_avatar_url($post_data['author_id']),
    'FIO'               => get_the_author_meta( 'last_name',$post_data['author_id'] ) . " " . get_the_author_meta( 'first_name', $post_data['author_id'] ),
    'read_time_text'    => get_field( 'read_time_text' )
);

$is_h1 = true;

$site_name = get_bloginfo( 'name' );
?>

<section class="single_post" >
    <div >
        <div class="single_post-main_block">

            <div class="single_post-category">
                <?= $post_data['category'] ?>
            </div>

            <div class="single_post-title">
                <h1><?= $post_data['title'] ?></h1>
            </div>

            <div class="single_post-author">
                <?php
                    include('components/parts/author-part.php');
                ?>
            </div>

            <div class="single_post-image">
                <img src="<?= $post_data['image'] ?>" alt="<?= $post_data['title'] ?>">
            </div>
        </div>

        <?php the_content(); ?>

    </div>

    <?php get_template_part('components/share-section'); ?>

    <?php get_template_part('components/adm_lets_enhance-section'); ?>

</section>

<?php */ ?>

<?php get_footer(); ?>
