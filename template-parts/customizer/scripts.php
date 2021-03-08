<?php
add_action('wp_enqueue_scripts','AddSiteStyles');
function AddSiteStyles(){
	

	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.css','1.0.0',true,'all');
	wp_enqueue_style('sitestyle',get_template_directory_uri().'/style.css','',true,'all');
	wp_enqueue_style('media-style',get_template_directory_uri().'/assets/css/media.css','1.0.0',true,'all');
	wp_enqueue_style('news-css',get_template_directory_uri().'/assets/css/news.css','1.0.0',true,'all');
			wp_enqueue_style('slick',get_template_directory_uri().'/assets/css/slick.css','1.0.0',true,'all');
	wp_enqueue_style('slick-theme',get_template_directory_uri().'/assets/css/slick-theme.css','1.0.0',true,'all');
wp_enqueue_style('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');

}

add_action('wp_enqueue_scripts','AddSiteScripts');

function AddSiteScripts(){
wp_enqueue_script('jquery-js',get_template_directory_uri().'./assets/js/jquery.js',array(),false);
wp_enqueue_script('news',get_template_directory_uri().'./assets/js/acmeticker.min.js',array(),false);
wp_enqueue_script('slick',get_template_directory_uri().'./assets/js/slick.min.js',array(),false);
wp_enqueue_script('bootstrap-js',get_template_directory_uri().'./assets/js/bootstrap.js',array(),false);

wp_enqueue_script('main-js',get_template_directory_uri().'./assets/js/main.js',array(),false);
}
?>