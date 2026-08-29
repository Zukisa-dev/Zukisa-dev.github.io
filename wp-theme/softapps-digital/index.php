<?php
/**
 * Main index template
 *
 * @package SoftApps_Digital
 */

get_header();
?>

<main id="main-content">
  <section class="page-hero">
    <div class="container">
      <h1><?php esc_html_e( 'SoftApps Digital Solutions', 'softapps-digital' ); ?></h1>
      <p><?php esc_html_e( 'Technology. Digital Solutions. Your Success.', 'softapps-digital' ); ?></p>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'mb-5' ); ?>>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile; else : ?>
        <p><?php esc_html_e( 'No content found.', 'softapps-digital' ); ?></p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
