<footer id="footer">
  <div class="sponsors d-flex justify-content-center border-top border-2 border-primary pb-max pt-max position-relative">
    <a class="position-absolute top-0 start-50 translate-middle sponsors-offset-logo" href="<?php echo get_home_url(); ?>" 
      title="Hier geht es zurück zur Startseite - <?php echo get_bloginfo(); ?>">
      <?php the_field( 'conf_main_logo_svg', 'option' ); ?>
    </a>
    <a href="https://vertretung.allianz.de/henrik.lohmann/" title="Die Allianz in Buchholz & Tostedt – Henrik Lohmann" target="_blank" rel="noopener">
      <?php the_field( 'conf_sponsors_logo_svg', 'option' ); ?>
    </a>
  </div>
  <div class="footer bg-primary text-white py-5">
    <nav class="navbar navbar-dark navbar-expand-lg p-0">
      <div class="container">
        <a class="footer-logo me-auto" href="<?php echo get_home_url(); ?>" 
          title="Hier geht es zurück zur Startseite - <?php echo get_bloginfo(); ?>">
          <?php the_field( 'conf_main_logo_svg', 'option' ); ?>
        </a>
        <?php wp_nav_menu(array(
          'theme_location' => 'footermenu',
          'container' => '',
          'items_wrap' => '<ul class="navbar-nav nav-main align-items-center h-100">%3$s</ul>',
          'depth' => 1
        )); ?>
      </div>
    </nav>
    <nav class="navbar navbar-dark navbar-expand-lg p-0">
      <div class="container mt-4">
        <p class="mb-0 me-auto fs-6 fw-medium opacity-50">TSV Heidenau v. 1924 e.V. <br>Am Sportplatz 13 <br>21258 Heidenau</p>
        <?php wp_nav_menu(array(
          'theme_location' => 'socialmenu',
          'container' => '',
          'items_wrap' => '<ul class="navbar-nav nav-social align-items-center h-100">%3$s</ul>',
          'depth' => 1
        )); ?>
      </div>
    </nav>
  </div>
</footer>