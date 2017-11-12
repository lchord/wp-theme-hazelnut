<?php
/*
Template Name: Archives
*/
?>

<?php get_header();?>

    <section id="content">
        <main id="main">
            <section class="section-body">
                <?php while ( have_posts() ) : the_post(); ?>
                    <header class="archive-header">
                        <h1 class="archive-title"><?php the_title();?></h1>
                    </header>
                <?php endwhile; ?>
                <div class="archive-content">
                    <?php $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'ignore_sticky_posts' => 1
                    );
                    $the_query = new WP_Query( $args );
                    $posts_rebuild = array();
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        $post_y = get_the_time('Y');
                        $post_m = date('M',get_the_time('U'));
                        $post_d = get_the_time('j');
                        $posts_rebuild[$post_y][$post_m][] = '<article class="archive-post"><time>' . $post_m . '&nbsp;' . $post_d. '</time><div><a href="'. get_permalink() .'">'. get_the_title() .'</a> <small>('. get_comments_number('0', '1', '%') .')</small><div></article>';
                    endwhile;
                    wp_reset_postdata();
                    foreach ($posts_rebuild as $key => $value) {
                        $output .= '<section class="archives"><time class="archives-year">' . $key . '</time>';
                        $year = $key;
                        foreach ($value as $key_m => $value_m) {
                            foreach ($value_m as $key => $value_d) {
                                $output .=  $value_d;
                            }
                        }
                        $output .= '</section>';
                    }
                    echo $output;
                    ?>
                </div>
            </section>
        </main>
    </section>

<?php get_footer();?>