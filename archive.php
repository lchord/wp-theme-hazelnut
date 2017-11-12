<?php get_header();?>

    <section id="content">
        <main id="main" class="archive-page">
            <header class="archive-header">
                <?php
                the_archive_title( '<h1 class="archive-title">', '</h1>' );
                ?>
            </header>
            <section class="block-group">
                <?php if (have_posts()):
                    while (have_posts()): the_post();
                        get_template_part('template-parts/content', get_post_format());
                    endwhile;
                endif;?>
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
        </main>
    </section>
<?php get_footer();?>