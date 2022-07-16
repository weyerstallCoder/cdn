jQuery(window).load(function() {
  jQuery('body').removeClass('preload');
});

jQuery(function() {
  
  /** searchbar on */
  $nav_class = 'nav--open';
  $hide_class = 'd-none';
  jQuery('a[href="#js-trigger-search"]').on('click', function(e){
    e.preventDefault();
    jQuery('#header').addClass($nav_class);
  });

  /** searchbar off */
  jQuery('#js-close-searchbar').on('click', function(e){
    e.preventDefault();
    jQuery('#header').removeClass($nav_class);
  });

  /** submitting searchform */
  jQuery( "#wp-searchform" ).submit(function( event ) {
    jQuery('.searchbar-spinner').removeClass($hide_class);
    jQuery('.fa-magnifying-glass').addClass($hide_class);
  });

});