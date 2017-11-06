<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header id="header">
   <div id="header-warp">
    <h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></h1>
    <nav id="nav" class="clear">
    <?php   
      $menuParameters = array(  
      'container' => false,  
      'echo' => false,  
      'items_wrap' => '%3$s',  
      'depth' => 0,  
      'theme_location'=>'primary',  
      );  
      echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );  
    ?>  
    </nav>
   </div>
  </header>