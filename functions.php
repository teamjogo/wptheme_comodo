<?php
/* enqueue styles and scripts */
function comodo_enqueue_assets() {
  
  /* theme's primary style.css file */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );
  
  /* css theme files */
  wp_enqueue_style( 'boostrap-css' , get_template_directory_uri() . '/css/bootstrap.css' );
  wp_enqueue_style( 'linericon-css' , get_template_directory_uri() . '/vendors/linericon/style.css' );
  wp_enqueue_style( 'font-awesome-css' , get_template_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_style( 'owl-carousel-css' , get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.css' );
  wp_enqueue_style( 'linericmagnific-popup-css' , get_template_directory_uri() . '/css/magnific-popup.css' );
  wp_enqueue_style( 'animate-css' , get_template_directory_uri() . '/vendors/animate-css/animate.css' );
  wp_enqueue_style( 'flaticon-css' , get_template_directory_uri() . '/vendors/flaticon/flaticon.css' );
  wp_enqueue_style( 'comodo-css' , get_template_directory_uri() . '/css/style.css' );

  wp_enqueue_script( 'jquery-js' , get_template_directory_uri() . '/js/jquery-3.2.1.min.js' , array() , false , true );
  wp_enqueue_script( 'popper-js' , get_template_directory_uri() . '/js/popper.js' , array() , false , true );
  wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array() , false , true );
  wp_enqueue_script( 'stellar-js' , get_template_directory_uri() . '/js/stellar.js' , array() , false , true );
  wp_enqueue_script( 'magnific-popup-js' , get_template_directory_uri() . '/s/jquery.magnific-popup.min.js' , array() , false , true );
  wp_enqueue_script( 'nice-select-js' , get_template_directory_uri() . '/vendors/nice-select/js/jquery.nice-select.min.js' , array() , false , true );
  wp_enqueue_script( 'imagesloaded-js' , get_template_directory_uri() . '/vendors/isotope/imagesloaded.pkgd.min.js' , array() , false , true );
  wp_enqueue_script( 'isotope-js' , get_template_directory_uri() . '/vendors/isotope/isotope-min.js' , array() , false , true );
  wp_enqueue_script( 'owl-carousel-js' , get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.js' , array() , false , true );
  wp_enqueue_script( 'ajaxchimp-js' , get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js' , array('jquery-js') , false , true );
  wp_enqueue_script( 'waypoints-js' , get_template_directory_uri() . '/vendors/counter-up/jquery.waypoints.min.js' , array() , false , true );
  wp_enqueue_script( 'counterup-js' , get_template_directory_uri() . '/vendors/counter-up/jquery.counterup.min.js' , array() , false , true );
  wp_enqueue_script( 'mail-js' , get_template_directory_uri() . '/js/mail-script.js' , array() , false , true );
  wp_enqueue_script( 'gmaps-js' , get_template_directory_uri() . '/js/gmaps.min.js' , array() , false , true );
  wp_enqueue_script( 'theme-js' , get_template_directory_uri() . '/js/theme.js' , array() , false , true );
  
}
add_action( 'wp_enqueue_scripts' , 'comodo_enqueue_assets' );
?>
