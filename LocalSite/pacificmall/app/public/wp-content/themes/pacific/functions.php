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
