<!-- essentially a plugin that comes with the theme -->
<!-- gonna start installing bootstrap and style sheets -->
<!-- gonna link up our header and our footer to the main page  -->

<?php

// Load stylesheets
function load_css()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all'); // registers the bootstrap css
  wp_enqueue_style('bootstrap'); // enqueues bootstrap css

  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all'); // registers /main.css 
  wp_enqueue_style('main'); // enqueues /main.css
}
add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js()
{
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
  wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');


//Theme options
add_theme_support('menus'); //adds the option "menu" in the dashboard


// Menus
register_nav_menus(     //registers some menus
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
  )

);




