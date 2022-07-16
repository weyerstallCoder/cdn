<?php 
  global $post;
  $modulatorKey = 'module';
  $total_modules = count(get_field($modulatorKey));
  if (class_exists('ACF')) :
    if (have_rows($modulatorKey)) :
      if($args->type == 'section-support'){

        while (have_rows($modulatorKey)) : the_row();
          switch (get_row_layout()) {
            case 'stage_sub':
              include(locate_template(ATOMIC.'/acf-modules/stage-sub.php'));
              break;
            case 'text_section':
              include(locate_template(ATOMIC.'/acf-modules/text-section.php'));
              break;
          }
        endwhile;

      }elseif($args->type == 'sidebar-support'){

        while (have_rows($modulatorKey)) : the_row();
          switch (get_row_layout()) {
            case 'text_sidebar':
              include(locate_template(ATOMIC.'/acf-modules/text-sidebar.php'));
              break;
            case 'form_shortcode':
              include(locate_template(ATOMIC.'/acf-modules/form-shortcode.php'));
              break;
            case 'contacts_grid':
              include(locate_template(ATOMIC.'/acf-modules/contacts-grid.php'));
              break;
            case 'contacts_grid_five':
              include(locate_template(ATOMIC.'/acf-modules/contacts-grid-five.php'));
              break;
            case 'pages_grid':
              include(locate_template(ATOMIC.'/acf-modules/pages-grid.php'));
              break;
          }
        endwhile;

      }else{

        while (have_rows($modulatorKey)) : the_row();
          switch (get_row_layout()) {
            case 'stage_sub':
              include(locate_template(ATOMIC.'/acf-modules/stage-sub.php'));
              break;
            case 'shedule_week':
              include(locate_template(ATOMIC.'/acf-modules/shedule-week.php'));
              break;
            case 'sports_grid':
              include(locate_template(ATOMIC.'/acf-modules/sports-grid.php'));
              break;
            case 'text_section':
              include(locate_template(ATOMIC.'/acf-modules/text-section.php'));
              break;
            case 'text_sidebar':
              include(locate_template(ATOMIC.'/acf-modules/text-sidebar.php'));
              break;
            case 'contacts_grid':
              include(locate_template(ATOMIC.'/acf-modules/contacts-grid.php'));
              break;
            case 'contacts_grid_five':
              include(locate_template(ATOMIC.'/acf-modules/contacts-grid-five.php'));
              break;
            case 'pages_grid':
              include(locate_template(ATOMIC.'/acf-modules/pages-grid.php'));
              break;
            case 'membership_grid':
              include(locate_template(ATOMIC.'/acf-modules/membership-grid.php'));
              break;
            case 'membership_list':
              include(locate_template(ATOMIC.'/acf-modules/membership-list.php'));
              break;
            case 'text_single':
              include(locate_template(ATOMIC.'/acf-modules/text-single.php'));
              break;
            case 'faq':
              include(locate_template(ATOMIC.'/acf-modules/faq.php'));
              break;
            case 'dloads':
              include(locate_template(ATOMIC.'/acf-modules/dloads.php'));
              break;
            case 'dloads_list':
              include(locate_template(ATOMIC.'/acf-modules/dloads-list.php'));
              break;
            case 'text_image_section':
              include(locate_template(ATOMIC.'/acf-modules/text-image-section.php'));
              break;
            case 'form_shortcode':
              include(locate_template(ATOMIC.'/acf-modules/form-shortcode.php'));
              break;
            case 'gallery_grid':
              include(locate_template(ATOMIC.'/acf-modules/gallery-grid.php'));
              break;
            case 'matches_next':
              include(locate_template(ATOMIC.'/acf-modules/matches-next.php'));
              break;
          }
        endwhile;

      }
    else : ?>
      <p>Keine Module vorhanden</p>
  <?php endif;
endif; ?>