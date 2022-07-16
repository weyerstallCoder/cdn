<header id="header" class="position-relative">
  <nav class="navbar navbar-expand-lg navbar-light h-100 py-0">
    <div class="container g-0 h-100">
      <a class="navbar-brand me-auto py-0" href="<?php echo get_home_url(); ?>" 
        title="Startseite - <?php echo get_bloginfo(); ?>">
        <?php the_field( 'conf_main_logo_svg', 'option' ); ?>
      </a>

      <?php wp_nav_menu(array(
        'theme_location' => 'mainmenu',
        'container' => '',
        'items_wrap' => '<ul class="navbar-nav nav-main align-items-center h-100">%3$s</ul>',
        'depth' => 2
      )); ?>
    </div>
  </nav>

  <div class="searchbar bg-white">
    <form action="/" method="get" class="h-100" id="wp-searchform">
      <button type="button" id="js-close-searchbar" class="border-0 bg-warning text-dark position-absolute top-0 end-0 h-100 d-flex justify-content-center align-items-center opacity-100"><i class="fa-solid fa-xmark fs-2 text-dark"></i></button>
      <input type="text" name="s" id="search" class="w-100 h-100 border-0 fs-4 fw-medium text-default" value="<?php the_search_query(); ?>" placeholder="Auf TSV-Heidenau.de suchen..." />
      <div class="searchbar-button h-100">
        <div class="searchbar-spinner position-absolute top-50 start-50 translate-middle d-none">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
        <i class="fa-solid fa-magnifying-glass fs-2 text-dark position-absolute top-50 start-50 translate-middle"></i>
        <input type="submit" id="searchsubmit" value="" class="h-100 w-100 p-0 position-relative"/>
      </div>
    </form>
  </div>
</header>