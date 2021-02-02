<?php
add_theme_support('title-tag');

function wp_top_menu(){
  register_nav_menu('header-top', __('Header Main Menu'));
}
add_action('init', 'wp_top_menu');

 ?>
