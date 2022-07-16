<?php

/**
 * @author:Dennis Weyerstall
 */
get_header(); 

/**
 * set main tag - start
 */
do_action('molecules_main_start');

if(is_search()){
  /**
   * search results
   */
  do_action('template_search_results');
}else{
  /**
   * modulator
   */
  do_action('template_modulator');
}

/**
 * set main tag - end
 */
do_action('molecules_main_end');

get_footer(); 
?>