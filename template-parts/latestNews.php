<?php
/*
 Template Name: latestnews
*/
 ?>
 <?php 
          $posts = get_posts( array(
  'numberposts' => 3,
  'category'    => 0,
  'orderby'     => 'date',
  'order'       => 'DESC',
  'include'     => array(),
  'exclude'     => array(),
  'meta_key'    => '',
  'meta_value'  =>'',
  'post_type'   => 'post',
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

 ?>
 <?php get_header();?>
 <!---
  ===================================================================================================
                                                        TOP WIDGETS AREA  COLS START
  ===================================================================================================
  --->
        <div class="col-sm-12 col-md-5 col-lg-5">
                             <!---
  ===================================================================================================
                                                         SIDEBAR  WIDGETS AREA  START
  ===================================================================================================
  --->
                        <div class="sidebarWidgets">
                <!---
  ===================================================================================================
                                                         SIDEBAR NEWS WIDGET   START
  ===================================================================================================
  --->
                          <div class="newsWidgetsHeader">
                           <ul class="newsesTabs">
                             <li id="latest"><i class="far fa-clock"></i><span>უკანასკნელი სიახლეები</span></li>
                               <li id="popular"><i class="fas fa-fire"></i><span>პოპულარული სიახლეები</span></li>

                           </ul>
                                 <?php 
                            foreach( $posts as $post ){
                                  setup_postdata($post);
                                  ?>
                           <section class="newstabsContent">

                            <?php the_post_thumbnail();?>
                                <section class="newstabsContentmeta">
                                  <span class="newstabsContentcategory"><?php the_category();?></span>
                                  <p class="newstabsContentexcerpt">
                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                  </p>
                                </section>
                            </section>
                            
                            <?php }
                            wp_reset_postdata();?>
                          </div>
                            
                                            <!---
  ===================================================================================================
                                                         SIDEBAR NEWS  WIDGET  END
  ===================================================================================================
  --->
                            
                        </div>
                   <!---
  ===================================================================================================
                                                         WIDGETS AREA  END
  ===================================================================================================
  --->

            </div>
                   <!---
  ===================================================================================================
                                                         WIDGETS AREA  COL END
  ===================================================================================================
  --->
