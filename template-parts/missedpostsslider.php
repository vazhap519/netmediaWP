<?php $posts= get_posts(array(

  'posts_per_page' => 6,
  'orderby'=>'date',
  'suppress_filters' => true,

));?>
<div class="container-fluid missedContainer">
	<div class="row missed">   
        <div class="col-sm-12 col-lg-10 missedheader">
            <div class="hdWidgets">
                <h2 class="widgetshetsheads oldpostsheader ">გამოტოვებული პოსტები</h2>
                            
             </div>
    </div>
  <div class="col-sm-12 col-lg-10 missedcontent">
  		<?php foreach ($posts as $post) {

  			  setup_postdata($post);?>

      <div class="missedcontentD" >
      		<img src="<?php the_post_thumbnail_url();?>" class="missedcontentD_thumbnail">
          <div class="missedcontentD_sub">
      		<span><?php echo date("F j, Y"); ?></span>
      		<div><?php the_category()?></div>
      		<h3><?php the_title();?></h3>
        </div>
      </div>
         <?php }

        wp_reset_postdata();
        ?>
  </div>

        </div>
</div>