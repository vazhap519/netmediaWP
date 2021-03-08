<?php 
add_action('after_setup_theme','Nt_themeSupports');
function Nt_themeSupports(){
	add_theme_support( 'title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-header');
	 add_theme_support('html5',array('search-form'));
	
	add_theme_support('post-formats',
		 array(
			'aside',
			'chat',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',

		  ));

}




function register_navwalker(){
	require_once get_template_directory() . './assets/walker/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


?>