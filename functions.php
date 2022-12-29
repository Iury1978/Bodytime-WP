<?php


function bodytime_assets() {

    // wp_enqueue_style( 'indexcss', get_template_directory_uri() . '/assets/css/indexall.css' );
    wp_enqueue_style( 'indexcss', get_template_directory_uri() . '/assets/css/index.css' );
wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.min.js', array(), '20151215', true );



// wp_enqueue_script( 'search', get_template_directory_uri() . '/assets/js/modules/search.js', array(), '20151215', true );

  //   

  //   wp_enqueue_style( 'hamb', get_template_directory_uri() . '/assets/css/hamburgers/hamburgers.min.css' );

  //   wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );

  //   wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/fonts/icomoon/style.css' );
    
  //   wp_enqueue_style( 'anim', get_template_directory_uri() . '/assets/css/animsition.min.css' );

	// wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );

  //   wp_enqueue_script( 'script-all', get_template_directory_uri() . '/assets/js/scripts-all.js', array(), '20151215', true );
    
  //   wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'bodytime_assets' );

show_admin_bar(false);

add_theme_support( 'post-thumbnails' );
		
add_theme_support( 'post-thumbnails', array( 'card', 'slider-content' ) );

// add_theme_support( 'menus' );

// add_action('wp_ajax_callback_mail', 'callback_mail');
// add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');
