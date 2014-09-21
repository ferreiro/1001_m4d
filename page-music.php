    <?php get_header(); ?>


<div id="MainContent">
    <div class="container" id="container">

        <div class="category_songs">


        <div class="Subheader">
            <div class="SubheaderContent">
         
                <div class="SubHeaderMiddle">
                    <ul>
                        <li>
                            <a id="genre">
                                
                                All genres

                                <span class="icon-down"></span>
                            </a>
                            <ul class="SubHeaderDropDown">  
                                <li class="selectedDrop">
                                    <a href="#">All genres</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url(); ?>/electro">Electro house</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url(); ?>/progressive">Progressive house</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url(); ?>/dubstep">Dubstep</a>
                                </li>
                            </ul>
                        </li> 
                    </ul>
                </div>

                <div class="SubHeaderRight">
                    <a href="<?php echo home_url(); ?>/send_tracks" class="button" id="upload">
                        <span class="icon-upload"></span>
                        Upload track
                    </a> 
                    <ul class="SubHeaderDropDown">      
                        <li>
                            <a href="#">Originals Mix</a>
                        </li>
                        <li>
                            <a href="#">Mashups</a>
                        </li>
                        <li>
                            <a href="#">Remixes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
 

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
                    <a href="<?php the_permalink(); ?>">
                        <div class="BoxImagePlay">
                            <span class="icon-play"></span>
                        </div>
                        <?php if ($category[0]->cat_name == 'Mixes') :?>
                        <div class="BoxImageMix">
                            <span class="icon-mix"></span>
                        </div>
                        <?php endif; ?>
                        <div class="BoxImageOverlay"></div>
                    </a>
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
                    <div class="BoxInfoBottom">
                        <p class="BoxInfoBottomTitle">
                            Published <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
                        </p> 
                    </div>
                </div>
            </div>
          <?php ;
        }
        ?>



        <?php 
            $i = 0;
            query_posts(array('orderby' => 'rand', 'showposts' => 28 , cat =>'-192')); 
            if (have_posts()) : while (have_posts()) : the_post(); 
        ?>

            <?php 
                if ($i == 29) : 
                    $i = 0; 
                endif;
            ?>


            <?php if (($i != 6) && ($i != 12) && ($i != 28)):
            ?>
                <?php if ($i % 2 == 0): ?>
                <div class="Box-Group"><!-- Crear nuevo Group -->
                <?php endif; ?>

                    <?php Post($i, "thumbnail"); ?> 

                <?php if ($i == 13): ?> 
                <!-- 
                    Ad: añadir 
                    Imprimir Publicidad extra!!!! 
                 --> 
                <div class="Box BoxMediumAd">
                   <?php wp125_write_ads(); ?>
                </div>
                <?php endif; ?>

                <?php if (($i % 2) == 1): ?>
                </div><!-- Cerrar Group -->
                <?php endif; ?>

                <?php if ($i == 19): ?> 
                <!-- 
                    Ad: añadir 
                    Imprimir Publicidad extra!!!! 
                 --> 
                <div class="Box " style="width:100% !important; display:none; ">
                    <?php wp125_write_ads(); ?>
                </div>
                <?php endif; ?>


            <?php else: ?>

                <?php if ($i == 6): ?>
         
                    <div class="Box-GroupBig">

                        <?php Post($i, "medium"); ?>

                    </div><!-- Fin group -->

                    <? $i++;  ?> <!-- Sumar una de más para arreglar un bug -->

                <?php elseif ($i == 12): ?>
                    <div class="Box-GroupMedium GroupWithAd">

                        <?php Post($i, "medium"); ?>

                <?php elseif ($i == 28): ?>
                    <div class="Box-GroupBig">

                        <?php Post($i, "medium"); ?>

                    </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <? $i++;  ?>

            <? endwhile; endif; ?>

        </div>

    </div> 
</div><!-- Fin MainContent -->
 
    
    <?php get_footer(); ?>
  
 