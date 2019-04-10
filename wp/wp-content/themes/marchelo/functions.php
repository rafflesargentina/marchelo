<?php
function understrap_remove_scripts()
{
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');

    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{

    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get('Version'));
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get('Version'), true);
    if (is_singular() && comments_open() && get_option('thread_comments') ) {
        wp_enqueue_script('comment-reply');
    }
}

function add_child_theme_textdomain()
{
    load_child_theme_textdomain('understrap-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'add_child_theme_textdomain');

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

//* http://gasolicious.com/remove-tabs-keep-product-description-woocommerce/
//  Location: add to functions.php
//  Output: removes woocommerce tabs
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

//* http://gasolicious.com/remove-tabs-keep-product-description-woocommerce/
//  Location: add to functions.php
//  Output: adds full description to below price

//function woocommerce_template_product_description() {
  //woocommerce_get_template( 'single-product/tabs/description.php' );
//}
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

function woocommerce_template_product_additional_information()
{
    woocommerce_get_template('single-product/tabs/additional-information.php');
}

add_action('woocommerce_single_product_summary', 'woocommerce_template_product_additional_information', 20);

//add_filter('woocommerce_product_description_heading', '__return_null');

add_filter(
    'woocommerce_form_field_args', function ($args, $key, $value) {
        $args['input_class'][] = 'form-control';
        $args['class'][] = 'form-group';
        return $args;
    }, 10, 3
);
