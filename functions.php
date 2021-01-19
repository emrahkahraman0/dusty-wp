<?php 

//Guteberg-Disable
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
return false;
}

//Logo Ekleme
add_theme_support( 'custom-logo', array(
	'height'      => 42,
	'width'       => 136,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

//Admin-Bar Kaldırma
function remove_admin_bar() {
    show_admin_bar(false);
}

add_action('after_setup_theme', 'remove_admin_bar');

function register_my_menu() {
    register_nav_menu('primary',__('Primary Menu'));
}
add_action('init', 'register_my_menu');

?>