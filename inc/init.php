<?php

// Holds Custom Post types, Taxonomies, etc.

define('THEME_URL', get_bloginfo('stylesheet_directory'));

// Make sure featured images are enabled
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support('custom-logo');

// Add SVG type
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );
// End add SVG type


function page_content_f(){
  
if (have_rows('page_content')):
  while (have_rows('page_content')) : the_row();

      switch (get_row_layout()) :
          
          case 'main_section':
              get_template_part('components/main-section');
              break;

          case 'text-image_section':
              get_template_part('components/text-image-section');
              break;

          case 'text-array_section':
              get_template_part('components/text-array-section');
              break;

          case 'subscribe_section':
              get_template_part('components/subscribe-section');
              break;

          case 'banner_section':
              get_template_part('components/banner-section');
              break;

          case 'news_slider_section':
              get_template_part('components/slider-news-section');
              break;
              
          case 'accordion_section':
              get_template_part('components/accordion-section');
              break;
              
          case 'video_section':
              get_template_part('components/video-section');
              break;
              
          case 'flex-element_section':
              get_template_part('components/flex-element-section');
              break;
              
          case 'two_column_text_section':
              get_template_part('components/two-column-text-section');
              break;
              
          case 'awards_list_section':
              get_template_part('components/awards-list-section');
              break;
              
          case 'tab_section':
              get_template_part('components/tab-section');
              break;
              
          case 'podcast_section':
              get_template_part('components/podcast-section');
              break;
              
          case 'case_studies_section':
              get_template_part('components/case_studies-section');
              break;
              
          case 'image_section':
              get_template_part('components/image-section');
              break;
              
          case 'product_list_section':
              get_template_part('components/product_list-section');
              break;

      endswitch;

  endwhile;

endif;

}