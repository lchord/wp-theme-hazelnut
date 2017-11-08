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
     <footer class="post-foot"></footer>
     <?php the_post_navigation( array(
                    'next_text' => '<span class="meta-nav">Next</span><span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav">Prev</span><span class="post-title">%title</span>',
                ) );?>
     <section id="comment">
        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
     </section>   
        <?php endwhile; ?>

