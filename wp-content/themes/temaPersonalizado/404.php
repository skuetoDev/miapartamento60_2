<?php get_header(); ?>

<main id="main-content">
  <section class="error-404 not-found">
    <h1>404 - Página no encontrada</h1>
    <img>
    <p>Lo sentimos, la página que buscas no existe.</p>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.svg" alt="404">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Volver al inicio</a>
  </section>
</main>

<?php get_footer(); ?>