<section class="mb-max mt-max container">
  <?php the_sub_field( 'dloads_list_text' ); ?>
<?php if ( have_rows( 'dloads_list_rp' ) ) : ?>
  <ul class="list-group list-group-flush fs-3 fw-semibold border-bottom border-light">
  <?php while ( have_rows( 'dloads_list_rp' ) ) : the_row(); ?>
    <li class="list-group-item px-0 py-3 border-light d-flex justify-content-between align-items-center text-default">
      <?php the_sub_field( 'dloads_list_title' ); ?>
      <a class="text-primary fs-6 fw-extrabold text-uppercase text-decoration-none" href="<?php the_sub_field( 'dloads_list_file' ); ?>" title="" role="button">
        Download <span class="badge p-0 bg-transparent text-primary ls-0"><i class="fa-solid fa-arrow-down"></i></span>
      </a>
    </li>
  <?php endwhile; ?>
  </ul>
<?php endif; ?>
</section>