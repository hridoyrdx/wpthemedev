<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function wp_top_menu(){
  register_nav_menu('header-top', __('Header Main Menu'));
}
add_action('init', 'wp_top_menu');

function the_breadcrumb() {
  echo '<ul id="crumbs">';
if (!is_home()) {
  echo '<li><a href="';
  echo get_option('home');
  echo '">';
  echo 'Home';
  echo "</a></li>";
  if (is_category() || is_single()) {
      echo '<li>';
      the_category(' </li><li> ');
      if (is_single()) {
          echo "</li><li>";
          the_title();
          echo '</li>';
      }
  } elseif (is_page()) {
      echo '<li>';
      echo the_title();
      echo '</li>';
  }
}
elseif (is_tag()) {single_tag_title();}
elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
echo '</ul>';
}