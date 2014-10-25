
    <?php get_header(); ?>

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
 	

    <div id="ajaxCenterContainer">
    <div id="ajaxCenterContainerint">

	    <div class="sectionContentmiddle">
	        <div class="sectionTitle" style="width:100%; clear:both;">

	            <h2>music4deejays's</h2>
	            <h1>
	                Trending tracks 
	            </h1>
	        </div>  
	    </div>

	    <div class="sectionContentmiddle">
	    	<div class="trendingList">
	    	<?php
	    	    wpp_get_mostpopular( "range=all&limit=100&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li> {thumb} <a href='{url}'>{text_title}</a> </li>\"" );
	    	?>
	    	</div>
	    </div>

    </div><!-- Fin ajax container -->
    </div><!-- Fin Section content -->
    
 
	<?php get_footer(); ?>
  
