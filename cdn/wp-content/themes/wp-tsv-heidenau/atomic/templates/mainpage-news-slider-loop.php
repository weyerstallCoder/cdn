<section class="bg-dark bg-pattern-zigzag pt-max pb-max position-relative">  
  <div class="swiper js-card-swiper js-card-swiper-news card-swiper-dark">
    <div class="swiper-wrapper mb-5">
      <?php
        $post_type_name = 'news';
        $query_news_slider = new WP_Query( array(
          'post_type' => $post_type_name,
          'posts_per_page'=> 3,
        ));
        if ( $query_news_slider->have_posts() ) :
          while ( $query_news_slider->have_posts() ) : $query_news_slider->the_post();
      ?>
      <div class="swiper-slide swiper-slide-card swiper-slide-news swiper-slide-card--xl">
      <?php 
        $args = array(
          'date_title' => 'vor '. esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') )),
          'badge_title' => 'News',
          'badge_url' => get_post_type_archive_link($post_type_name),
          'main_title' => get_the_title(),
          'main_url' => get_the_permalink(),
          'main_image' => get_post_thumbnail_id(),
        );
        do_action('organism_card_overlay', $args); 
      ?>
      </div>
      <?php endwhile;
      wp_reset_postdata();
    endif; ?>
    </div>
    <div class="swiper-pagination-wrap d-flex align-items-center position-absolute bottom-0 text-white">
      <div class="swiper-button-prev position-relative me-4"></div>
      <div class="swiper-button-next position-relative me-5"></div>
      <div class="swiper-fraction-current fw-semibold text-mini-l me-2" id="fraction-current-news">01</div>
      <div class="swiper-pagination position-relative"></div>
      <div class="swiper-fraction-total fw-semibold text-mini-l ms-2" id="fraction-total-news"></div>
    </div>
  </div>
</section>

<?php add_action('wp_print_footer_scripts', function (){ ?>
<script>
  var zeroPad = (num, places) => String(num).padStart(places, '0')
  var swiperSlides = document.querySelectorAll(".swiper-slide-news");
  var swiperFractionCurrent = document.getElementById("fraction-current-news");
  var swiperFractionTotal = document.getElementById("fraction-total-news");
  swiperFractionTotal.textContent = zeroPad(swiperSlides.length, 2);
  var swiper = new Swiper(".js-card-swiper-news", {
    slidesPerView: "auto",
    spaceBetween: 40,
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