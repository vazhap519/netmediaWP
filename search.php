<?php get_header();?>
<div class="container posts-container">
    <div class="row">
    <div class="col-sm-12 col-md-7">
<?php if(have_posts()):
    while (have_posts()):
        the_post();?>
      
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
                
                <p class="post_excerpt"><a href="<?php the_permalink();?>"><?php the_content();?></a></p>
            </section>
        </div>

    
<?php endwhile; endif;?>
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
        
    <?php get_footer();?>