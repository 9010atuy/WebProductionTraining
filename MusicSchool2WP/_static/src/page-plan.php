<?php get_header(); ?>
<section id="plan-fv" class="js-fv">
    <div class="plan__fv-img c-fv__img">
        <h1 class="plan__message u-font--white u-font--bold c-fv__message">
            プラン・料金
        </h1>
    </div>
</section>
<?php  ?>
<section id="fee" class="main-wrapper">
    <h1 class="plan__title">料金体系</h1>
    <div class="fee__contents">
        <div class="fee__item fee__item--red u-font--bold">入会金 39,000円</div>
        <div class="fee__item"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/plus.svg" alt="プラス"></div>
        <div class="fee__item fee__item--red u-font--bold">月額料金</div>
    </div>
    <p class="fee__text">
        きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。
    </p>
</section>
<section id="monthly-plan" class="main-wrapper">
    <h1 class="plan__title">プラン内容・月額料金</h1>
    <div class="plan__table">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th rowspan="2" class="plan__th-red"><span>おすすめ</span>スタンダード<br class="no-pc">プラン</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th class="plan__th-black">ベーシック<br class="no-pc">プラン</th>
                    <th class="plan__th-black">プレミアム<br class="no-pc">プラン</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="plan__th u-font--bold">月額料金</th>
                    <td class="plan__td--strong u-font--bold">39,000円</td>
                    <td class="plan__td--strong u-font--bold u-font--red">59,000円</td>
                    <td class="plan__td--strong u-font--bold">128,000円</td>
                </tr>
                <tr>
                    <th class="plan__th">マンツーマン授業</th>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-black.svg" alt="circle-black">
                        <p class="plan__td__text">週１回</p>
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-red.svg" alt="circle-red">
                        <p class="plan__td__text">週２回</p>
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-black.svg" alt="circle-black">
                        <p class="plan__td__text">無制限</p>
                    </td>
                </tr>
                <tr>
                    <th class="plan__th">ビジネス基本講座</th>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-black.svg" alt="circle-black">
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-red.svg" alt="circle-red">
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-black.svg" alt="circle-black">
                    </td>
                </tr>
                <tr>
                    <th class="plan__th">練習ROOM利用</th>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-black.svg" alt="circle-black">
                        <p class="plan__td__text">月10時間</p>
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-red.svg" alt="circle-red">
                        <p class="plan__td__text">月20時間</p>
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-black.svg" alt="circle-black">
                        <p class="plan__td__text">無制限</p>
                    </td>
                </tr>
                <tr>
                    <th class="plan__th">ビジネスコンサル</th>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-hyphen.svg" alt="hyphen" class="plan__td__hyphen">
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-red.svg" alt="circle-red">
                        <p class="plan__td__text">月２回</p>
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-black.svg" alt="circle-black">
                        <p class="plan__td__text">月３回</p>
                    </td>
                </tr>
                <tr>
                    <th class="plan__th">コミュニティ<br class="no-pc">参加資格</th>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-hyphen.svg" alt="hyphen" class="plan__td__hyphen">
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-hyphen.svg" alt="hyphen" class="plan__td__hyphen">
                    </td>
                    <td>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/table-circle-black.svg" alt="circle-black">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="plan__additional">
        ※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。
    </p>
    <div class="u-pos-fixed u-bottom-0 u-right-0 js-fixed-btn-pc">
        <button class="c-button u-mr-100 u-ml-auto js-go-top">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/to-top.svg" alt="トップへ戻る">
        </button>
        <button class="c-button--red c-button--mid u-mt-31" onclick="location.href='<?php echo get_template_directory_uri(); ?>/contact_form.html'">お問い合わせ</button>
    </div>
    <div class="u-pos-fixed u-l-50 u-bottom-0 js-fixed-btn-no-pc">
        <button class="c-button u-ml-auto js-go-top">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/to-top.svg" alt="トップへ戻る">
        </button>
        <button class="c-button--red c-button--mid u-mt-19" onclick="location.href='<?php echo get_template_directory_uri(); ?>/contact_form.html'">お問い合わせ</button>
    </div>
</section>
<footer id="footer">
    <div class="main-wrapper footer-wrapper">
        <nav class="footer__nav">
            <ul>
                <li><a href="<?php echo get_template_directory_uri(); ?>/index.html" class="u-font--white u-font--bold footer__nav__itemlink">ホーム</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/plan.html" class="u-font--white u-font--bold footer__nav__itemlink">料金</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/blog_list.html" class="u-font--white u-font--bold footer__nav__itemlink">ブログ</a>
                </li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/notice_list.html" class="u-font--white u-font--bold footer__nav__itemlink">お知らせ</a>
                </li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/result_list.html" class="u-font--white u-font--bold footer__nav__itemlink">卒業実績</a>
                </li>
            </ul>
        </nav>
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/footer-logo.svg" alt="footer-logo" class="footer__logo">
        <small class="copyright u-font--white">
            Copyright © 2021 KITAMURA music school Inc. All Rights
        </small>
        <nav class="footer__sns__nav">
            <ul>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/twitter.svg" alt="twitter"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/facebook.svg" alt="facebook"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/youtube.svg" alt="youtube"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/instagram.svg" alt="instagram"></a></li>
            </ul>
        </nav>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>

</html>