<?php

/**
 * @author:Dennis Weyerstall
 */
get_header(); 

$team_home = get_field('match_report_home_gr');
$team_guest = get_field('match_report_guest_gr');

/**
 * start single container
 */
$args = array(
  'intro' => 'organism_hero_result',
  'main_title' => get_the_title(),
  'badge_title' => 'Spielbericht',
  'match_result' => get_field( 'match_report_result' ),
  'match_guest' => $team_guest['match_report_guest_flag'],
  'match_home' => $team_home['match_report_home_flag'],
  'team_home' => $team_home['match_report_home_clubname'],
  'team_home_short' => $team_home['match_report_home_clubname_short'],
  'team_guest' => $team_guest['match_report_guest_clubname'],
  'team_guest_short' => $team_guest['match_report_guest_clubname_short'],
);
do_action('molecules_single_content_start', $args);

/**
 * start single container
 */
$args = array(
  'back_url' => get_post_type_archive_link('spielbericht'),
  'back_title' => 'Zurück zur Übersicht der Spielberichte',
  'addons' => array(
    'single-more-reports-loop',
  ),
);
do_action('molecules_single_content_end', $args);

get_footer(); ?>