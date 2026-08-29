<?php
/**
 * Front page template
 * Import homepage sections from static index.html into WordPress pages/blocks,
 * or use this template as a starting point.
 *
 * @package SoftApps_Digital
 */

get_header();
?>

<main id="main-content">
  <section class="hero-home">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-7 hero-content">
          <p class="hero-pill d-inline-block mb-3">South African Technology Company</p>
          <h1>SoftApps Digital Solutions</h1>
          <p class="hero-tagline">Technology. Digital Solutions. Your Success.</p>
          <p class="hero-desc">Empowering businesses and individuals through reliable ICT services, software, websites and digital skills.</p>
          <div class="hero-pills">
            <span class="hero-pill">ICT</span>
            <span class="hero-pill">Software</span>
            <span class="hero-pill">Web</span>
            <span class="hero-pill">IT Support</span>
            <span class="hero-pill">Training</span>
          </div>
          <div class="d-flex flex-wrap gap-3">
            <a href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>" class="btn btn-softapps btn-primary-softapps btn-lg">Get a Quote</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-softapps btn-outline-softapps btn-lg">Explore Our Services</a>
          </div>
        </div>
        <div class="col-lg-5 hero-visual">
          <div class="hero-visual-card">
            <div class="hero-stat-grid">
              <div class="hero-stat-item"><i class="bi bi-pc-display"></i><h4>ICT &amp; IT Support</h4><p>Technical services for businesses</p></div>
              <div class="hero-stat-item"><i class="bi bi-code-slash"></i><h4>Software Development</h4><p>Custom digital solutions</p></div>
              <div class="hero-stat-item"><i class="bi bi-globe2"></i><h4>Website Development</h4><p>Professional online presence</p></div>
              <div class="hero-stat-item"><i class="bi bi-mortarboard"></i><h4>Digital Training</h4><p>Build practical tech skills</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  // Additional homepage sections: create as WordPress page content or template parts.
  // See README.md for importing static HTML sections into WordPress.
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      the_content();
    endwhile;
  endif;
  ?>

  <section class="cta-section">
    <div class="container">
      <h2>Ready to Get Started?</h2>
      <p>Whether you need IT support, a new website, custom software or digital skills training — we're here to help.</p>
      <a href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>" class="btn btn-softapps btn-primary-softapps btn-lg">Get a Quote</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
