
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
add_theme_support('post-thumbnails'); // add images to our
add_theme_support('widgets');
// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location'

  )

);


// Custom Image Sizes
add_image_size('blog-large' , 800, 400, false); // hard-crop
add_image_size('blog-small', 300, 200, true); // hard-crop


// Register Sidebars

function my_sidebars()
{
  register_sidebar(
    array(
      'name' => 'page_sidebar',
      'id' => 'page-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' =>  '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'blog_sidebar',
      'id' => 'blog-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' =>  '</h4>'
    )
  );
};
add_action('widgets_init', 'my_sidebars');


//Custom Post Types

function my_first_post_type()
{
  $args = array(
    'labels' => array(
      'name'               => 'Services',
      'singular_name'      => 'Service',
      'add_new_item'       => 'Add New Service',
      'add_new'            => 'Add New Service',
      'new_item'           => 'New Service',
      'edit_item'          => 'Edit Service',
      'view_item'          => 'View Service',
      'all_items'          => 'All Services',
      'search_items'       => 'Search Services',
      'parent_item_colon'  => 'Parent Services:',
      'not_found'          => 'No services found.',
      'not_found_in_trash' => 'No services found in Trash.'
    ),
    'menu_icon' => 'dashicons-carrot',
    'hierarchical' => true,
    'public' => true, // publicly accessible by user on FE/BE
    'has_archive' => true, // will have an archive (like a blog post does)
    'supports' => array( 'title', 'editor', 'thumbnail', "custom-fields"), // what options this post has
    'rewrite' => array('slug' => 'services') //rewrites the url to whatever you want (default would be services)

  );

  register_post_type('services', $args);
} 
add_action('init','my_first_post_type');

function my_first_taxonomy()
{
  $args = array(
    'labels' => array(
      'name'               => 'Types',
      'singular_name'      => 'Type'

    ),
    'public' => true,
    'hierarchical' => false,

  );
  register_taxonomy('types', array('services'), $args);
}
add_action('init', 'my_first_taxonomy');

// Google Maps API Key

function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyDaZ6ruwibK1eEz6uXh9JMF5xxBvMw6h10';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function enqueue_google_maps() {
  wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_google_maps');