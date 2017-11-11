<?php

if (function_exists('register_nav_menus')){
	register_nav_menus(array(
	//主键key调用nav时使用，值value为后台菜单显示名称
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
?>