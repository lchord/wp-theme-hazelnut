<?php get_header();?>
<section id="content">
   <main id="main">
   <?php while ( have_posts() ) : the_post(); ?>
    <article class="post">
     <header class="post-head">
      <h1 class="post-title"><?php the_title();?></h1>
      <time class="post-time"><?php echo get_the_date('M d Y');?></time>
     </header>