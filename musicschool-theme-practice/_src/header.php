<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>きたむらミュージックスクール | 「音楽で生きる」を叶える ミュージックスクール</title>
    <meta name="description" content="「音楽で生きる」を叶える ミュージックスクール「きたむらミュージックスクール」の公式ホームページです。">

    <?php wp_head(); ?>
</head>

<body style="display:none;">
    <header class="header">
        <button class="header-nav-open">
            <span class="header-nav-open-border"></span>
        </button>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <p class="header-logo sp-none"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="きたむらミュージックスクール"></p>
            <p class="header-logo pc-none"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-sp.svg" alt="きたむらミュージックスクール"></p>
        </a>
        <nav class="header-nav" aria-label="ヘッダーナビゲーション">
            <?php
            // wp管理画面から作成したメニューを表示
            wp_nav_menu(array(
                // [header]メニュー
                'menu' => 'header',
                // メニューのulに付与するクラス名
                'menu_class' => 'header-nav-list',
                // メニューのulをラップする要素
                'container' => 'nav',
                // ラップ要素に付与するクラス名
                'container_class' => 'header-nav'
            ))
            ?>
        </nav>
    </header>
    <a href="#" class="c-arrow">
        <p class="c-arrow__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-t.svg" alt="△">
        </p>
    </a>