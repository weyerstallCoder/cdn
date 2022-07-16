<section class="bg-primary py-3">
  <div class="container">
    <div class="row">
      <div class="col-xl-1 d-flex align-items-center justify-content-end text-end">
        <p class="mb-0 text-white fw-bold ptag-base text-uppercase lh-sm">Aktuelle <br>Spiele:</p>
      </div>

      <?php /*
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
      */ ?>

      <div class="col-xl-8">
        <div class="row row-cols-xl-3 g-3 js-render-matches">
          <div class="col d-none">
            <div class="card">
              <div class="card-body">
                <div class="d-flex">
                  <div class="me-auto">
                    <span class="badge border border-secondary mb-3 rounded-0 bg-transparent text-secondary text-uppercase text-mini-l fw-bold text-decoration-none"></span>
                  </div>
                  <div>
                    <span class="shadow-mask shadow-mask-md text-primary bg-white shadow-mask-secondary px-3 fw-bold py-1 fs-6 text-nowrap"></span>
                  </div>
                </div>
                <p class="fs-5 text-white fw-semibold lh-sm mb-0"></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 position-relative">
        <?php do_action('template_tab_shedule'); ?>
      </div>
    </div>
  </div>
</section>

<?php
wp_enqueue_script('pure-js'); 
add_action('wp_print_footer_scripts', function (){ ?>
<script>
(function() {
  fetch("https://opensheet.elk.sh/1-MEfmGPsoe2guhNn1asiWnyye6HGJQ7EMXbZEAVBApE/tsv-heidenau-api")
    .then((res) => res.json())
    .then((data) => {

      matchData = data.slice(0, 3);

      directive = {
        '.col':{
          'match<-':{
            '@class':function(a){
              return 'col';
            },
            '.card @class':function(a){
              if(a.item.home == '#N/A'){
                return 'card card-blank border-0 rounded-0 bg-white-10 text-white text-decoration-none h-100';
              }
              return 'card card-blank text-decoration-none border-white-25 bg-transparent rounded-0 h-100';
            },
            'p':function( a ){
              if(a.item.home == '#N/A'){
                return 'Keine Spiele für <br>diesen Zeitraum';
              }
              return a.item.home+' <br>'+a.item.guest;
            },
            '.badge':function(a){
              if(a.item.home == '#N/A'){
                return 'Hinweis';
              }
              $dateString = a.item.shedule.split(",").pop();
              return $dateString.split(' -')[0];
            },
            '.shadow-mask':function(a){
              $timeString = a.item.shedule.split("- ").pop();
              return $timeString.split(' |')[0];
            },
            '.shadow-mask @class+':function(a){
              if(a.item.home == '#N/A'){
                return ' d-none';
              }
            },
          },
          filter:function(a){
            console.log(a.item);
            if((a.item.home == 'spielfrei') || (a.item.guest == 'spielfrei')){
              return false;
            }
            /*if(a.item.home == '#N/A'){
              return false;
            }*/
            if(a.item.guest !== undefined){
              return true;
            }
            return false;
          }
        }
      };

      jQuery('.js-render-matches').render(matchData, directive);
    });
})();
</script>
<?php }) ?>