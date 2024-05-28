<?php

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

/**
 * アイキャッチ画像を使用可能にする。
 */
add_theme_support('post-thumbnails');

function theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');
/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');

// 固定ページで「抜粋」を有効化
add_post_type_support('page', 'excerpt');

// カテゴリーとタグのmeta descriptionからpタグを除去
remove_filter('term_description', 'wpautop');

function post_has_archive($args, $post_type)
{
    $slug = 'works';
    if ('post' == $post_type) {
        $args['rewrite']     = true;
        $args['has_archive'] = $slug;
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function change_post_menu_label()
{
    global $menu;
    global $submenu;
    $menu[5][0] = 'Works';
    $submenu['edit.php'][5][0] = 'Works一覧';
}

function change_post_object_label()
{
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Works';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');

remove_filter('template_redirect', 'redirect_canonical');
