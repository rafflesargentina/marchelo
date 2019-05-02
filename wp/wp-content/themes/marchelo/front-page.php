<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if (! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<?php if (is_front_page() && is_page(2)) : ?>
  <div id="home-carousel" class="carousel home-carousel slide" data-ride="carousel">
    <div class="carousel-inner home-carousel__inner">
      <div class="carousel-item home-carousel__item home-carousel__item--one active">
        <div class="overlay"></div>
        <div class="container">
          <div class="home-carousel__item-content d-table w-100">
            <div class="align-middle d-table-cell text-center text-white">
              <h1 class="display-1 ff-comfortaa ls-8 text-primary">marchelo</h1>
              <h2 class="display-3 ff-beyond-infinity mb-5">Panaderia y Pasteleria</h2>
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item home-carousel__item home-carousel__item--two">
        <div class="overlay"></div>
        <div class="container">
          <div class="home-carousel__item-content d-table w-100">
            <div class="align-middle d-table-cell text-center text-white">
              <h1 class="display-1 ff-comfortaa ls-8 text-primary">marchelo</h1>
              <h2 class="display-3 ff-beyond-infinity mb-5">Panaderia y Pasteleria</h2>
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item home-carousel__item home-carousel__item--three">
        <div class="overlay"></div>
        <div class="container">
          <div class="home-carousel__item-content d-table w-100">
            <div class="align-middle d-table-cell text-center text-white">
              <h1 class="display-1 ff-comfortaa ls-8 text-primary">marchelo</h1>
              <h2 class="display-3 ff-beyond-infinity mb-5">Panaderia y Pasteleria</h2>
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item home-carousel__item home-carousel__item--four">
        <div class="overlay"></div>
        <div class="container">
          <div class="home-carousel__item-content d-table w-100">
            <div class="align-middle d-table-cell text-center text-white">
              <h1 class="display-1 ff-comfortaa ls-8 text-primary">marchelo</h1>
              <h2 class="display-3 ff-beyond-infinity mb-5">Panaderia y Pasteleria</h2>
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="categories p-5">
    <h3 class="categories__title ff-raleway ls-4 mb-3 mb-md-5 text-uppercase">Nuestros Productos</h3>
    <div class="container categories-swiper" id="categories-swiper">
      <div class="swiper-wrapper categories-swiper__wrapper">
        <div class="categories-swiper__slide swiper-slide">
          <a href="/?product_cat=panaderia"><img class="categories__photo w-100" src="/wp-content/themes/marchelo/img/panificados.png"></a>
          <a class="categories__link" href="/?product_cat=panaderia">Panaderia</a>
        </div>
        <div class="categories-swiper__slide swiper-slide">
          <a href="/?product_cat=dulces"><img class="categories__photo w-100" src="/wp-content/themes/marchelo/img/dulces.png"></a>
          <a class="categories__link" href="/?product_cat=dulces">Dulces</a>
        </div>
        <div class="categories-swiper__slide swiper-slide">
          <a href="/?product_cat=pasteleria"><img class="categories__photo w-100" src="/wp-content/themes/marchelo/img/pasteleria.png"></a>
          <a class="categories__link" href="/?product_cat=pasteleria">Pasteleria</a>
        </div>
        <div class="categories-swiper__slide swiper-slide">
          <a href="/?product_cat=salados"><img class="categories__photo w-100" src="/wp-content/themes/marchelo/img/salados.png"></a>
          <a class="categories__link" href="/?product_cat=salados">Salados</a>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination position-relative"></div>
    </div>
  </div>

  <div class="our-events mb-5">
    <div class="container">
      <div class="our-events__content d-table w-100">
        <div class="align-middle d-table-cell text-center text-white">
          <h3 class="display-2 ff-beyond-infinity">Nuestros</h3>
          <h3 class="display-3 ff-raleway ls-4">EVENTOS</h3>
          <div class="row">
            <a class="btn btn-lg btn-outline-light ls-4 offset-2 col-8 offset-md-4 col-md-4" href="/?product_cat=eventos">OPCIONES</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="how2buy">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="ff-comfortaa ls-4 text-center">¿Sabés cómo <strong>COMPRAR</strong> por nuestra web?</h3>
          <h3 class="d-none d-md-block display-3 ff-beyond-infinity ls-4 text-center" style="margin-top:-1.5rem;">Segui los pasos</h3>
        </div>
      </div>
      <div class="p-5 how2buy-swiper" id="how2buy-swiper">
        <div class="swiper-wrapper how2buy-swiper__wrapper">
          <div class="swiper-slide text-center">
            <img class="px-4 w-100" src="/wp-content/themes/marchelo/img/form_data.svg">
            <a href="/my-account">Registrate</a>
          </div>
          <div class="how2buy-swiper__slide swiper-slide text-center">
            <img class="px-4 w-100" src="/wp-content/themes/marchelo/img/shopping_cart.svg">
            <p>Seleccioná los productos</p>
          </div>
          <div class="how2buy-swiper__slide swiper-slide text-center">
            <img class="px-4 w-100" src="/wp-content/themes/marchelo/img/billing_info.svg">
            <p>Seleccioná el método de pago</p>
          </div>
          <div class="how2buy-swiper__slide swiper-slide text-center">
            <img class="px-4 w-100" src="/wp-content/themes/marchelo/img/data_confirmation.svg">
            <p>Confirmá tu compra</p>
          </div>
          <div class="how2buy-swiper__slide swiper-slide text-center">
            <img class="px-4 w-100" src="/wp-content/themes/marchelo/img/shipping.svg">
            <p>Recibí o retirá tu compra</p>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination position-relative"></div>
      </div>
    </div>
  </div>

<?php elseif(is_page(8)) : ?>
  <header class="woocommerce-products-header contacto mb-5">
    <div class="woocommerce-products-header__title woocommerce-products-header__title--category">
      <h2 class="display-2 ff-beyond-infinity d-md-none">Entremos en</h2>
      <h1 class="display-3 d-md-none text-uppercase">Contacto</h1>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-4">
    <?php if (have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
    endwhile; else: ?>
        <p>No hay contenido para mostrar :(</p>
    <?php endif; ?>
      </div>
      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13149.738747933436!2d-58.4977661!3d-34.5172134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6e188f6ac0a622b!2sPanader%C3%ADa+y+Confiteria+Marchelo!5e0!3m2!1ses!2sar!4v1554471832634!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<?php elseif(is_page(666)) : ?>
    <?php if (have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
    endwhile; else: ?>
        <p>No hay contenido para mostrar :(</p>
    <?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>
