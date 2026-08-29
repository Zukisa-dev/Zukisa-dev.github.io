<footer class="footer-softapps">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="footer-brand">SoftApps Digital Solutions (Pty) Ltd</div>
        <p class="footer-tagline">Technology. Digital Solutions. Your Success.</p>
        <div class="footer-social">
          <a href="#" aria-label="Facebook (add link)"><i class="bi bi-facebook"></i></a>
          <a href="#" aria-label="Instagram (add link)"><i class="bi bi-instagram"></i></a>
          <a href="#" aria-label="LinkedIn (add link)"><i class="bi bi-linkedin"></i></a>
          <a href="<?php echo esc_url( softapps_whatsapp_link() ); ?>" aria-label="WhatsApp" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <h5><?php esc_html_e( 'Quick Links', 'softapps-digital' ); ?></h5>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'softapps-digital' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'About', 'softapps-digital' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'softapps-digital' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/training/' ) ); ?>"><?php esc_html_e( 'Training', 'softapps-digital' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'softapps-digital' ); ?></a>
      </div>
      <div class="col-6 col-lg-3">
        <h5><?php esc_html_e( 'Services', 'softapps-digital' ); ?></h5>
        <a href="<?php echo esc_url( home_url( '/it-support/' ) ); ?>"><?php esc_html_e( 'IT Support', 'softapps-digital' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/website-development/' ) ); ?>"><?php esc_html_e( 'Website Development', 'softapps-digital' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/software-development/' ) ); ?>"><?php esc_html_e( 'Software Development', 'softapps-digital' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/training/' ) ); ?>"><?php esc_html_e( 'Training', 'softapps-digital' ); ?></a>
      </div>
      <div class="col-lg-3">
        <h5><?php esc_html_e( 'Contact', 'softapps-digital' ); ?></h5>
        <a href="tel:<?php echo esc_attr( softapps_contact_phone_link() ); ?>"><i class="bi bi-telephone me-1"></i> <?php echo esc_html( softapps_contact_phone() ); ?></a>
        <a href="mailto:<?php echo esc_attr( softapps_contact_email() ); ?>"><i class="bi bi-envelope me-1"></i> <?php echo esc_html( softapps_contact_email() ); ?></a>
        <span class="d-block mt-2" style="font-size:0.9375rem;"><i class="bi bi-geo-alt me-1"></i> South Africa</span>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> SoftApps Digital Solutions (Pty) Ltd. <?php esc_html_e( 'All Rights Reserved.', 'softapps-digital' ); ?>
    </div>
  </div>
</footer>

<a href="<?php echo esc_url( softapps_whatsapp_link() ); ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Chat on WhatsApp', 'softapps-digital' ); ?>">
  <i class="bi bi-whatsapp"></i>
</a>

<?php wp_footer(); ?>
</body>
</html>
