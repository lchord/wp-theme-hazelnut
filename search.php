<?php get_header(); ?>
    <section id="content">
        <main id="main" class="search-results">
	        <header class="archive-header">
		        <?php if ( have_posts() ) : ?>
			        <h1 class="page-title"><?php printf( __( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
		        <?php else : ?>
			        <h1 class="page-title"><?php _e( 'Nothing Found'); ?></h1>
		        <?php endif; ?>
	        </header>

            <section class="block-group">
            <?php if ( have_posts() ) : 
                /* Start the Loop */
                while ( have_posts() ) : the_post();
                    get_template_part('template-parts/content', get_post_format());
                endwhile; ?>
            </section>
            <div class="footer-nav">
                <div class="posts-nav">
                    <?php echo paginate_links( array(
                        'prev_next'          => 1,
                        'before_page_number' => '',
                        'prev_text'    => __('«'),
                        'next_text'    => __('»'),
                        'mid_size' => 2
                    ) );?>
                </div>
            </div>
            <?php else : ?>
                <div class="no-result">
                <?php get_search_form(); ?>
                <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.'); ?></p>
                </div>
            </section>
            <?php endif; ?>
		</main>
    </section>
<?php get_footer();
