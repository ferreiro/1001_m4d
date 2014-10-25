


 
                    <?php  

                    $count = 00; 
                    $popularpost = new WP_Query( array( 'posts_per_page' => 10, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC') );
                    
                    while ( $popularpost->have_posts() ) : $popularpost->the_post(); 
                    $count = $count + 1; // Increase the counter

                    ?> 

                    <li>
                        <a href="<?php the_permalink() ?>">
                            <div class="image">
                                <span class="position"><? echo "$count"; ?></span>
                                <span class="gradient"></span> 
                            </div>
                            <div class="info">
                                <h2>
                                    <?php the_title(); ?>
                                </h2>
                            </div>
                        </a>
                    </li>

                    <?php    
                    endwhile;
                    ?>

