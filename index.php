<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hazelnut
 */

get_header(); ?>

<section id="content">
    <main id="main" class="home">
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
    <?php get_sidebar(); ?>
</section>
    <?php get_footer(); ?>
