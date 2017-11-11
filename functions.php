<?php

if ( ! function_exists( 'hazelnut_setup' ) ) :
    function hazelnut_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
        ) );
    }
    endif;
    add_action( 'after_setup_theme', 'hazelnut_setup' );

if (function_exists('register_nav_menus')){
	register_nav_menus(array(
	//key调用nav时，value为菜单名称
	'primary' => 'Primary Navigation'
	));    
    }


if (function_exists('register_sidebar')){    
    register_sidebar(array(
        'name' => 'sidebar-1',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="aside-title">',
        'after_title' => '</h3>'
        ));
	}

function hazelnut_admin_tag($author_link){		
    $comment = get_comment($comment_id);		
    echo $author_link;
    if(user_can($comment->user_id, 'administrator')){		
        ?> <a title="Hi~" class="admin-tag">admin</a><?php		
    }		
}		
add_filter('get_comment_author_link', 'hazelnut_admin_tag');    

function hazelnut_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'hazelnut_javascript_detection', 0 );
?>