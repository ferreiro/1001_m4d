
    <?php get_header(); ?>
 
    <?php 
        $Maincategory = get_the_category();
        $MaincategoryID = $Maincategory[0]->cat_id;
        $MaincategoryName = $Maincategory[0]->cat_name;
    ?>

    <?php function PostSlide($id, $imageSize) {
        echo ''?> 
        <?php 
            $category = get_the_category(); 
            $category_id = get_cat_ID( $category[0]->cat_name );
            $category_link = get_category_link( $category_id );
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
            $url = $thumb[0];
        ?> 

        <li class="fading" style="background-image:url(<?php echo $url; ?>);">
            <div class="sliderDiaposInfo">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2><?php echo $category[0]->cat_name; ?></h2>
                <p><a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">Listen song</a></p>
            </div>
            <div class="sliderDiaposLink">
                <a href="<?php the_permalink(); ?>"></a>
            </div>
        </li> 
      <?php ;
    }
    ?>
 
    <?php function PostLarge($id, $imageSize) {
        echo ''?> 
        <?php 
            $category = get_the_category(); 
            $category_id = get_cat_ID( $category[0]->cat_name );
            $category_link = get_category_link( $category_id );
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            
            if ($imageSize == "thumbnail")
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                $url = $thumb[0];
            }
            else
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                $url = $thumb[0];
            }
        ?> 
        <div class="BoxLarge" id="<?php echo $id; ?>">
            <div class="BoxLargeSongUrl" style="display:none;">
                <?php if(get_field('soundcloudURL')): ?>
                        <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                <?php else: ?>
                        
                <?php endif; ?>
            </div>
            <div class="BoxLargeImage" style="background-image:url(<?php echo $url; ?>);">
                
                <div class="BoxLargeImagePlay">
                    <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <?php if ($category[0]->cat_name == 'Mixes') :?>
                <div class="BoxLargeImageMix">
                    <span class="icon-mix"></span>
                </div>
                <?php endif; ?>
                <div class="BoxLargeImageOverlay">
                    <a href="<?php the_permalink(); ?>"></a>
                </div>
            </div>
            <div class="BoxLargeInfo">
                <div class="BoxLargeInfoTop">
                    <a href="<?php the_permalink(); ?>" class="BoxLargeInfoTopTitle">
                        <?php the_title(); ?>
                    </a> 
                    <a href="<?php echo $category_link; ?>" class="BoxLargeInfoTopSubtitle">
                       <?php 
                            echo $category[0]->cat_name;
                        ?>
                    </a>
                </div>
            </div>
        </div>
      <?php ;
    }
    ?>

    <?php function Post($id, $imageSize) {
        echo ''?> 
        <?php 
            $category = get_the_category(); 
            $category_id = get_cat_ID( $category[0]->cat_name );
            $category_link = get_category_link( $category_id );
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            
            if ($imageSize == "thumbnail")
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                $url = $thumb[0];
            }
            else
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                $url = $thumb[0];
            }
        ?> 
        <div class="Box" id="<?php echo $id; ?>">
            <div class="BoxSongUrl" style="display:none;">
                <?php if(get_field('soundcloudURL')): ?>
                        <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                <?php else: ?>
                        
                <?php endif; ?>
            </div>
            <div class="BoxImage" style="background-image:url(<?php echo $url; ?>);">
                
                <div class="BoxImagePlay">
                    <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <?php if ($category[0]->cat_name == 'Mixes') :?>
                <div class="BoxImageMix">
                    <span class="icon-mix"></span>
                </div>
                <?php endif; ?>
                <div class="BoxImageOverlay">
                    <a href="<?php the_permalink(); ?>"></a>
                </div>
            </div>
            <div class="BoxInfo">
                <div class="BoxInfoTop">
                    <a href="<?php the_permalink(); ?>" class="BoxInfoTopTitle">
                        <?php the_title(); ?>
                    </a> 
                    <a href="<?php echo $category_link; ?>" class="BoxInfoTopSubtitle">
                       <?php 
                            echo $category[0]->cat_name;
                        ?>
                    </a>
                </div>
            </div>
        </div>
      <?php ;
    }
    ?>
 
    <div id="ajaxCenterContainer">
    <div id="ajaxCenterContainerint">

        <style type="text/css">
        .linea_derecha
        {
            top: 120px;
        }  
        </style>

        <div class="sectionContentmiddle">
            <div class="sectionTitle" style="width:100%; clear:both;">

                <h2>Home</h2>
                <h1>
                    Featured 
                </h1>
            </div>  
        </div>

        <div class="sectionContentLeft">


            <?php 
                $i = 0;
                query_posts(array('orderby' => 'date', 'showposts' => 13, 'cat' => '-208')); 
                if (have_posts()) : while (have_posts()) : the_post(); 
            ?>
                <?php if($i == 0): ?> 
                    <div class="slider">
                        <div class="sliderButtonPrev icon-prev"></div>
                        <div class="sliderButtonNext icon-next"></div>
                        <ul class="sliderSelector"></ul>

                        <ul class="sliderDiapos" id="sliderDiapos">
                            
                <?php elseif($i == 3): ?> 

                        </ul>
                    </div><!-- END OF SLIDER -->

                    <!-- open the content -->
                    <ul class="BoxList">

                <?php endif; ?>

                <?php if($i == 0 || $i == 1 || $i == 2): ?>
                    <?php PostSlide($i, "thumbnail"); ?> 
                <?php else: ?>
                    <?php Post($i, "thumbnail"); ?> 
                <?php endif; ?>
                    <? $i++;  ?>

            <? endwhile; endif; ?>
            </ul>

            <h2 class="BoxListTitle">
                New mixes
                <a href="/mixes/">See all</a>
            </h2>

            <?php 
                $i = 0;
                query_posts(array('orderby' => 'date', 'showposts' => 3, 'cat' => '208')); 
                if (have_posts()) : while (have_posts()) : the_post(); 
            ?>
                <?php if($i == 0): ?> 
                    <!-- open the content -->
                    <ul class="BoxList">
                <?php endif; ?>
                    <?php PostLarge($i, "thumbnail"); ?> 
                <? $i++;  ?>

            <? endwhile; endif; ?>
            </ul>
        </div>

        <div class="sectionContentRight">
           
            <div class="SectionToptracks">
                <h2>
                    <?php if(is_category('mixes')): ?>
                        Mixes
                    <?php else: ?>
                        <?php $cat_name = get_category(get_query_var('cat'))->name; ?>
                        <?php echo $cat_name ?>
                    <?php endif; ?>
                </h2>
                <h3>
                    Top ten tracks
                </h3>
                <ul class="SectionToptracksFilter">
                    <li class="selected"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.SectionToptracksFilter li').removeClass('selected'); $('.SectionToptracksFilter li:nth-child(1)').addClass('selected'); $('#all_featured').show(); return false; " id="openAll">All time</a></li>
                    <li><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.SectionToptracksFilter li').removeClass('selected'); $('.SectionToptracksFilter li:nth-child(2)').addClass('selected'); $('#month_featured').show(); return false; " id="openMonth">This week</a></li>
                    <li><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.SectionToptracksFilter li').removeClass('selected'); $('.SectionToptracksFilter li:nth-child(3)').addClass('selected'); $('#month_featured').show(); return false; " id="openMonth">Month</a></li>
                </ul>
                <div id="week_featured">
                <?php
                    $categories = get_the_category();
                    $category_id = $categories[0]->cat_ID;
                    wpp_get_mostpopular( "range=weekly&limit=10&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li>{thumb} <a href='{url}'>{text_title}</a> </li>\"" );
                ?>
                </div>
                <div id="month_featured">
                <?php
                    $categories = get_the_category();
                    $category_id = $categories[0]->cat_ID;
                    wpp_get_mostpopular( "range=monthly&limit=10&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li>{thumb} <a href='{url}'>{text_title}</a> </li>\"" );
                ?>
                </div>
                <div id="all_featured" style="display:block;">
                <?php
                    $categories = get_the_category();
                    $category_id = $categories[0]->cat_ID;
                    wpp_get_mostpopular( "range=all&limit=10&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li>{thumb} <a href='{url}'>{text_title}</a> </li>\"" );
                ?>
                </div>
            </div><!-- Fin SectionToptracks -->

            <style type="text/css">
            .RightAdvise 
            {
                width: 100%;
                padding: 10px 0;
                background: rgba(56,56,56,0.8);
                display: inline-block;
                text-align: center;
            }            
            </style>

            <div class="RightAdvise">
                Upload your track
            </div>


        </div>

    </div><!-- Fin ajax container -->
    </div><!-- Fin Section content -->

</div>
</div><!-- Fin section wrap -->
 
<?php get_footer(); ?>
  
