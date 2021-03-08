<?php 
add_action('init','Nt_menus');
function Nt_menus(){
	register_nav_menus(
		 array(
		 	'Header_Menu' =>__('Header_Menu'),
		 	'Footer_Menu'=>__('Footer_Menu'),
		));
}
?>