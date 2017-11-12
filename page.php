<?php get_header();?>
    <section id="content">
        <main id="main">
            <section class="section-body">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="post">
                        <header class="post-head">
                            <h1 class="grap--h2"><?php the_title();?></h1>
                        </header>
                    <div class="post-content">
                        <?php the_content();?>
                    </div>
                    <section id="comment">
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                    </section>
                <?php endwhile; ?>
            </section>
        </main>
    </section>
<?php get_footer();?>