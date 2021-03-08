<?php
/*
 Template Name: Content
*/
 ?>
 <?php get_header('page');?>
 <?php 
 $posts= get_posts(array(

   'numberposts' => 5,
   'suppress_filters' => true
));
?>
   <!---
  ===================================================================================================
                                                          LATEST NEWS START
  ===================================================================================================
  --->
    <div class="container-fluid breakingNewses">

<div class="acme-news-ticker">
  <div class="acme-news-ticker-label">უნანასკნელი სიახლეები</div>
  <div class="acme-news-ticker-box">
    <ul class="HotNewses">
      <?php foreach ($posts as $post):
        setup_postdata($post);?>
      
      
      <li>
        <a href="<?php site_url();?>"><?php the_title();?></a>
      </li>
      <?php endforeach;
      wp_reset_postdata();?>
    </ul>
  </div>
  <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
    <span class="acme-news-ticker-arrow acme-news-ticker-prev"></span>
    <span class="acme-news-ticker-pause"></span>
    <span class="acme-news-ticker-arrow acme-news-ticker-next"></span>
  </div>
</div>

        </div>


<!---
  ===================================================================================================
                                                          LATEST NEWS END
  ===================================================================================================
  --->


    <div id="slider" class="container">
        <div class="row">
                  <!---
  ===================================================================================================
                                                          POSTS SLIDER COLS  START
  ===================================================================================================
  --->
        <div class="col-sm-12 col-md-7">
          <!---
  ===================================================================================================
                                                          POSTS SLIDER  START
  ===================================================================================================
  --->

            <div class="post-slider">
            <?php foreach ($posts as $post) {
              setup_postdata($post);?>
            
        <div class="post_slider_content">
           <?php the_post_thumbnail();?>
           <div class="post_slider_content_sub">
            <h1 class="slider_header"><?php the_title();?></h1>
             <span class="slider_Category">
                  <?php the_category($separator=' ');?></a>
               </span>
                                      <p><?php echo get_the_excerpt();?></p>
          
            <?php  get_the_excerpt($more);?>
               </div>
            </div>
       
            <?php }
              wp_reset_postdata();?>
       
        </div>
                <!---
  ===================================================================================================
                                                          POSTS SLIDER  END
  ===================================================================================================
  --->
            
            </div>

        <!---
  ===================================================================================================
                                                          POSTS SLIDER COLS  END
  ===================================================================================================
-->
            <?php get_template_part('template-parts/latestNews');?>
        </div>

                   <!---
  ===================================================================================================
                                                         WIDGETS  AREA && slider ROW END
  ===================================================================================================
  --->



<?php get_template_part('template-parts/customposts');?>

</div>






 <?php get_template_part('template-parts/missedpostsslider');?>





         
            
<?php get_footer();?>