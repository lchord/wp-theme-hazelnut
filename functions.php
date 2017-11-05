<?php /* child theme functions */ 




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

?>