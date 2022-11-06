<footer id="footer">
    <div class="main-wrapper footer-wrapper">
        <nav class="footer__nav">
            <ul>
                <li><a href="<?php echo get_template_directory_uri(); ?>/index.html" class="u-font--white u-font--bold footer__nav__itemlink">ホーム</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/plan.html" class="u-font--white u-font--bold footer__nav__itemlink">料金</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/blog_list.html" class="u-font--white u-font--bold footer__nav__itemlink">ブログ</a></li>
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
<!-- js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" id="script" data-uri="<?php echo get_template_directory_uri(); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>