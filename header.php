<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
  
    <meta charset="utf-8">
  <?php wp_head();?>

</head>
<body>

<div class="container-fluid fullwrapper">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
        <form>
       <input class="form-control mr-sm-2 searchfield" type="search" placeholder="Search" aria-label="Search" name="s" value="<?php echo get_search_query();?>">
        </form>
      </div>

    </div>
  </div>
</div>
<!---
  ===================================================================================================
                                                           HEADERSTART
  ===================================================================================================
  --->
    <header id="header">
    <div class="top">
        <div class="DT">
        <div class="date"><?php echo date(' Y-m-d ');?></div>
            <div class="time"><?php echo date(' H:i:s');?></div>
        </div>
        <ul class="languages">
             <div class="default_language">
                <li  class="languages_children_default"><a href=""><img src="assets/images/icons/georgia.png">
                    <span class="language_text"> Ge</span>
                    </a></li>
            </div>

            <ul class="lagugages_sub_menu">
            <li class="languages_children"><a href=""><img src="assets/images/icons/georgia.png">
                <span class="language_text"> Ge</span>
                </a></li>
        <li  class="languages_children"><a href=""><img src="assets/images/icons/russia.png">
            <span class="language_text"> Ru</span>
            </a></li>
        <li  class="languages_children"><a href=""><img src="assets/images/icons/united-states.png">
            <span class="language_text"> En</span>
            </a></li>

            </ul> 


        </ul>
        <div class="SocialIcons">
            <a href="<?php echo get_theme_mod('facebook');?>"><img src="<?php echo get_template_directory_uri();?>./assets/images/icons/facebook.svg"></a>
                <a href="<?php echo get_theme_mod('instagram');?>"><img src="<?php echo get_template_directory_uri();?>./assets/images/icons/instagram.svg"></a>
                  <a href="<?php echo get_theme_mod('linkedin');?>"><img src="<?php echo get_template_directory_uri();?>./assets/images/icons/linkedin.svg"></a>
                  <a href="<?php echo get_theme_mod('gplus');?>"><img src="<?php echo get_template_directory_uri();?>./assets/images/icons/google-plus.svg"></a>
                  <a href="<?php echo get_theme_mod('pintarest');?>"><img src="<?php echo get_template_directory_uri();?>./assets/images/icons/pinterest.svg"></a>
                  <a href="<?php echo get_theme_mod('snapchat');?>"><img src="<?php echo get_template_directory_uri();?>./assets/images/icons/snapchat.svg"></a>
                  <a href="<?php echo get_theme_mod('mail');?>"><img src="<?php echo get_template_directory_uri();?>./assets/images/icons/mail.svg"></a>
        </div>
        </div>
        
    <div class="middleHeader">
        <div class="middleHeaderContent" style="background-image: url(<?php header_image();?>);">
         <div class="adverticeBanner">
           <a href="" class="adverticeBannerhref"><img src="<?php echo get_theme_mod('bannerChange');?>" class="headerbaner"></a>
         </div>
        </div>
        </div>
        <!----
========================================================================================================================
                              middleheader end
========================================================================================================================
--->
        
        
        
        
        
        
        
                <!----
========================================================================================================================
                              bottomheader start
========================================================================================================================
--->
        
        
        
        <div class="BottomHeader">
        <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="<?php site_url('/');?>">wwww.netmedia.ge</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">

      <?php wp_nav_menu(array(
'theme_location'=>'Header_Menu',
'depth'=>2,
'container'=>'div',
'container_class'=>'collapse navbar-collapse',
'container_id'=>'netmediaheader_menu',
'menu_class'=>'navbar-nav',
'fallback_cb'=>'class-wp-bootstrap-navwalker::falback',
'walker'=>new WP_Bootstrap_Navwalker()


));?>
<?php get_search_form();?>
  
  </div>
            </nav>
        </div>
    
                <!----
========================================================================================================================
                              bottomheader end
========================================================================================================================
--->
        
    </header>
<!---
  ===================================================================================================
                                                          HEADER END
  ===================================================================================================
  --->
    </div>
    <!---
  ===================================================================================================
                                                          HEADER container END
  ===================================================================================================
  --->