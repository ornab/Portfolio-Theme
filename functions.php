<?php

include_once ('inc/Theme-files.php');
include_once ('inc/theme-supports.php');
include_once ('inc/custom-post.php');

function my_theme_register_menu() {
    register_nav_menu( 'main-menu', 'Main Menu');
}
add_action('init', 'my_theme_register_menu');


?>