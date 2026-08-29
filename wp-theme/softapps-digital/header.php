<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a href="#main-content" class="skip-link"><?php esc_html_e( 'Skip to main content', 'softapps-digital' ); ?></a>

<header>
  <nav class="navbar navbar-expand-lg navbar-softapps sticky-top" aria-label="<?php esc_attr_e( 'Main navigation', 'softapps-digital' ); ?>">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php if ( has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <div class="navbar-brand-text">
            SoftApps
            <span>Digital Solutions (Pty) Ltd</span>
          </div>
        <?php endif; ?>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
        aria-controls="mainNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'softapps-digital' ); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'navbar-nav ms-auto align-items-lg-center',
          'fallback_cb'    => 'softapps_fallback_menu',
        ) );
        ?>
        <a class="btn btn-softapps btn-primary-softapps ms-lg-2 mt-3 mt-lg-0" href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>">
          <?php esc_html_e( 'Get a Quote', 'softapps-digital' ); ?>
        </a>
      </div>
    </div>
  </nav>
</header>
