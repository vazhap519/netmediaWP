<?php
add_filter( 'excerpt_length', function(){
	return 15;
});



add_filter( 'excerpt_more', 'readMore' );
function readMore( $more ){
	$more='<a href="'.get_permalink().' " class="slider_link btn">Read More</a>';
	

	return  $more;
}


?>