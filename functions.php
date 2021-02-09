<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function wp_top_menu(){
  register_nav_menu('header-top', __('Header Main Menu'));
}
add_action('init', 'wp_top_menu');





 ?>
