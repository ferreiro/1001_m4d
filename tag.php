        
    <?php get_header(); ?>

    <main id="content">

        <div class="box_middle">
        <section class="left">


            <div class="section_title"  id="tag">
                <h1>
                    <span>#</span>
                    <?php echo single_tag_title('', false); ?>
                </h1>
            </div>
             
            <!-- CATEGORY -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="song">
                <a href="<?php the_permalink(); ?>">

                    <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    
                    <div class="image">
                        <span class="gradient"></span>
                        <img src="<?php echo $featuredImage; ?>" />
                    </div>
                    <div class="info">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <p>
                            <a href="category.html">
                                Categoría
                            </a>
                        </p>
                    </div>
                </a>
            </article>
            <? endwhile;?>
            <? endif; ?>

            <div class="pagination_wrap">
                <?php get_template_part('pagination'); ?>
            </div>

        </section>



		<?php get_footer(); ?>