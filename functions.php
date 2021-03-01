<?php
define('PUMA_VERSION','3.0.3');

/**
 * Theme setup additions.
 */

require get_template_directory() . '/inc/setup.php';

/**
 * Puma only works in WordPress 4.4 or later.
 */

if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
}

/**
 * AJAX callback additions.
 */

require get_template_directory() . '/inc/callback.php';

/**
 * Functional Package additions.
 */

require get_template_directory() . '/inc/pack.php';

/**
 * Functional customize additions.
 */

require get_template_directory() . '/inc/customize.php';

/**
 * Theme update additions.
 */

require get_template_directory() . '/inc/update.php';

/**
 * Theme required plugins
 */

require 'inc/tgm-plugin-activation/plugins.php';




/**
 * Footer required funtion
 */
require get_template_directory() . '/inc/footerfunc.php';


/**
 * emoji required funtion
 */
/**require get_template_directory() . '/inc/owo.php';*/




//说说页面
function shuoshuo_custom_init()
{
    $labels = array(
        'name' => '说说',
        'singular_name' => '说说',
        'add_new' => '发表说说',
        'add_new_item' => '发表说说',
        'edit_item' => '编辑说说',
        'new_item' => '新说说',
        'view_item' => '查看说说',
        'search_items' => '搜索说说',
        'not_found' => '暂无说说',
        'not_found_in_trash' => '没有已遗弃的说说',
        'parent_item_colon' => '',
        'menu_name' => '说说'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array(
            'title',
            'editor',
            'author',
            'comments'

        )
    );
    register_post_type('shuoshuo', $args);
}
add_action('init', 'shuoshuo_custom_init');