
    <?php get_header(); ?>

    <?php 
        // Global variables for the post page
        $currentPostTitle = get_the_title();
        $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>

    <div id="ajaxCenterContainer">
    <div id="ajaxCenterContainerint">

        <div class="sectionContentLeft" style="min-height:718px;">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="sectionContentLeft">

                <div style="width:200px; position:absolute; bottom:10px; right:10px;">
                    <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
                </div>

                <?php 
                    $category = get_the_category(); 
                    $category_id = get_cat_ID( $category[0]->cat_name );
                    $category_link = get_category_link( $category_id );
                ?>

                <div class="Song">

                    <div class="SongHeader">
                        <div class="SongLeft">
                            <div class="SongLeftFixed">
                                <div class="SongAvatar" style="background-image:url(<?php echo $featuredImage; ?>);"></div>
                                <a href="<?php echo $category_link; ?>"><img src="http://www.clarksgrovetball.com/img/back.png" height="30px"> Electro House</a>
                                <?php echo $category[0]->cat_name; ?>
                            </div>
                        </div>
                        <div class="SongInfo">

                            <h1>
                                <span>
                                    <?php the_title(); ?>
                                </span>
                            </h1>
                            <h2 class="SongData">
                                <span>Publish 3 days ago</span>
                            </h2>

                            <style>
                            #pauseSong { display: none; }
                            #playSong_Initialized { display: none; }
                            </style>

                            <ul class="SongSecondLinks">  
                                <li class="playSong">

                                    <a href="#" id="playSong" onclick="event.preventDefault(); $('#playlist_list #playlist2').replaceWith($('.single_playlist')[0].innerHTML); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); $( '.controls:nth-child(2) div' ).attr('class', 'loadingAudio'); $('#playSong').hide(0); $('#pauseSong').show(0); return false;">
                                        Play song
                                    </a>
                                    <a href="#" class="pauseSong" id="pauseSong" onclick="event.preventDefault(); api_pauseAudio(hap_players[0]); $('#pauseSong').hide(0); $('#playSong_Initialized').show(0); return false;">
                                        Pause song
                                    </a>
                                    <a href="#" id="playSong_Initialized" onclick="event.preventDefault(); $('.nowPlaying').show(); api_playAudio(hap_players[0]); $('#playSong_Initialized').hide(0); $('#pauseSong').show(0); return false;">
                                        Continues playing
                                    </a>
                                </li>
                                <li><a href="">Share</a></li>
                            </ul>
                            <div class="SongTags">
                                <?php the_tags('',' ',''); ?>
                            </div>

                            <?php if($post->post_content != ""): ?>
                            <div class="SongDescription">
                                <?php the_content(); ?>
                            </div>
                            <?php endif; ?>

                            <div class="Comments">
                                <?php comments_template(); ?>
                            </div>

                            <? endwhile; endif; ?>

                        </div>
                    </div>
                </div><!-- Fin song -->

            </div><!-- Fin sectionContentMiddle -->

            <div class="single_playlist">
            <ul id='playlist2'>
                <!-- Put the current single in first position -->
                <?php $currentSongTitle = get_the_title(); ?>

                <?php if(get_field('soundcloudURL')): ?>
                   <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $playlistImage; ?>'></li>
                <?php endif; ?>

                <?php query_posts(array('orderby' => 'rand', 'showposts' => 0 )); 
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <?php $newSongTitle = get_the_title(); ?>
                    <?php if($newSongTitle != $currentSongTitle) : ?>
                        <?php if(get_field('soundcloudURL')): ?>
                            <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $playlistImage; ?>'></li>
                        <?php endif; ?>
                    <?php endif; ?>
                <? endwhile; endif; ?> 

            </ul>
            </div>
  
        </div>
 
        <div class="sectionContentRight">

            Related tracks
            
            <ul class="SingleRelated">
              
                <?  
                query_posts(array('orderby' => 'rand', 'showposts' => 10 )); 
                if (have_posts()) : while (have_posts()) : the_post(); 
                ?>
                
                    <?  
                    $newName = get_the_title();
                    if ($newName != $currentPostTitle) : 
                    ?>

                    <li>
                        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class="SingleRelatedCover" style="background-image:url(<?php echo $featuredImage; ?>);"></div>
                        <div class="SingleRelatedInfo">
                            <h2><a href="<?php the_permalink();?>#"><?php the_title(); ?></a></h2>
                            <?  
                                $category = get_the_category(); 
                                $category_id = get_cat_ID( $category[0]->cat_name );
                                $category_link = get_category_link( $category_id ); 
                            ?>  
                            <p><a href="<?php echo $category_link; ?>">
                                <?php echo $category[0]->cat_name; ?></a>
                            </p> 
                        </div>
                    </li>
                    <?php endif; ?>

                <? endwhile; endif; ?>

            </ul>
        </div>
    </div><!-- Fin ajax container -->
    </div><!-- Fin Section content -->
    

<?php get_footer(); ?>



    <!-- onReady function -->
    <script type="text/javascript">  
    
      $('.MixHeaderWallpaper').blurjs({
        source: '.MixHeader',
        radius: 80,
        overlay: 'rgba(0, 0, 0, .2)'
      }); 
    </script>

    <script src='http://www.jgferreiro.com/wp-content/themes/jgferreiro/js/blur.js'></script>   
 
