<section class="bg-white bg-pattern-squares pt-max pb-max">
  <div class="container">
    <h2 class="h1 fw-bold mb-3">Top Sportangebote</h2>
  </div>
  <div class="swiper js-card-swiper js-card-swiper-sports card-swiper-light">
    <div class="swiper-wrapper mb-5">
      <?php
        $query_sports_pages = new WP_Query( array(
          'post_type' => 'page',
          'post_parent' => 24,
          'order' => 'ASC',
          'orderby' => 'title',
          'posts_per_page' => -1
        ));
        if ( $query_sports_pages->have_posts() ) :
          while ( $query_sports_pages->have_posts() ) : $query_sports_pages->the_post();
      ?>
      <div class="swiper-slide swiper-slide-sports swiper-slide-card">
      <?php 
        $args = array(
          'main_title' => get_the_title(),
          'main_url' => get_the_permalink(),
          'main_text' => get_field('sports_short_description'),
        );
        do_action('organism_card_ratio_shadow', $args); 
      ?>
      </div>
        <?php endwhile; 
      wp_reset_postdata(); 
      endif; ?>
    </div>
    <div class="swiper-pagination-wrap d-flex align-items-center position-absolute bottom-0 text-white">
      <div class="swiper-button-prev position-relative me-4"></div>
      <div class="swiper-button-next position-relative me-5"></div>
      <div class="swiper-fraction-current fw-semibold text-mini-l me-2" id="fraction-current-sports">01</div>
      <div class="swiper-pagination position-relative"></div>
      <div class="swiper-fraction-total fw-semibold text-mini-l ms-2" id="fraction-total-sports"></div>
    </div>
  </div>
</section>

<?php add_action('wp_print_footer_scripts', function (){ ?>
<script>
  var zeroPad = (num, places) => String(num).padStart(places, '0')
  var swiperSlides = document.querySelectorAll(".swiper-slide-sports");
  var swiperFractionCurrent = document.getElementById("fraction-current-sports");
  var swiperFractionTotal = document.getElementById("fraction-total-sports");
  swiperFractionTotal.textContent = zeroPad(swiperSlides.length, 2);
  var swiper = new Swiper(".js-card-swiper-sports", {
    slidesPerView: "auto",
    spaceBetween: 24,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    }
  });
  swiper.on('slideChange', function(e) {
    swiperFractionCurrent.textContent = zeroPad((swiper.realIndex + 1), 2);
  });
</script>
<?php }) ?>