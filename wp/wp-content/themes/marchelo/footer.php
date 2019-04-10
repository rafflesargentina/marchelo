<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if (! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<footer class="container-fluid">
    <div class="row">
      <div class="bg-teal col-md-3">
        <div class="d-table h-100 w-100">
          <h1 class="align-middle d-table-cell ff-comfortaa ls-4 text-center text-primary">marchelo</h1> 
        </div>
      </div>
      <div class="bg-primary col-md-6 text-center text-md-left">
        <div class="d-table h-100 w-100">
          <ul class="color-teal d-table-cell p-4 p-md-5 list-unstyled">
            <li class="pb-2"><i class="fa fa-lg fa-map-marker pr-2"></i>Gdor. Ugarte 2220, Olivos, Bs. As.</li>
            <li class="pb-2"><a class="color-teal" href="tel:011 4718-3573"><i class="fa fa-lg fa-phone pr-2"></i>011 4718-3573</a></li>
            <li><a class="color-teal" href="mailto:contacto@marchelo.com.ar"><i class="fa fa-lg fa-envelope pr-2"></i>contacto@marchelo.com.ar</a></li>
          </ul>
        </div>
      </div>
      <div class="bg-primary col-md-3">
        <div class="d-table h-100 w-100">
          <div class="align-middle d-table-cell pb-4 p-md-5 text-center text-white">
            <p class="ls-4">¡SEGUINOS!</p>
            <ul class="list-unstyled text-center">
              <li class="d-inline"><a class="px-3 text-white" href="//www.instagram.com/panymarchelo/" target="_blank"><i class="fa fa-2x fa-instagram"></i></a></li>
              <li class="d-inline"><a class="px-3 text-white" href="//www.facebook.com/panymarchelo/" target="_blank"><i class="fa fa-2x fa-facebook"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>

</html>
