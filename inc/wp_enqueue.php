<?php
/**
 * SCRIPTS/STYLES
 */

  function style_enqueue() {

    // Core styles
 
      wp_enqueue_style('main-styles',   THEME_URL . '/style.css',           array(), _S_VERSION );

      wp_enqueue_style('font-style',    THEME_URL . '/css/fonts.min.css',   array(), _S_VERSION );

      wp_enqueue_style('uikit-style',   THEME_URL . '/css/globals.css',     array(), _S_VERSION );

      wp_enqueue_style('front-style',   THEME_URL . '/sass/style.css',     array(), _S_VERSION );

      wp_enqueue_style('global-style',  'https://cdn.jsdelivr.net/npm/uikit@3.16.6/dist/css/uikit.min.css',   array(), '3.16.6' );

      // wp_enqueue_script( 'jquery-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true );

      wp_enqueue_script( 'uikit-script', 'https://cdn.jsdelivr.net/npm/uikit@3.16.6/dist/js/uikit.min.js', array(), '3.16.6', true );

      wp_enqueue_script( 'main-script', THEME_URL .'/js/script.js', array(), _S_VERSION, true );

    /*
      if (is_front_page()):
        endif;
      if (is_page_template('templates/template-example.php')):
        endif;

    */
  }


add_action( 'wp_enqueue_scripts', 'style_enqueue'  );