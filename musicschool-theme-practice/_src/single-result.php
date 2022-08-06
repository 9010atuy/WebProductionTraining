<?php get_header(); ?>

<?php get_template_part('./template-parts/contact-button'); ?>

<?php get_template_part('/template-parts/breadcrumbs'); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="result-details">
        <div class="content-area content-area--result-details">
            <div class="c-col-main c-col-main--result">
                <div class="col-main-body">
                    <div class="c-result-block__img-area c-result-block__img-area--detail-top">
                        <p class="c-result-block__img c-result-block__img--detail-top">
                            <?php the_post_thumbnail('large'); ?>
                        </p>
                        <p class="c-result-block__tag">
                            <?php
                            if (has_term('', 'result_tag', $post->ID)) :
                                $post_term = get_the_terms($post->ID, 'result_tag');
                                echo $post_term[0]->name;
                            endif;
                            ?>
                        </p>
                    </div>
                    <div class="c-result-details-title-area">
                        <h1 class="c-result-details-title"><?php the_title(); ?></h1>
                        <p class="c-result-details-time">
                            <time datetime="the_time('Y-m-d')">
                                <?php the_time('Y.m.d'); ?>
                            </time>
                        </p>
                    </div>
                    <div class="c-result-details-body">
                        <div class="c-result-details-body__table-area">
                            <table class="c-result-details-body__table">
                                <tr>
                                    <th class="c-result-details-body__table-head">名前</th>
                                    <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, '名前', true); ?></td>
                                </tr>
                                <tr>
                                    <th class="c-result-details-body__table-head">職業</th>
                                    <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, '職業', true); ?></td>
                                </tr>
                                <tr>
                                    <th class="c-result-details-body__table-head">ジャンル</th>
                                    <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, 'ジャンル', true); ?></td>
                                </tr>
                                <tr>
                                    <th class="c-result-details-body__table-head">実績</th>
                                    <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, '実績', true) ?></td>
                                </tr>
                                <tr>
                                    <th class="c-result-details-body__table-head">SNS</th>
                                    <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, 'sns', true); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="c-result-details-body__text-area">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('./template-parts/single-arrows-area', '', $args = array('image_area' => 'has', 'post_type' => 'result')); ?>
            <?php get_template_part('./template-parts/single-related-area', '', $args = array('post_type' => 'result')); ?>
        </div>
    </section>
<?php endwhile; ?>

<footer class="footer">
    <div class="footer-box">
        <nav class="footer-nav" aria-label="フッターナビゲーション">
            <ul class="footer-nav-list">
                <li class="footer-nav-list__item">
                    <a href="./index.html" class="footer-nav-list__item-text">ホーム</a>
                </li>
                <li class="footer-nav-list__item">
                    <a href="./plan.html" class="footer-nav-list__item-text">料金</a>
                </li>
                <li class="footer-nav-list__item">
                    <a href="./blog-list.html" class="footer-nav-list__item-text">ブログ</a>
                </li>
                <li class="footer-nav-list__item">
                    <a href="./notice-list.html" class="footer-nav-list__item-text">お知らせ</a>
                </li>
                <li class="footer-nav-list__item">
                    <a href="./result-list.html" class="footer-nav-list__item-text">卒業実績</a>
                </li>
            </ul>
        </nav>
        <a href="./index.html">
            <p class="footer-logo"><img src="./images/common/logo-white.svg" alt="きたむらミュージックスクール"></p>
        </a>
        <p class="footer-copy">Copyright © 2021 KITAMURA music school Inc. All Rights</p>
        <ul class="footer-sns-area">
            <li class="footer-sns-area__item">
                <a href="" target="_blank" rel="noopener noreferrer"><img src="./images/common/icon-twitter.svg" alt="twitterへのリンク(別タブで開きます)"></a>
            </li>
            <li class="footer-sns-area__item">
                <a href="" target="_blank" rel="noopener noreferrer"><img src="./images/common/icon-facebook.svg" alt="facebookへのリンク(別タブで開きます)"></a>
            </li>
            <li class="footer-sns-area__item">
                <a href="" target="_blank" rel="noopener noreferrer"><img src="./images/common/icon-youtube.svg" alt="youtubeへのリンク(別タブで開きます)"></a>
            </li>
            <li class="footer-sns-area__item">
                <a href="" target="_blank" rel="noopener noreferrer"><img src="./images/common/icon-instagram.svg" alt="instagramへのリンク(別タブで開きます)"></a>
            </li>
        </ul>
    </div>
</footer>

</body>

</html>