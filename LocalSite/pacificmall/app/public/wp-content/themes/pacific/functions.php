<?php

// カスタムヘッダー
// ワードプレス機能を有効化する
add_theme_support(
    // カスタムヘッダーを追加
    'custom-header',
    array(
        // ヘッダーの幅
        'width' => 950,
        // ヘッダーの高さ
        'height' => 295,
        // ヘッダーにテキストを表示させない
        'header-text' => false,
        // デフォルトイメージのURL
        'default-image' => '$s/images/top/main_image.png',
    )
);

// カスタムメニュー
register_nav_menus(
    array(
        'place_global' => 'グローバル',
        'place_utility' => 'ユーティリティ',
    )
);

// アイキャッチ有効化
add_theme_support('post-thumbnails');
// アイキャッチ画像サイズ設定
set_post_thumbnail_size(90, 90, true);
// サイドバー用画像サイズ
add_image_size('small_thumbnail', 61, 61, true);
// アーカイブ用画像サイズ
add_image_size('large_thumbnail', 120, 120, true);
// サブページヘッダー用画像サイズ設定
add_image_size('category-image', 658, 113, true);
// モールイメージ用画像サイズ設定
add_image_size('pickup-thumbnail', 302, 123, true);
