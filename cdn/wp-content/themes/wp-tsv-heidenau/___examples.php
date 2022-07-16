<?php

/**
 * @author:Dennis Weyerstall
 */
get_header(); ?>

<main class="main" role="main">
    <section class="container">
      <div class="row">
        <div class="col-xl-4">
          <?php 
            $args = array(
              'class_icon' => 'fa-solid fa-bolt',
              'date_title' => 'vor 2 Wochen',
              'badge_title' => 'Rabauken',
              'badge_url' => '#',
              'main_title' => 'Lorem Ipsum',
              'main_url' => '#',
              'main_image' => 16,
            );
            do_action('organism_card_vertical', $args); 
          ?>
        </div>
        <div class="col-xl-4">
          <?php 
            $args = array(
              'class_ratio' => 'ratio-21x9',
              'class_title_tag' => 'h5',
              'class_icon' => 'fa-solid fa-play',
              'date_title' => 'vor 2 Wochen',
              'badge_title' => 'Rabauken',
              'badge_url' => '#',
              'main_title' => 'Lorem Ipsum',
              'main_url' => '#',
              'main_image' => 16,
            );
            do_action('organism_card_vertical', $args); 
          ?>
        </div>
        <div class="col-xl-3">
          <?php 
            $args = array(
              'class_sqaure_meta' => 'card-type-square-meta flex-column py-3 fs-6',
              'class_title_tag' => 'h5',
              'class_icon' => 'fa-solid fa-camera fs-4',
              'date_title' => 'Februar 2011',
              'badge_title' => 'Fotos',
              'badge_url' => '#',
              'main_title' => 'Lorem Ipsum',
              'main_url' => '#',
              'main_image' => 16,
              'meta_big_number' => 55,
              'meta_label' => 'Fotos',
            );
            do_action('organism_card_vertical', $args); 
          ?>
        </div>
        <div class="col-xl-6">
          <?php 
            $args = array(
              'badge_title' => 'Rabauken',
              'main_title' => 'Lorem Ipsum',
              'main_image' => 16,
              'main_text' => 'Ich bin ein Text mit Inhalt',
            );
            do_action('organism_card_horizontal', $args); 
          ?>
        </div>
        <div class="col-xl-6">
          <?php 
            $args = array(
              'date_title' => 'Februar 2011',
              'badge_title' => 'Fotos',
              'badge_url' => '#',
              'main_title' => 'Lorem Ipsum',
              'main_url' => '#',
              'main_image' => 16,
            );
            do_action('organism_card_overlay', $args); 
          ?>
        </div>
        <div class="w-100"></div>
        <div class="col-xl-4 mt-5">
          <?php 
            $args = array(
              'main_title' => 'Lorem Ipsum',
              'main_url' => '#',
              'button_label' => 'Zur Website',
            );
            do_action('organism_card_action', $args); 
          ?>
        </div>
        <div class="col-xl-2 mt-5">
          <?php 
            $args = array(
              'main_title' => 'Lorem Ipsum',
              'main_url' => '#',
              'main_image' => 16,
            );
            do_action('organism_card_vote', $args); 
          ?>
        </div>
        <div class="col-xl-3 mt-5">
          <?php 
            $args = array(
              'main_title' => 'Lorem Ipsum',
              'main_url' => '#',
              'main_text' => 'Lorem Ipsum',
            );
            do_action('organism_card_ratio_shadow', $args); 
          ?>
        </div>
        <div class="col-xl-3 mt-5">
          <?php 
            $args = array(
              'main_title' => 'Fragen?',
              'main_url' => '#',
              'main_text' => 'Lorem Ipsum',
              'main_thumbnail' => 17,
            );
            do_action('organism_card_ratio_action', $args); 
          ?>
        </div>
        <div class="w-100 mt-5"></div>
        <div class="col-xl-4">
          <?php 
            $args = array(
              'pre_title' => 'Seit',
              'main_title' => '1234 Jahren',
              'post_title' => 'Sportverein in Heidenau',
            );
            do_action('organism_hero_numbers', $args); 
          ?>
        </div>
        <div class="col-xl-3">
          <?php 
            $args = array(
              'main_title' => 'Lorem Ipsum',
              'main_url' => '#',
              'main_image' => 18,
              'product_price' => '12,95 €*',
            );
            do_action('organism_card_ratio_product', $args); 
          ?>
        </div>
        <div class="col-xl-4">

          <div class="card card-blank border-0 rounded-0 bg-light">
            <div class="card-body p-4">
              <div class="mb-4">
                <label for="prenameInput" class="form-label text-uppercase text-primary text-small fw-semibold mb-1">Dein Vorname</label>
                <input type="text" class="form-control form-control-lg rounded-0 border-light" id="prenameInput">
              </div>
              <div class="mb-4">
                <label for="postnameInput" class="form-label text-uppercase text-primary text-small fw-semibold mb-1">Dein Nachname</label>
                <input type="text" class="form-control form-control-lg rounded-0 border-light" id="postnameInput">
              </div>
              <div class="mb-4">
                <label for="mailInput" class="form-label text-uppercase text-primary text-small fw-semibold mb-1">Dein E-Mail-Adresse</label>
                <input type="email" class="form-control form-control-lg rounded-0 border-light" id="mailInput">
              </div>
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="membershipCheck">
                <label class="form-check-label text-primary text-small fw-semibold" for="membershipCheck">Ich bin bereits Vereinsmitglied beim TSV Heidenau</label>
              </div>
              <div class="row g-3 mb-4 align-items-center">
                <div class="col-auto">
                  <label for="spamCaptchaInput" class="form-label text-uppercase text-primary text-small fw-semibold mb-1">Sicherheitsabfrage</label>
                  <input type="text" class="form-control form-control-lg rounded-0 border-light" id="spamCaptchaInput">
                </div>
                <div class="col-auto">
                  <i class="fa-solid fa-rotate text-primary mt-4 fs-4"></i>
                </div>
                <div class="col-auto"></div>
              </div>
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="gdprCheck">
                <label class="form-check-label text-small lh-sm" for="gdprCheck">Hiermit erteile ich meine Einwilligung zur Newsletter-Bestellung und zur damit verbundenen Verarbeitung meiner personenbezogenen Daten. Mir ist bewusst, dass meine Einwilligung freiwillig erfolgt und jederzeit per E-Mail an <a href="mailto:info@tsv-heidenau.de" class="text-reset" title="#">info@tsv-heidenau.de</a> oder durch die Abbestellfunktion im Newsletter widerrufen werden kann. Die <a href="#" title="#" target="_blank" class="text-reset">Datenschutzerklärung</a> habe ich gelesen und verstanden.</label>
              </div>
              <button type="submit" class="btn btn-lg ls-2 btn-warning rounded-1-min d-block w-100 fw-bold text-uppercase text-dark fs-6" role="button">Jetzt anmelden</a>
            </div>
          </div>

        </div>

        <div class="w-100 mt-5"></div>

      </div>
    </section>

    <section class="mb-max mt-max">
      <div class="container">
        <div class="row row-cols-xl-5">
          <div class="col">
          <?php 
            $args = array(
              'main_title' => 'Familienbeitrag',
              'main_url' => '#',
              'membership_year_price' => '195 €',
              'membership_quarter_price' => 'Quartal 48,75 €',
              'membership_month_price' => 'Mtl. 16,25 €',
            );
            do_action('organism_card_membership', $args); 
          ?>
          </div>
          <div class="col">
          <?php 
            $args = array(
              'class_card_bg' => 'bg-primary',
              'class_badge_border_color' => 'border-secondary',
              'class_badge_text_color' => 'text-secondary',
              'class_trikot_shadow_color' => 'card-image-trikot--primary',
              'main_title' => 'Familienbeitrag',
              'main_url' => '#',
              'membership_year_price' => '195 €',
              'membership_quarter_price' => 'Quartal 48,75 €',
              'membership_month_price' => 'Mtl. 16,25 €',
            );
            do_action('organism_card_membership', $args); 
          ?>
          </div>
        </div>
      </div>
    </section>

    <!-- tabs -->
    <section class="bg-light pb-max">
      <nav class="bg-primary pt-3 nav-center">
        <div class="justify-content-center g-0 border-0 nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link text-uppercase fw-semibold rounded-0 border-0 active" id="nav-results-tab" data-bs-toggle="tab" data-bs-target="#nav-results" type="button" role="tab" aria-controls="nav-results" aria-selected="true">Ergebnisse</button>
          <button class="nav-link text-uppercase fw-semibold rounded-0 border-0" id="nav-shedule-tab" data-bs-toggle="tab" data-bs-target="#nav-shedule" type="button" role="tab" aria-controls="nav-shedule" aria-selected="false">Vereinsspielplan</button>
          <button class="nav-link text-uppercase fw-semibold rounded-0 border-0" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="false">Informationen</button>
        </div>
      </nav>
      <div class="tab-content container pt-max" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-results" role="tabpanel" aria-labelledby="nav-results-tab">Ergebnisse</div>
        <div class="tab-pane fade" id="nav-shedule" role="tabpanel" aria-labelledby="nav-shedule-tab">Vereinsspielplan</div>
        <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">Informationen</div>
      </div>
    </section><!-- tabs -->

    <!-- results etc -->
    <section class="bg-light pb-max pt-max">
      <div class="container">
        <div class="row">
          <div class="col-xl-2">
            <?php do_action('molecules_group_devider_title'); ?>
          </div>
          <div class="col-xl-10">
          <?php 
            $args = array(
              'match_league' => 'Kreisliga 1'
            );
            do_action('organism_card_reports', $args); 
          ?>
          </div>
        </div>
      </div>
    </section><!-- results etc -->

    <!-- training shedule -->
    <section class="bg-light pb-max">
      <div class="container">
        <div class="row">
          <div class="col-xl-10">
          <?php 
            $args = array(
              'times_day' => 'Dienstag',
              'times_time' => '19:00 - 20:30 Uhr',
            );
            do_action('organism_card_times', $args); 
          ?>
          </div>
        </div>
      </div>
    </section><!-- training shedule -->

    <!-- text split 2 col -->
    <section class="bg-light pb-max">
      <div class="container">
        <div class="card card-blank border-0 rounded-0">
          <div class="card-body p-5">
            <div class="row g-0">
              <div class="col-xl-4">
                <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti soluta amet sunt modi.</h2>
              </div>
              <div class="col-xl-6 offset-xl-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quibusdam ad in amet beatae! Laborum, aspernatur impedit. Quae magni animi nesciunt, cumque eum, quibusdam, mollitia eaque esse iste saepe ipsa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- text split 2 col -->

    <!-- team roaster -->
    <section class="bg-light pb-max">
      <div class="container">
        <div class="card card-blank border-0 rounded-0">
          <div class="card-body p-5">
            <div class="row g-0">
              <div class="col-xl-3">
                <h2 class="fw-bold">Spieler</h2>
              </div>
              <div class="col-xl-7 offset-xl-1">
                <div class="row g-2 row-cols-xl-4">
                  <div class="col">
                  <?php 
                    $args = array(
                      'player_number' => 1,
                      'player_prename' => 'Dennis',
                      'player_postname' => 'Weyerstall',
                      'player_position' => 'Torwart',
                    );
                    do_action('organism_card_roaster', $args); 
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- team roaster -->

    <!-- iframe -->
    <section class="bg-light pb-max">
      <div class="container">
        <div class="card card-blank border-0 rounded-0">
          <div class="card-body p-5">
            <div class="row g-0">
              <div class="col-xl-3">
                <h2 class="fw-bold">Tabelle</h2>
              </div>
              <div class="col-xl-7 offset-xl-1">
              <?php 
                $args = array(
                  'iframe_url' => 'https://getbootstrap.com/',
                );
                do_action('organism_iframe_ratio', $args); 
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- iframe -->

    <!-- video & quote -->
    <section class="bg-light pb-max">
      <div class="container">
        <div class="card card-blank border-0 rounded-0">
          <div class="card-body p-5">
            <div class="row g-0">
              <div class="col-xl-3">
                <h2 class="fw-bold">Video</h2>
              </div>
              <div class="col-xl-7 offset-xl-1">
                <?php 
                  $args = array(
                    'iframe_url' => 'https://www.youtube.com/embed/cXzGNEpIMyM',
                    'iframe_target' => 'YouTube',
                    'figcaption' => '34. Spieltag TSV Heidenau Sportplatz Siegtor von Max Mustermann'
                  );
                  do_action('organism_iframe_video_ratio', $args); 
                ?>
              </div>
            </div>

            <div class="row g-0 mt-5">
              <div class="col-xl-3">
                <h2 class="fw-bold">Quote</h2>
              </div>
              <div class="col-xl-7 offset-xl-1">
              <figure class="text-center blockquote-comment border border-3 border-primary py-4 px-5 mb-5 position-relative">
                <i class="fa-solid fa-quote-right text-warning fs-2 position-absolute top-0 start-50 translate-middle bg-white px-3"></i>
                <blockquote class="blockquote mb-0">
                  <p class="fst-italic text-primary">Er hörte leise Schritte hinter sich. Das bedeutete nichts Gutes. Wer würde ihm schon folgen, spät in der Nacht und dazu noch in dieser engen Gasse mitten im übel beleumundeten Hafenviertel?</p>
                </blockquote>
                <figcaption class="blockquote-footer fw-semibold position-absolute top-100 start-50 translate-middle my-0 bg-white px-3">
                  Max Mustermann
                </figcaption>
              </figure>

              <figure class="text-center blockquote-comment border border-3 border-primary py-4 mb-5 px-5 position-relative">
                <i class="fa-solid fa-circle-info text-warning fs-2 position-absolute top-0 start-50 translate-middle bg-white px-3"></i>
                <blockquote class="blockquote mb-0 fs-6">
                  <p class="fst-italic text-primary">Er hörte leise Schritte hinter sich. Das bedeutete nichts Gutes. Wer würde ihm schon folgen, spät in der Nacht und dazu noch in dieser engen Gasse mitten im übel beleumundeten Hafenviertel?</p>
                </blockquote>
              </figure>
              </div>
            </div>

            <div class="row g-2 row-cols-xl-4 mt-5">
            <?php
              $i = 1;
              while ($i <= 5) {
                $i++;
            ?>
              <div class="col">
              <?php 
                $args = array(
                  'lightbox_url' => '#',
                  'image_id' => 16,
                  'image_alt' => 'Lorem Ipsum',
                );
                do_action('organism_image_gallery', $args); 
              ?>
              </div>
            <?php } ?>
            </div>

            <?php do_action('organism_share_footer'); ?>

          </div>
        </div>
      </div>
    </section><!-- video & quote -->

    <section class="bg-dark bg-pattern-zigzag pt-max text-white">
      <div class="container">
        <h1 class="text-reset fw-bold h-ultra lh-1">Unsere <br>Sportangebote</h1>

        <nav class="navbar navbar-dark ps-0 pe-0 pb-0 pt-max">
          <ul class="nav nav-border me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Übersicht</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ansprechpartner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mediencenter</a>
            </li>
          </ul>
          <ul class="nav nav-icon mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-clock-rotate-left me-2"></i>Platzbelegung</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-archway me-2"></i>Hallenzeiten</a>
            </li>
          </ul>
        </nav>
      </div>
    </section>

    <section class="bg-white pt-max pb-max">
      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <p><a class="fw-extrabold text-uppercase text-decoration-none text-primary" href="#" role="button">
              <span class="badge p-0 bg-transparent ls-0"><i class="fa-solid text-primary fa-arrow-left-long"></i></span>
              Zurück zur Übersicht
            </a></p>
            <p class="text-primary mb-0">Inhalte unvollständig oder Fehlerhafte Links? Schreib eine E-Mail direkt an unseren <a href="#" title="">Support</a>.</p>
          </div>
          <div class="col-xl-6 offset-xl-2 d-flex justify-content-end">
            <div class="hstack gap-3 align-items-baseline">
              <a class="btn btn-lg btn-lg-x ls-2 btn-primary rounded-1-min d-block fw-bold text-uppercase text-white fs-6" href="#" role="button">
                Zum Sportbereich Badminton
              </a>
              <a class="btn btn-lg btn-lg-x ls-2 btn-primary rounded-1-min d-block fw-bold text-uppercase text-white fs-6" href="#" role="button">
                Zum Sportbereich Gymnastik
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark bg-pattern-zigzag pt-max pb-max text-white">
      <div class="container">
        <h1 class="text-reset fw-bold h-ultra lh-1 mb-5">1. Herren</h1>
        <div class="row">
          <div class="col-xl-7">
            <figure class="ratio ratio-16x9 obj-fit-image mb-0">
              <img src="http://localhost:8000/wp-content/uploads/pexels-pixabay-46792.jpg" alt="">
            </figure>
          </div>
          <div class="col-xl-3">
            <div class="card card-blank shadow-mask shadow-mask-secondary border-0 rounded-0 bg-white ratio ratio-84 mb-4">
              <figure class="mb-1 px-3 pb-4 position-absolute top-0 start-50 translate-middle-x d-flex justify-content-center">
                <img class="h-100 d-block" src="http://localhost:8000/wp-content/uploads/tsv-heidenau-trikot-fussball-herren.png">
              </figure>
              <div class="card-footer border-0 bg-transparent text-center pb-4 bottom-0 d-flex flex-column justify-content-end">
                <p class="mb-0 fw-bold text-primary text-uppercase">Home-Kit 21/2022</p>
              </div>
            </div>
            <div class="card card-blank shadow-mask shadow-mask-secondary border-0 rounded-0 bg-white ratio ratio-44 mb-4"></div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="bg-primary py-5">
      <div class="container">
        <div class="row">
          <div class="col-xl-11">

            <div class="row row-cols-xl-4">
              <div class="col">
                <a href="" title="" class="card card-blank text-decoration-none border-white-25 bg-transparent rounded-0 h-100">
                  <div class="card-body">
                    <span class="badge border border-warning mb-3 rounded-0 bg-warning text-primary text-uppercase text-mini-l fw-bold text-decoration-none">Jetzt</span>
                    <p class="fs-4 text-white text-uppercase fw-semibold lh-sm mb-0">D-Jugend Fussballtraining</p>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="" title="" class="card card-blank text-decoration-none border-white-25 bg-transparent rounded-0 h-100">
                  <div class="card-body">
                    <span class="badge border border-white mb-3 rounded-0 bg-white text-primary text-uppercase text-mini-l fw-bold text-decoration-none">17:30 Uhr</span>
                    <p class="fs-4 text-white text-uppercase fw-semibold lh-sm mb-0">Eltern Kind-Yoga Lorem Ipsum</p>
                  </div>
                </a>
              </div>
            </div>

          </div>
          <div class="col-xl-1">
            <a href="#" title="#" role="button" class="card card-blank border-0 rounded-0 bg-white-10 text-white text-decoration-none h-100">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <span class="d-block fw-bold fs-1 lh-1 mb-1">05</span>
                <span class="d-block fw-bold text-mini-l lh-1 text-uppercase">Weitere</span>
                <span class="text-reset fw-extrabold d-block text-uppercase text-decoration-none mt-3">
                  Mehr
                  <span class="badge p-0 bg-transparent ls-0"><i class="fa-solid fa-arrow-right-long"></i></span>
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <?php
      wp_enqueue_style('swiper-style');
      wp_enqueue_script('swiper-script');
    ?>
    <section class="bg-dark bg-pattern-zigzag py-5">
      
      <div class="swiper js-card-swiper card-swiper-dark">
        <div class="swiper-wrapper mb-5">
          <?php
            $i = 1;
            while ($i <= 5) {
              $i++;
          ?>
          <div class="swiper-slide swiper-slide-card">
            <div class="card card-blank border-0 rounded-0">
              <div class="card-body">
                <p>Lorem</p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="swiper-pagination-wrap d-flex align-items-center position-absolute bottom-0 text-white">
          <div class="swiper-button-prev position-relative me-4"></div>
          <div class="swiper-button-next position-relative me-5"></div>
          <div class="swiper-fraction-current fw-semibold text-mini-l me-2" id="fraction-current">01</div>
          <div class="swiper-pagination position-relative"></div>
          <div class="swiper-fraction-total fw-semibold text-mini-l ms-2" id="fraction-total"></div>
        </div>
      </div>

    </section>
    <?php add_action('wp_print_footer_scripts', function (){ ?>
    <script>
      const zeroPad = (num, places) => String(num).padStart(places, '0')
      const swiperSlides = document.querySelectorAll(".swiper-slide");
      const swiperFractionCurrent = document.getElementById("fraction-current");
      const swiperFractionTotal = document.getElementById("fraction-total");
      swiperFractionTotal.textContent = zeroPad(swiperSlides.length, 2);
      const swiper = new Swiper(".js-card-swiper", {
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

    <section class="bg-dark py-5"></section>
    <section class="bg-primary py-5"></section>
    <section class="bg-white bg-pattern-squares py-5"></section>
    <section class="bg-dark bg-pattern-zigzag py-5"></section>
    <section class="bg-light py-5"></section>
  </main>

<?php get_footer(); ?>