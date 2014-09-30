
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
        .section
        {
            padding-top: 3%;
            margin-top: 0;
        }
        .footer
        {
            display: none !important;
        }

        </style>
        
        <?php  
            if (have_posts()) : while (have_posts()) : the_post(); 
        ?>

        <div style="padding:20px; position:fixed; z-index:1000; bottom:00px; right:10px;">
            <?
                $post_id = get_the_ID();
            ?>
            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
        </div>

        <?php 
            // Global variables for the post page
            $currentPostTitle = get_the_title();
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>

        <div class="SongBackground" id="SongBackground" style="background-image:url(<?php echo $featuredImage; ?>);">
            <div class="SongBackgroundOverlay"></div>
            <div class="SongBackgroundBlur" id="SongBackgroundBlur"></div>
        </div>

        <div class="sectionContentMiddle">

            <?php 
                $category = get_the_category(); 
                $category_id = get_cat_ID( $category[0]->cat_name );
                $category_link = get_category_link( $category_id );
            ?>

            <div class="Song">

                <div class="SongHeader">

                    <div class="SongLeftFixed">
                        <div class="SongLeft">
                            <div class="SongAvatar" style="background-image:url(<?php echo $featuredImage; ?>);"></div>
                        </div> 
                    </div>
                    <div class="SongInfo">
                
                        <h2>
                            <?php
                                $categories=get_categories();
                                if ($categories) {
                                    foreach($categories as $category) {
                                        if ($category->count > 10) {
                                        ?>
                                            <a href="<?php echo get_category_link( $category->term_id ); ?>">
                                                <?php echo $category->name; ?>
                                            </a>
                                        <?
                                        } // if count<10
                                    } // foreach
                                } // if ($categories)
                            ?>
                        </h2>
                        <h1>
                            <span>
                                <?php the_title(); ?>
                            </span>
                        </h1>

                        <style>
                        #pauseSong { display: none; }
                        #playSong_Initialized { display: none; }
                        </style>

                        <ul class="SongSecondLinks">  
                            <li class="playSong">

                                <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').replaceWith($('.single_playlist')[0].innerHTML); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); $( '.controls:nth-child(2) div' ).attr('class', 'loadingAudio'); api_playAudio(hap_players[0]); ">
                                    <span class="icon-playsong"></span>
                                </a>
                                <!-- 
                                <a href="#" id="playSong" onclick="event.preventDefault(); $('#playlist_list #playlist2').replaceWith($('.single_playlist')[0].innerHTML); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); $( '.controls:nth-child(2) div' ).attr('class', 'loadingAudio'); $('#playSong').delay(200); $('#playSong').hide(0); $('#pauseSong').show(0); return false;">
                                    Play song
                                </a>
                                <a href="#" class="pauseSong" id="pauseSong" onclick="event.preventDefault(); api_pauseAudio(hap_players[0]); $('#pauseSong').hide(0); $('#playSong_Initialized').show(0); return false;">
                                    Pause song
                                </a>
                                <a href="#" id="playSong_Initialized" onclick="event.preventDefault(); $('.nowPlaying').show(); api_playAudio(hap_players[0]); $('#playSong_Initialized').hide(0); $('#pauseSong').show(0); return false;">
                                    Continues playing
                                </a> 
                                -->
                            </li>
                            <li><a href="">Share</a></li>
                            <?php if(the_field('downloadURL')): ?>
                                <li><a href="<?php the_field('downloadURL'); ?>">Exclusive Download</a></li>
                            <?php endif; ?>
                        </ul>

                        <p class="SongPublished" style="display:none;">
                            <span>Publish 3 days ago</span>
                        </p>

                        <div class="SongTags">
                            <?php the_tags('',' ',''); ?>
                        </div>

                        <?php if($post->post_content != ""): ?>
                            <div class="SongDescription">
                                <?php the_content(); ?>
                            </div>
                        <?php endif; ?>
                        
                        <h2 class="BoxListTitle">
                            Comments
                        </h2>

                        <div class="FullComments">
                            <?php comments_template(); ?>
                        </div>

                    </div>

                </div>
            </div>

            <? endwhile; endif; ?>

            <div class="single_playlist">
            <ul id="playlist2">
                <!-- Put the current single in first position -->
                <?php $currentSongTitle = get_the_title(); ?>

                <?php if(get_field('soundcloudURL')): ?>
                    <li class="playlistItem" data-type="soundcloud" data-path="<?php the_field('soundcloudURL'); ?>" data-thumb="<?php echo $playlistImage; ?>"></li>
                <?php endif; ?>

                <?php query_posts(array('orderby' => 'rand', 'showposts' => 3 )); 
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <?php $newSongTitle = get_the_title(); ?>
                    <?php if($newSongTitle != $currentSongTitle) : ?>
                        <?php if(get_field('soundcloudURL')): ?>
                            <li class="playlistItem" data-type="soundcloud" data-path="<?php the_field('soundcloudURL'); ?>" data-thumb="<?php echo $playlistImage; ?>"></li>
                        <?php endif; ?>
                    <?php endif; ?>
                <? endwhile; endif; ?> 

            </ul>
            </div>

            <div class="RelatedSongs">
                sssss

            </div>


<!--
            <div class="Song">
                <div class="SongHeader">
                    <div class="SongInfo">

                        <h2 class="BoxListTitle">
                            Related songs
                        </h2>

                        slslsls

                    </div>
                </div>
            </div>    

        </div>
-->


    </div><!-- Fin ajax container -->
    </div><!-- Fin Section content -->

</div>
</div><!-- Fin section wrap -->
 
<?php get_footer(); ?>
  
