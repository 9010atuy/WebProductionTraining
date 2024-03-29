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
    <link rel="stylesheet" href="./lib/slick.css">
    <link rel="stylesheet" href="./lib/slick-theme.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header class="header">
        <a href="./index.html">
            <div class="header__logo-title">
                <img src="./img/icon/logo.svg" alt="logo" class="logo">
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
                <li><a href="./plan.html" class="c-nav-itemlink">料金</a></li>
                <li><a href="./blog_list.html" class="c-nav-itemlink">ブログ</a></li>
                <li><a href="./notice_list.html" class="c-nav-itemlink">お知らせ</a></li>
                <li><a href="./result_list.html" class="c-nav-itemlink">卒業実績</a></li>
            </ul>
        </nav>
        <button class="pc c-button c-button--red c-button--small header__button"
            onclick="location.href='./contact_form.html'">
            お問い合わせ
        </button>
    </header>
    <div class="c-hamburger-menu">
        <nav class="hamburger-nav">
            <ul class="hamburger-list">
                <li><a href="./plan.html" class="c-hamburger-item hamburger-trigger">料金</a></li>
                <li><a href="./blog_list.html" class="c-hamburger-item hamburger-trigger">ブログ</a></li>
                <li><a href="./notice_list.html" class="c-hamburger-item hamburger-trigger">お知らせ</a></li>
                <li><a href="#result" class="c-hamburger-item hamburger-trigger">卒業実績</a></li>
            </ul>
        </nav>
    </div>
    <div class="c-hamburger-bg hamburger-trigger">
    </div>
    <section id="blog-fv" class="js-fv">
        <div class="blog__fv-img c-fv__img">
            <h1 class="blog__message c-fv__message u-font--white u-font--bold">
                ブログ
            </h1>
        </div>
    </section>
    <nav class="c-breadcrumb">
        <div class="main-wrapper">
            <ul>
                <li>
                    <a href="./index.html">ホーム</a>
                </li>
                <li>
                    <a href="./blog_list.html">ブログ</a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="blog-list" class="main-wrapper">
        <h1 class="c-sub-page-title">ブログ一覧</h1>
        <div class="blog-list__contents">
            <div class="c-card blog-list__card">
                <a href="./blog_details.html">
                    <div class="blog-list__item">
                        <div class="blog-list__item--left">
                            <div class="c-card__img-container">
                                <div class="c-card__label blog-list__card__label">ギター</div>
                                <img src="./img/SP/blog/blog01.png"
                                    srcset="./img/SP/blog/blog01.png 1x, ./img/SP/blog/blog01@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img no-pc">
                                <img src="./img/PC/blog/blog01.png"
                                    srcset="./img/PC/blog/blog01.png 1x, ./img/PC/blog/blog01@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img pc">
                            </div>
                        </div>
                        <div class="blog-list__item--right">
                            <h2 class="c-card__title blog-list__card__title">アルペジオが劇的に向上する3つの習慣</h2>
                            <p class="c-card__date blog-list__card__date">2022.01.01</p>
                            <p class="blog-list__card__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="c-card blog-list__card">
                <a href="./blog_details.html">
                    <div class="blog-list__item">
                        <div class="blog-list__item--left">
                            <div class="c-card__img-container">
                                <div class="c-card__label blog-list__card__label">集客方法</div>
                                <img src="./img/SP/blog/blog02.png"
                                    srcset="./img/SP/blog/blog02.png 1x, ./img/SP/blog/blog02@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img no-pc">
                                <img src="./img/PC/blog/blog02.png"
                                    srcset="./img/PC/blog/blog02.png 1x, ./img/PC/blog/blog02@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img pc">
                            </div>
                        </div>
                        <div class="blog-list__item--right">
                            <h2 class="c-card__title blog-list__card__title">集客してる間は売れないという法則</h2>
                            <p class="c-card__date blog-list__card__date">2022.01.01</p>
                            <p class="blog-list__card__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="c-card blog-list__card">
                <a href="./blog_details.html">
                    <div class="blog-list__item">
                        <div class="blog-list__item--left">
                            <div class="c-card__img-container">
                                <div class="c-card__label blog-list__card__label">SNS</div>
                                <img src="./img/SP/blog/blog03.png"
                                    srcset="./img/SP/blog/blog03.png 1x, ./img/SP/blog/blog03@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img no-pc">
                                <img src="./img/PC/blog/blog03.png"
                                    srcset="./img/PC/blog/blog03.png 1x, ./img/PC/blog/blog03@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img pc">
                            </div>
                        </div>
                        <div class="blog-list__item--right">
                            <h2 class="c-card__title blog-list__card__title">フォロワーではなくファンを増やせとは？</h2>
                            <p class="c-card__date blog-list__card__date">2022.01.01</p>
                            <p class="blog-list__card__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="c-card blog-list__card">
                <a href="./blog_details.html">
                    <div class="blog-list__item">
                        <div class="blog-list__item--left">
                            <div class="c-card__img-container">
                                <div class="c-card__label blog-list__card__label">ギター</div>
                                <img src="./img/SP/blog/blog01.png"
                                    srcset="./img/SP/blog/blog01.png 1x, ./img/SP/blog/blog01@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img no-pc">
                                <img src="./img/PC/blog/blog01.png"
                                    srcset="./img/PC/blog/blog01.png 1x, ./img/PC/blog/blog01@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img pc">
                            </div>
                        </div>
                        <div class="blog-list__item--right">
                            <h2 class="c-card__title blog-list__card__title">アルペジオが劇的に向上する3つの習慣</h2>
                            <p class="c-card__date blog-list__card__date">2022.01.01</p>
                            <p class="blog-list__card__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="c-card blog-list__card">
                <a href="./blog_details.html">
                    <div class="blog-list__item">
                        <div class="blog-list__item--left">
                            <div class="c-card__img-container">
                                <div class="c-card__label blog-list__card__label">集客方法</div>
                                <img src="./img/SP/blog/blog02.png"
                                    srcset="./img/SP/blog/blog02.png 1x, ./img/SP/blog/blog02@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img no-pc">
                                <img src="./img/PC/blog/blog02.png"
                                    srcset="./img/PC/blog/blog02.png 1x, ./img/PC/blog/blog02@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img pc">
                            </div>
                        </div>
                        <div class="blog-list__item--right">
                            <h2 class="c-card__title blog-list__card__title">集客してる間は売れないという法則</h2>
                            <p class="c-card__date blog-list__card__date">2022.01.01</p>
                            <p class="blog-list__card__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="c-card blog-list__card">
                <a href="./blog_details.html">
                    <div class="blog-list__item">
                        <div class="blog-list__item--left">
                            <div class="c-card__img-container">
                                <div class="c-card__label blog-list__card__label">SNS</div>
                                <img src="./img/SP/blog/blog03.png"
                                    srcset="./img/SP/blog/blog03.png 1x, ./img/SP/blog/blog03@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img no-pc">
                                <img src="./img/PC/blog/blog03.png"
                                    srcset="./img/PC/blog/blog03.png 1x, ./img/PC/blog/blog03@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img pc">
                            </div>
                        </div>
                        <div class="blog-list__item--right">
                            <h2 class="c-card__title blog-list__card__title">フォロワーではなくファンを増やせとは？</h2>
                            <p class="c-card__date blog-list__card__date">2022.01.01</p>
                            <p class="blog-list__card__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="c-card blog-list__card">
                <a href="./blog_details.html">
                    <div class="blog-list__item">
                        <div class="blog-list__item--left">
                            <div class="c-card__img-container">
                                <div class="c-card__label blog-list__card__label">ギター</div>
                                <img src="./img/SP/blog/blog01.png"
                                    srcset="./img/SP/blog/blog01.png 1x, ./img/SP/blog/blog01@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img no-pc">
                                <img src="./img/PC/blog/blog01.png"
                                    srcset="./img/PC/blog/blog01.png 1x, ./img/PC/blog/blog01@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img pc">
                            </div>
                        </div>
                        <div class="blog-list__item--right">
                            <h2 class="c-card__title blog-list__card__title">アルペジオが劇的に向上する3つの習慣</h2>
                            <p class="c-card__date blog-list__card__date">2022.01.01</p>
                            <p class="blog-list__card__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="c-card blog-list__card">
                <a href="./blog_details.html">
                    <div class="blog-list__item">
                        <div class="blog-list__item--left">
                            <div class="c-card__img-container">
                                <div class="c-card__label blog-list__card__label">集客方法</div>
                                <img src="./img/SP/blog/blog02.png"
                                    srcset="./img/SP/blog/blog02.png 1x, ./img/SP/blog/blog02@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img no-pc">
                                <img src="./img/PC/blog/blog02.png"
                                    srcset="./img/PC/blog/blog02.png 1x, ./img/PC/blog/blog02@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img pc">
                            </div>
                        </div>
                        <div class="blog-list__item--right">
                            <h2 class="c-card__title blog-list__card__title">集客してる間は売れないという法則</h2>
                            <p class="c-card__date blog-list__card__date">2022.01.01</p>
                            <p class="blog-list__card__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="c-card blog-list__card">
                <a href="./blog_details.html">
                    <div class="blog-list__item">
                        <div class="blog-list__item--left">
                            <div class="c-card__img-container">
                                <div class="c-card__label blog-list__card__label">SNS</div>
                                <img src="./img/SP/blog/blog03.png"
                                    srcset="./img/SP/blog/blog03.png 1x, ./img/SP/blog/blog03@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img no-pc">
                                <img src="./img/PC/blog/blog03.png"
                                    srcset="./img/PC/blog/blog03.png 1x, ./img/PC/blog/blog03@2x.png 2x" alt="ブログ画像01"
                                    class="c-card__img blog-list__card__img pc">
                            </div>
                        </div>
                        <div class="blog-list__item--right">
                            <h2 class="c-card__title blog-list__card__title">フォロワーではなくファンを増やせとは？</h2>
                            <p class="c-card__date blog-list__card__date">2022.01.01</p>
                            <p class="blog-list__card__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="c-card blog-list__card">
            <a href="./blog_details.html">
                <div class="blog-list__item">
                    <div class="blog-list__item--left">
                        <div class="c-card__img-container">
                            <div class="c-card__label blog-list__card__label">ギター</div>
                            <img src="./img/SP/blog/blog01.png"
                                srcset="./img/SP/blog/blog01.png 1x, ./img/SP/blog/blog01@2x.png 2x" alt="ブログ画像01"
                                class="c-card__img blog-list__card__img no-pc">
                            <img src="./img/PC/blog/blog01.png"
                                srcset="./img/PC/blog/blog01.png 1x, ./img/PC/blog/blog01@2x.png 2x" alt="ブログ画像01"
                                class="c-card__img blog-list__card__img pc">
                        </div>
                    </div>
                    <div class="blog-list__item--right">
                        <h2 class="c-card__title blog-list__card__title">アルペジオが劇的に向上する3つの習慣</h2>
                        <p class="c-card__date blog-list__card__date">2022.01.01</p>
                        <p class="blog-list__card__text">
                            本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <!-- ページネーション -->
        <nav class="c-pagination blog-list__pagination">
            <ul class="c-pagination__inner blog-list__pagination__inner">
                <li><a href="#" class="c-pagination__link blog-list__pagination__link active">1</a></li>
                <li><a href="#" class="c-pagination__link blog-list__pagination__link">2</a></li>
                <li><a href="#" class="c-pagination__link blog-list__pagination__link">3</a></li>
                <li class="blog-list__pagination__ellipsis">･･･</li>
                <li><a href="#" class="c-pagination__link blog-list__pagination__link">9</a></li>
            </ul>
        </nav>
        <div class="u-pos-fixed u-bottom-0 u-right-0 js-fixed-btn-pc">
            <button class="c-button u-mr-100 u-ml-auto js-go-top">
                <img src="./img/icon/to-top.svg" alt="トップへ戻る">
            </button>
            <button class="c-button--red c-button--mid u-mt-30"
                onclick="location.href='./contact_form.html'">お問い合わせ</button>
        </div>
        <div class="u-pos-fixed u-l-50 u-bottom-0 js-fixed-btn-no-pc">
            <button class="c-button u-ml-auto js-go-top">
                <img src="./img/icon/to-top.svg" alt="トップへ戻る">
            </button>
            <button class="c-button--red c-button--mid u-mt-19"
                onclick="location.href='./contact_form.html'">お問い合わせ</button>
        </div>
    </section>
    <footer id="footer">
        <div class="main-wrapper footer-wrapper">
            <nav class="footer__nav">
                <ul>
                    <li><a href="./index.html" class="u-font--white u-font--bold footer__nav__itemlink">ホーム</a></li>
                    <li><a href="./plan.html" class="u-font--white u-font--bold footer__nav__itemlink">料金</a></li>
                    <li><a href="./blog_list.html" class="u-font--white u-font--bold footer__nav__itemlink">ブログ</a>
                    </li>
                    <li><a href="./notice_list.html" class="u-font--white u-font--bold footer__nav__itemlink">お知らせ</a>
                    </li>
                    <li><a href="./result_list.html" class="u-font--white u-font--bold footer__nav__itemlink">卒業実績</a>
                    </li>
                </ul>
            </nav>
            <img src="./img/icon/footer-logo.svg" alt="footer-logo" class="footer__logo">
            <small class="copyright u-font--white">
                Copyright © 2021 KITAMURA music school Inc. All Rights
            </small>
            <nav class="footer__sns__nav">
                <ul>
                    <li><a href="#"><img src="./img/icon/twitter.svg" alt="twitter"></a></li>
                    <li><a href="#"><img src="./img/icon/facebook.svg" alt="facebook"></a></li>
                    <li><a href="#"><img src="./img/icon/youtube.svg" alt="youtube"></a></li>
                    <li><a href="#"><img src="./img/icon/instagram.svg" alt="instagram"></a></li>
                </ul>
            </nav>
        </div>
    </footer>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./lib/slick.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>