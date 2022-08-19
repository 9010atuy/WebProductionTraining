<?php
// CSS読み込み
function add_stylesheet()
{
    wp_enqueue_style(
        'main',
        get_template_directory_uri() . '/css/style.css',
        array()
    );
    wp_enqueue_style(
        'slick',
        get_template_directory_uri() . '/slick/slick.css',
        array('main')
    );
    wp_enqueue_style(
        'slick-theme',
        get_template_directory_uri() . '/slick/slick-theme.css',
        array('slick')
    );
}
// wp_enqueue_scriptsフックでadd_stylesheetを呼び出し
add_action('wp_enqueue_scripts', 'add_stylesheet');
// JS読みこみ
function add_script()
{
    // jqueryの登録を解除
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', '');
    wp_register_script('slick', get_template_directory_uri() . '/slick/slick.min.js', 'array()');
    wp_enqueue_script('original', get_template_directory_uri() . '/js/script.js', array('slick'));
}
// wp_enqueue_scriptsフックでadd_scriptを呼び出し
add_action('wp_enqueue_scripts', 'add_script');

// サムネイル有効化
add_theme_support('post-thumbnails');

// 現在ページの取得
function show_page_number()
{
    global $wp_query;
    $paged = get_query_var('paged');
    echo $paged;
}

// 管理画面の「投稿」を非表示にする
function remove_menus()
{
    global $menu;
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');

// 管理画面の「外観」に「メニュー」を追加する
add_action('after_setup_theme', 'register_menu');
function register_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}

// ユーザーエージェント判定
function is_mobile()
{
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android', // 1.5+ Android
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/' . implode('|', $useragents) . '/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
