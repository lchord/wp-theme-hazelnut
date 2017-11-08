<?php get_header();?>
    <section id="content">
        <main id="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <article class="post">
        <header class="post-head">
        <h1 class="post-title"><?php the_title();?></h1>
        <time class="post-time"><time><?php echo date('M j Y',get_the_time('U'));?></time></time>
        </header>
        <div class="post-content">
        <?php the_content();?>
        </div>
        </article>
        <nav class="page-nav clear">
        <?php the_post_navigation( array(
            'next_text' => '<span class="prev"><span class="meta-nav"> « </span><span class="post-title">%title</span></span>',
            'prev_text' => '<span class="next"><span class="post-title">%title</span><span class="meta-nav"> » </span></span>',
        ) );?>
        </nav>
        <section id="comment">
        <?php
        if ( comments_open() || get_comments_number() ) :
        comments_template();
        endif;
        ?>
        </section>   
        <?php endwhile; ?>
        </main>
    </section>
<?php get_footer();?>   

