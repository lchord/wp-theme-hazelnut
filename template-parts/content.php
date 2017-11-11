<article class="post block block--inset block--list<?php if(is_sticky()) echo ' sticky';?>">
    <header class="post-header">
    <h2 class="post-title block-title post-featured" itemprop="headline">
        <?php if( is_sticky()) : ?>
            <img src="<?php echo(get_bloginfo('template_directory').'/source/img/sticky-top.svg') ?>" class="sticky-icon"/><a href="<?php the_permalink();?>"><?php the_title();?></a>
        <?php else : ?>
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        <?php endif;?>
    </h2>
    <div class=" post-time">
        <time><?php echo date('M j Y',get_the_time('U'));?></time>
    </div>
    </header>
    <div class="block-snippet block-snippet--subtitle grap" itemprop="about">
        <?php if(has_post_thumbnail()):?>
            <p class="with-img"><?php the_post_thumbnail( 'full' ); ?></p>
            <?php if( post_password_required()) : ?>
                <?php the_content('Read More.');?>
            <?php else : ?>
                <?php if( has_excerpt() ) : ?>
                    <p><?php the_excerpt();?></p>
                <?php else: ?>
                    <p><?php echo mb_strimwidth(strip_shortcodes(strip_tags(apply_filters('the_content', $post->post_content))), 0, 220,"...");?></p>
                <?php endif;?>
                <p><a class="more-link" href="<?php the_permalink();?>" rel="nofollow">Read More</a></p>
            <?php endif;?>
        <?php else : ?>
            <?php the_content('Read More');?>
        <?php endif;?>
    </div>
    
</article>