<?php if ( have_rows( 'membership_grid_rp' ) ) : ?>
<section class="mb-max mt-max container">
  <div class="row row-cols-xl-5">
  <?php while ( have_rows( 'membership_grid_rp' ) ) : the_row(); ?>
  <div class="col">
    <?php
    $membership_grid_class_list = array('bg-primary','border-secondary','text-secondary','card-image-trikot--primary'); 
    $membership_grid_quarter = intval(get_sub_field( 'membership_grid_price_year' )) / 4;
    $membership_grid_month = intval(get_sub_field( 'membership_grid_price_year' )) / 12;
    if ( get_sub_field( 'membership_grid_color' ) == 1 ){
      $membership_grid_class_list = array('bg-secondary','border-primary','text-primary','card-image-trikot--secondary');
    }
    $args = array(
      'class_card_bg' => $membership_grid_class_list[0],
      'class_badge_border_color' => $membership_grid_class_list[1],
      'class_badge_text_color' => $membership_grid_class_list[2],
      'class_trikot_shadow_color' => $membership_grid_class_list[3],
      'main_title' => get_sub_field( 'membership_grid_type' ),
      'main_url' => true,
      'badge_title' => get_sub_field( 'membership_grid_label' ),
      'membership_year_price' => get_sub_field( 'membership_grid_price_year' ).' €',
      'membership_quarter_price' => 'Quartal '.number_format($membership_grid_quarter, 2,',','').' €',
      'membership_month_price' => 'Mtl. '.number_format($membership_grid_month, 2,',','').' €',
    );
    do_action('organism_card_membership', $args); 
    ?>
    </div>
  <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>

<!-- Modal -->
<div class="modal fade" id="staticMembershipModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticMembershipModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold fs-3" id="staticMembershipModalLabel">Beitrittserklärung</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="card-type-square square-64 bg-primary text-white d-flex align-items-center justify-content-center fs-4 mb-2">
          <i class="fa-solid fa-download"></i>
        </span>
        <p class="mb-0 ptag-base fw-semibold">Klicke auf den Button "Download Starten" und die PDF-Beitrittserklärung wird sofort heruntergelden.</p>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-lg btn-light rounded-1-min d-block fw-bold text-uppercase text-default fs-6" data-bs-dismiss="modal">schließen</button>
        <a href="<?php echo wp_get_attachment_url(590); ?>" target="_blank" class="btn btn-lg ls-2 btn-dark rounded-1-min d-block fw-bold text-uppercase text-white fs-6">Download Starten</a>
      </div>
    </div>
  </div>
</div>