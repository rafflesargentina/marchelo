<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if (! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

    <style type="text/css">
        @font-face {
          font-family: "Beyond Infinity";
          src: url("/wp-content/themes/marchelo/fonts/Beyond_Infinity-Demo.ttf");
        }
    </style>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400|Raleway:700" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

        <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

        <nav class="navbar navbar-expand-md navbar-light bg-white">

    <?php if ('container' == $container ) : ?>
            <div class="container">
    <?php endif; ?>

                    <!-- Your site title as branding in the menu -->

        <?php if (!is_front_page() ) : ?>

            <h1 class="navbar-brand mb-0"><a class="ff-comfortaa ls-4 text-lowercase text-primary" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

        <?php else : ?>

            <a class="navbar-brand mb-0" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
              <?php echo "<img src='".wp_get_attachment_image_src(get_theme_mod('custom_logo'))[0]."' style='width:60px;'>"; ?>
            </a>
        <?php endif; ?><!-- end custom logo -->

        <div class="d-flex flex-row mx-auto order-md-2">
          <ul class="navbar-nav flex-row">
            <li class="nav-item"><a class="nav-link px-2 text-primary" href="/my-account"><span class="fa fa-lg fa-user"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2 text-primary" href="/cart"><span class="fa fa-lg fa-shopping-cart"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2 text-primary" href="//www.facebook.com/panymarchelo/" target="_blank"><span class="fa fa-lg fa-facebook"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2 text-primary" href="//www.instagram.com/panymarchelo/" target="_blank"><span class="fa fa-lg fa-instagram"></span></a></li>
          </ul>
        </div>

                <button class="mr-3 navbar-toggler p-2 rounded-circle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- The WordPress Menu goes here -->
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav mx-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                ); ?>

    <?php if ('container' == $container ) : ?>
            </div><!-- .container -->
    <?php endif; ?>

        </nav><!-- .site-navigation -->

    </div><!-- #wrapper-navbar end -->
