 <?php
 $posts= query_posts(array(

  'posts_per_page' => 4,
  'suppress_filters' => true
));
?>
<div class="container posts-container">
    <div class="row">
    <div class="col-sm-12 col-md-7">

           <?php foreach($posts as $post):?>
            <?php setup_postdata($post);?>
        <div class="PostContent">  
        <div class="PostImageContainer"><?php the_post_thumbnail();?></div>
            
            <section class="PostContentArticle">
                <div class="PostContentArticle_meta">
                <section class="PostContentArticle_meta_category">
                    <span><a href="<?php the_permalink();?>"><?php echo the_category();?></a></span>
                    </section>
                <section class="PostContentArticle_meta_date">
                    <i class="far fa-clock"></i>
                    <span class="post_date"><?php echo date("F j, Y, g:i a"); ?></span>
                    </section>
                </div>
                <h2 class="PostContentArticle_header"><a href="<?php site_url();?>"><?php the_title();?></a></h2>
                
                <p class="post_excerpt"><a href="<?php the_permalink();?>"><?php echo get_the_excerpt();?></a></p>
            </section>
        </div>

        <?php endforeach;

        wp_reset_postdata();
        ?>

<div class="pagination">
        <!---pagination--------->
<?php echo get_the_posts_pagination(); ?>
  <!---------------------pagination---->

</div>
        </div>    
     <!------
        =====================================================postscol==============================
    --------->
       <!---------widgets------------->
    <div class="col-sm-12 col-md-4">
 
          <?php get_sidebar();?>

    </div>  
<!---------------------------------->

        </div>
        </div>
        
