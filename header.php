<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <link href="//www.google-analytics.com" rel="dns-prefetch">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="utf-8" />

    <?php if (is_home()): ?>
      <title>Music4deejays </title>
      <meta content="<?php bloginfo('description'); ?>" name="description" />
    <?php else: ?>
      <title><?php the_title(); ?> - <?php the_field('author'); ?> - Music4deejays</title>
      <meta content="<?php the_title(); ?> - <?php the_field('author'); ?> - Music4deejays" />
      <meta name="keywords" content="<?php the_tags(' ',' ',' '); ?>" />
    <?php endif; ?>

    <link rel="publisher" href="https://plus.google.com/111741852414956814118"/>

    <!--     
     <link rel="publisher" href="https://plus.google.com/b/111741852414956814118/111741852414956814118/"/>
     <meta property="og:locale" content="es_ES" />
     <meta property="og:type" content="website" />
     <meta property="og:title" content="Check this! via @Music4deejays" />
     <meta property="og:url" content="http://music4deejays.com/clarity-spear-go-hard-ramy-morsy-mashup-sick-individuals-zedd-ftampa-steve-forest-vs-quintino/" />
     <meta property="og:site_name" content="MUSIC4DEEJAYS" />
     <meta property="article:publisher" content="https://www.facebook.com/music4deejays" />
     <meta property="fb:admins" content="130729293804790" />

     -->    

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-196.png">
    <link rel="icon" type="image/png" sizes="160x160" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-16.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-114.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-72.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-57.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-144.png">
    <meta name="msapplication-config" content="/browserconfig.xml">

    <?php wp_head(); ?> 

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

</head>
<body <?php body_class(); ?>>
  
<header class="Header">
  <div class="HeaderGradient"></div>
  <div class="HeaderContent">

    <div class="HeaderLeft">
      <div class="HeaderLogo">
        <a href="/"></a>
      </div>
    </div>

    <div class="HeaderCenter">
      <div class="HeaderSearch">

        <form action="http://music4deejays.com/" class="searchform" id="searchform" method="get" role="search" _lpchecked="1">
          <input type="text" class="HeaderSearchInput" name="s" id="s" placeholder="Search..."  autocomplete="off">
          <input type="submit" class="HeaderSearchSubmit" name="submit" id="searchsubmit" value=" ">
        </form>
        <style type="text/css">
        #btn_search:before {
          color: #f4e8e8;
          opacity: 0.6;
        }
        </style>
        <span class="icon-search" id="btn_search" style="width:20px; height:20px; position:absolute; right:5px; top:50%; margin-top:-10px;"></span>
      </div>
    </div>

    <div class="HeaderButton">
      <a href="#" id="open_MenuDropDown" class="icon-menu"></a>
    </div>

    <div class="HeaderMenu">
    <ul>
      <li id="menu_drop">
        <a href="/music" id="open_DrowDown">
            Music
            <span class="icon-down"></span>
        </a>
        <div class="HeaderMenuDropdown" id="menuDropdown">
            <div><a href="/electro">Electro House</a></div>
            <div><a href="/progressive">Progressive House</a></div>
            <div><a href="/dubstep">Dubstep</a></div>
        </div>
      </li>
      <li>
        <a href="/mixes">Mixes</a>
      </li>
      <li>
        <a href="/trending/">Trending</a>
      </li>
    </ul>
    </div>

    <div class="HeaderRight"> 
      <ul>
        <li><a href="/login/">Login o register</a></li>
        <li class="upload_tracks">
          <a href="/send_tracks">
            <span class="icon-upload" ></span>
          </a>
        </li>
      </ul>
    </div>
    

  </div>
</header>


<section class="loginPop" style="display:none;"> 
  <div class="close" id="close_contact">
    <span class="icon-close"><a href="index.php"></a></span>
  </div>
  <div class="content">
    <?php echo do_shortcode('[userpro template=register]'); ?>
  </div>
</section>

<div class="loader" id="loading">
  <div class="loaderGif"></div>
</div>


<div class="Player" id="Player">
<div class="PlayerContent">
    <div class="PlayerControllers">
        <div class="controls controls_prev icon-first">
          <div class="go_prev"></div>
        </div>
        <div class="controls controls_toggle ">
          <div class="icon-playsong"></div>
        </div>
        <div class="controls controls_next icon-last">
          <div class="go_next"></div>
        </div> 
    </div>
    <div class="PlayerCenter">
        <div class="player_mediaTime_current">00:00</div>
        <div class="player_progress">
            <div class="progress_bg"></div>
            <div class="load_progress"></div>
            <div class="play_progress">
              <span></span>
            </div>
        </div> 
        <div class="player_progress_tooltip">
            <span></span>
            <p style="display:none;"></p>
        </div>
        <div class="player_mediaTime_total">00:00</div>
    </div>
    <div class="PlayerRight">
      <div class="PlayerVolume">
        <div class="controls player_volume">
          <div class="icon-volume-high"></div>
        </div>
        <div class="volume_seekbar" data-orientation="horizontal" >
          <div class="volume_bg"></div>
          <div class="volume_level"><span></span></div>
          <div class="player_volume_tooltip"><p style="display:none;"></p></div>
        </div>
      </div>
    </div>
  
</div>
</div>

<!-- El sectionMenu position absolute bottom 0  -->

<div class="sectionWrap">
<div class="section">

  <div class="sectionMenu" style="float:right; right:0; z-index:1000; position:absolute; margin-left:0; margin-right:0;">
    <div class="setionMenuFixed">

      <nav class="menu" style="display:none;">
      <ul>
          <li class="selected">
              <a href="<?php echo home_url(); ?>/">
                  Featured tracks
              </a>
          </li>
          <div class="submenu">
              <ul>
                  <li>
                      <a href="<?php echo home_url(); ?>/electro">Electro House</a>
                  </li>
                  <li>
                      <a href="<?php echo home_url(); ?>/progressive">Progressive House</a>
                  </li>
                  <li>
                      <a href="<?php echo home_url(); ?>/dubstep">Dubstep</a>
                  </li>
              </ul>
          </div>

          <li>
              <a href="<?php echo home_url(); ?>/mixes">
                  Mixes
              </a>
          </li>
      </ul>
      </nav>


    </div>
  </div>

  <div class="sectionContent">

