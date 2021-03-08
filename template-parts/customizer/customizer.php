<?php 

function themeCustomizer($wp_customize){
	$wp_customize->add_section('banneroptens',[
		'title'=>'change',
		'description'=>'change header baner',
	]);
	$wp_customize->add_setting('bannerChange',[
		'default'=>get_bloginfo('template_directory').'../assets/images/banner.jpg'
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'bannerchange',[
		'label'=>'custombaner',
		'description'=>'your advertise here',
		'section'=>'banneroptens',
		'settings'=>'bannerChange'
	]));

/**
===========================================================================
								BANNER CUSTOMIZER END
===========================================================================
**/

 $wp_customize->add_section('socialMedia',array(
	'title'=>__('social icons','netmedia')
));
 $wp_customize->add_setting('facebook');

 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'facebook', array(
 	'label' => 'facebook',
 	'section'=>'socialMedia',
 	'type'=>'url'
 )));
 $wp_customize->add_setting('instagram');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'instagram', array(
 	'label' => 'instagram',
 	'section'=>'socialMedia',
 	'type'=>'url'
 )));
 $wp_customize->add_setting('linkedin');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'linkedin', array(
 	'label' => 'linkedin',
 	'section'=>'socialMedia',
 	'type'=>'url'
 )));

$wp_customize->add_setting('gplus');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'gplus', array(
 	'label' => 'gplus',
 	'section'=>'socialMedia',
 	'type'=>'url'
 )));

$wp_customize->add_setting('pintarest');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pintarest', array(
 	'label' => 'pintarest',
 	'section'=>'socialMedia',
 	'type'=>'url'
 )));

$wp_customize->add_setting('snapchat');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'snapchat', array(
 	'label' => 'snapchat',
 	'section'=>'socialMedia',
 	'type'=>'url'
 )));
$wp_customize->add_setting('mail');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'mail', array(
 	'label' => 'mail',
 	'section'=>'socialMedia',
 	'type'=>'url'
 )));


/**
===========================================================================
								SOCIAL MEDIA CUSTOMIZER END
===========================================================================
**/


$wp_customize->add_section('missedposts',array(
	'title' => __('Posts_thumbnails')));
$wp_customize->add_setting('Posts_thumbnails');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'Posts_thumbnails',
 array(
 	'label' =>  'Posts_thumbnails',
 	'settings'=>'Posts_thumbnails',
 	'section'=>'missedposts',
 	'type'=>'image'
)));

}
add_action('customize_register','themeCustomizer');