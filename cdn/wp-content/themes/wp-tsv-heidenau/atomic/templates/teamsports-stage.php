<section class="bg-dark bg-pattern-zigzag pt-max pb-max text-white">
  <div class="container">
    <h1 class="text-reset fw-bold h-ultra lh-1 mb-5"><?php the_title(); ?></h1>
    <div class="row">
      <div class="col-xl-7">
      <?php if(get_post_thumbnail_id()):?>
        <figure class="ratio ratio-16x9 obj-fit-image mb-0">
          <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
        </figure>
      <?php endif; ?>
      </div>
      <div class="col-xl-3">
      <?php if(get_field( 'sportsteam_trikot' )): ?>
        <div class="card card-blank shadow-mask shadow-mask-secondary border-0 rounded-0 bg-white ratio ratio-84 mb-4">
          <figure class="mb-1 px-3 pb-4 position-absolute top-0 start-50 translate-middle-x d-flex justify-content-center">
            <img loading="lazy" class="h-100 d-block" src="<?php echo wp_get_attachment_url(get_field( 'sportsteam_trikot' )); ?>">
          </figure>
          <div class="card-footer border-0 bg-transparent text-center pb-4 bottom-0 d-flex flex-column justify-content-end">
            <p class="mb-0 fw-bold text-primary text-uppercase"><?php the_field( 'sportsteam_title_trikot' ); ?></p>
          </div>
        </div>
      <?php endif; ?>
      <?php if(get_field( 'sportsteam_trikot_player' )):?>
        <div class="card card-blank shadow-mask shadow-mask-secondary border-0 rounded-0 bg-white ratio ratio-44 mb-4">
          <div class="d-flex justify-content-center align-items-center h-100">
          <?php if(get_field( 'sportsteam_trikot_player' )):?>
            <div class="mx-3">
              <?php echo wp_get_attachment_image(get_field( 'sportsteam_trikot_player' ), 'full'); ?>
              <span class="d-block text-center fw-bold text-primary text-uppercase"><?php the_field( 'sportsteam_title_trikot_player' ); ?></span>
            </div>
          <?php endif; ?>
          <?php if(get_field( 'sportsteam_trikot_player' )):?>
            <div class="mx-3">
              <?php echo wp_get_attachment_image(get_field( 'sportsteam_trikot_goalkeeper' ), 'full'); ?>
              <span class="d-block text-center fw-bold text-primary text-uppercase"><?php the_field( 'sportsteam_title_trikot_goalkeeper' ); ?></span>
            </div>
          <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
</section>