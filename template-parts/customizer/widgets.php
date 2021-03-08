<?php
function themename_widgets_init() {
    register_sidebar( array(
             'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="oldPosts %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="hdWidgets"><h2 class="widgetshetsheads oldpostsheader">',
        'after_title'   => '</h2></div>',
     
    ) );
 
    }
    add_action( 'widgets_init', 'themename_widgets_init' );
?>