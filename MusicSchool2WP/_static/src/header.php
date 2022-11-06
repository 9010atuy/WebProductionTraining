<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content=”noindex”>
    <!-- ogp -->
    <meta property="og:type" content="website">
    <title>きたむらミュージックスクール | TOP</title>
    <meta name="description" content="きたむらミュージックスクールのデモサイトです">
    <meta property="og:title" content="きたむらミュージックスクール">
    <meta property="og:description" content="きたむらミュージックスクールのデモサイトです">

    <!-- ogp-image -->
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <a href="<?php echo get_template_directory_uri(); ?>/index.html">
            <div class="header__logo-title">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/logo.svg" alt="logo" class="logo">
                <p class="site-title">
                    <span class="header__logo-title--text-decoration">きたむら</span>ミュージックスクール
                </p>
            </div>
        </a>
        <div class="c-hamburger hamburger-trigger no-pc">
            <span></span>
        </div>
        <nav class="c-nav pc header__nav">
            <ul class="c-nav-list">
                <li><a href="<?php echo get_template_directory_uri(); ?>/plan.html" class="c-nav-itemlink">料金</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/blog_list.html" class="c-nav-itemlink">ブログ</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/notice_list.html" class="c-nav-itemlink">お知らせ</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/result_list.html" class="c-nav-itemlink">卒業実績</a></li>
            </ul>
        </nav>
        <button class="pc c-button c-button--red c-button--small header__button">
            お問い合わせ
        </button>
    </header>
    <div class="c-hamburger-menu">
        <nav class="hamburger-nav">
            <ul class="hamburger-list">
                <li><a href="<?php echo get_template_directory_uri(); ?>/plan.html" class="c-hamburger-item hamburger-trigger">料金</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/blog_list.html" class="c-hamburger-item hamburger-trigger">ブログ</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/notice_list.html" class="c-hamburger-item hamburger-trigger">お知らせ</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/result_list.html" class="c-hamburger-item hamburger-trigger">卒業実績</a></li>
            </ul>
        </nav>
    </div>
    <div class="c-hamburger-bg hamburger-trigger">
    </div>