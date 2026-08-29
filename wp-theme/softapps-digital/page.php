<?php
/**
 * Default page template
 *
 * @package SoftApps_Digital
 */

get_header();
?>

<main id="main-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="page-hero">
      <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php if ( has_excerpt() ) : ?>
          <p><?php echo esc_html( get_the_excerpt() ); ?></p>
        <?php endif; ?>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
