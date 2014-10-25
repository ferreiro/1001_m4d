
    <?php get_header(); ?>
 
    <div id="ajaxCenterContainer">
    <div id="ajaxCenterContainerint">

        <div class="sectionContentLeft">

        	<div class="sectionTitle" style="width:100%; clear:both;">
        	    <h2>
        	    	Results for your search
        	    </h2>
        	    <h1>
        	        <?php echo sprintf( __( '%s results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>            
        	    </h1>
        	</div>

			<?php  
			    if (have_posts()) : while (have_posts()) : the_post(); 
			?>
			
			<style type="text/css">
			.SongHeader
			{
				width: 100% !important;
			}
			</style>

		    <?php 
		        // Global variables for the post page
		        $currentPostTitle = get_the_title();
		        $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		    ?>
			
			<div class="Song">

			    <div class="SongHeader">
			        <div class="SongLeft">
			            <div class="SongAvatar" style="background-image:url(<?php echo $featuredImage; ?>);"></div>
			        </div>
			        <div class="SongInfo" style="width:550px;">

			
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
			                	<a href="<?php the_permalink(); ?>">
			                    	<?php the_title(); ?>
			                    </a>
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

			        </div>

			    </div>

			</div><!-- Fin song -->
			<? endwhile; endif; ?>

			<?php get_template_part('pagination'); ?>
		
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
    
 
<?php get_footer(); ?>
  
