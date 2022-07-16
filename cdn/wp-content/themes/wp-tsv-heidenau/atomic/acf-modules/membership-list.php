<?php if ( have_rows( 'membership_list_rp' ) ) : ?>
<section class="mb-max mt-max container">
  <h2 class="fw-bold mb-3 h1">Übersicht unserer Zusatzbeiträge</h2>

  <table class="table">
    <thead class="fs-5 text-primary">
      <tr>
        <th scope="col">Vereinsbeiträge</th>
        <th scope="col">Jahresbeitrag</th>
        <th scope="col">Quartal</th>
        <th scope="col">Monatsbeitrag</th>
      </tr>
    </thead>
    <tbody class="fs-3 fw-semibold text-default border-top-0">
    <?php while ( have_rows( 'membership_list_rp' ) ) : the_row(); 
      $year_price = 0;
      $quarter_price = 0;
      $month_price = 0;
      if(get_sub_field( 'membership_list_price_year' )){
        $year_price = number_format(get_sub_field( 'membership_list_price_year' ), 2,',','');
        $quarter_price = number_format(intval(get_sub_field( 'membership_list_price_year' )) / 4, 2,',','');
        $month_price = number_format(intval(get_sub_field( 'membership_list_price_year' )) / 12, 2,',','');
      }
      if(get_sub_field( 'membership_list_price_month' )){
        $month_price = number_format(get_sub_field( 'membership_list_price_month' ), 2,',','');
        $quarter_price = number_format((get_sub_field( 'membership_list_price_month' ) * 12) / 4, 2,',','');
        $year_price = number_format(get_sub_field( 'membership_list_price_month' ) * 12, 2,',','');
      }
    ?>
      <tr>
        <th class="text-primary"><?php the_sub_field( 'membership_list_type' ); ?></th>
        <td><?php echo $year_price; ?> €</td>
        <td><?php echo $quarter_price; ?> €</td>
        <td><?php echo $month_price; ?> €</td>
      </tr>
    <?php endwhile; ?>
    </tbody>
  </table>

  <figure class="text-center blockquote-comment border border-3 border-primary py-5 mb-5 mt-max px-5 position-relative">
    <i class="fa-solid fa-circle-info text-warning fs-2 position-absolute top-0 start-50 translate-middle bg-white px-3"></i>
    <blockquote class="blockquote mb-0 fs-5">
      <p class="fst-italic text-primary">Schüler und Auszubildende über 18 Jahre zahlen 70,00 € / Jahr. Kinder unter 4 Jahren bleiben vereinsbeitragsfrei, soweit mindestens ein Elternteil aktives Vereinsmitglied ist. Bei bestimmten Konstellationen von mehreren Zusatzbeiträgen wird ein maximal Zusatzbeitrag erhoben.</p>
    </blockquote>
  </figure>

</section>
<?php endif; ?>