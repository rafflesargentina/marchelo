<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 1.6.4
 */

if (! defined('ABSPATH') ) {
    exit; // Exit if accessed directly
}

get_header('shop'); 

$category = get_the_terms($post->ID, 'product_cat')[0];

?>

  <header class="woocommerce-products-header <?php echo $category->slug; ?>" style="background-position:center bottom;">
    <?php echo $category->parent === 0 ? '<div class="overlay"></div>' : ''; ?>
    <div class="woocommerce-products-header__title <?php echo $category->parent > 0 ? 'woocommerce-products-header__title--subcategory' : 'woocommerce-products-header__title--category'; ?>">
      <h2 class="display-2 ff-beyond-infinity page-subtitle"><?php echo $category->slug === 'eventos' ? 'Nuestros' : 'Productos' ?></h2>
      <h1 class="display-3 ls-4 page-title text-uppercase"><?php echo $category->name; ?></h1>
    </div>
</header>

    <?php
    /**
     * woocommerce_before_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
     * @hooked woocommerce_breadcrumb - 20
     */
    do_action('woocommerce_before_main_content');
    ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php wc_get_template_part('content', 'single-product'); ?>

    <?php endwhile; // end of the loop. ?>

    <?php
    /**
     * woocommerce_after_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
     */
    do_action('woocommerce_after_main_content');
    ?>

    <?php
    /**
     * woocommerce_sidebar hook.
     *
     * @hooked woocommerce_get_sidebar - 10
     */
    do_action('woocommerce_sidebar');
    ?>

<?php get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
