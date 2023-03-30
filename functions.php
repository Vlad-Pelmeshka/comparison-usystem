<?php



if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

// Nav locations
register_nav_menus( array(
  'main_menu' => __( 'Main menu', 'admiral' ),
) );
register_nav_menus( array(
  'sub_main_menu' => __( 'Sub main menu', 'admiral' ),
) );
register_nav_menus( array(
  'footer_menu_1' => __( 'Footer menu 1', 'admiral' ),
) );
register_nav_menus( array(
  'footer_menu_2' => __( 'Footer menu 2', 'admiral' ),
) );
register_nav_menus( array(
  'footer_menu_3' => __( 'Footer menu 3', 'admiral' ),
) );
register_nav_menus( array(
  'icons_list' => __( 'Isons list', 'admiral' ),
) );

// ACFPro options page setup
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  acf_add_options_sub_page('Site settings');
}

//Custom Post Types
require_once('inc/init.php');

// SCRIPTS/STYLES
require_once('inc/wp_enqueue.php');

// WIDGETS
require_once('inc/widgets.php');




add_action('wp_ajax_nopriv_get_blog_items', 'get_blog_items');
add_action('wp_ajax_get_blog_items', 'get_blog_items');

function get_blog_items() {

    $data = $_POST;

    $numberposts = $data['numberposts'];
    $offset = $data['offset'];

    $answer = array();

    $posts = get_posts(array(
        'numberposts' => $numberposts,
        'offset' => $offset,
        'post__not_in' => array($data['excluse_post'])
    ));
    $post_ids = array();

    foreach ($posts as $post) {
        $blog_id = $post->ID;
        $author_id = get_post_field( 'post_author', $post_id );

        $answer['items'][$blog_id] = array(
            'title' 		=> get_the_title($blog_id),
            'image' 		=> wp_get_attachment_image_src(get_post_thumbnail_id($blog_id), 'full' )[0],
            'link' 			=> get_permalink($blog_id), // Додай як вважаєш за потрібне
            'author_id'     => array(
                'id'                => $author_id,
                'icon'              => get_avatar_url($author_id),
                'FIO'               => get_the_author_meta( 'last_name',$author_id ) . " " . get_the_author_meta( 'first_name', $author_id ),
                'read_time_text'    => get_field( 'read_time_text', $blog_id )
            ),
            'category'      => get_the_category( $post_id )[0]->name ?? ''
        );
    }

    $post_count = wp_count_posts('post')->publish;
    
    $answer['new_offset'] = $offset + $numberposts; 

    if($post_count >= $answer['new_offset']){
        $answer['max_blog_items'] = true; 
    }

    wp_send_json_success($answer);
}
