<?php get_header(); ?>
<?php get_template_part('template-parts/contact-button'); ?>

<div class="c-breadcrumbs">
    <div class="c-breadcrumbs-text-area">
        <a href="index.html" class="c-breadcrumbs-text">ホーム</a>
        <p class="c-breadcrumbs-sign">&#62;</p>
        <a href="blog-list.html" class="c-breadcrumbs-text">ブログ</a>
        <p class="c-breadcrumbs-sign">&#62;</p>
        <a href="" class="c-breadcrumbs-text">ギター</a>
        <p class="c-breadcrumbs-sign">&#62;</p>
        <p class="c-breadcrumbs-text">アルペジオが劇的に向上する３つの習慣</p>
    </div>
</div>
<?php while (have_posts()) : the_post(); ?>
    <section class="blog-details">
        <div class="content-area content-area--blog-details">
            <div class="c-col-main">
                <div class="c-col-main-body">
                    <div class="c-blog-block__img-area c-blog-block__img-area--detail-top">
                        <p class="c-blog-block__img c-blog-block__img--detail-top">
                            <!-- サムネイル画像をlargeで表示 -->
                            <?php the_post_thumbnail('large'); ?>
                        </p>
                        <p class="c-blog-block__tag">
                            <?php if (has_term('', 'blog_tag', '$post->ID')) : $post_term = get_the_terms($post->ID, 'blog_tag');
                                echo $post_term[0]->name;
                            endif; ?>
                        </p>
                    </div>
                    <div class="c-article-details-title-area c-article-details-title-area">
                        <h1 class="c-article-details-title">
                            <?php the_title(); ?>
                        </h1>
                        <p class="c-article-details-time">
                            <!-- 記事の投稿時間を「Y-m-d」形式で出力 -->
                            <time datetime="<?php the_time('Y-m-d') ?>">
                                <?php the_time('Y.m.d'); ?>
                            </time>
                        </p>
                    </div>
                    <div class="c-article-details-share">
                        <a href="" class="c-article-details-share__item c-article-details-share__item--facebook">
                            <p class="c-article-details-share__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-facebook.svg" alt="facebook"></p>
                            <p class="c-article-details-share__text">Facebook</p>
                        </a>
                        <a href="" class="c-article-details-share__item c-article-details-share__item--twitter">
                            <p class="c-article-details-share__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-twitter.svg" alt="twitter"></p>
                            <p class="c-article-details-share__text">Twitter</p>
                        </a>
                        <a href="" class="c-article-details-share__item c-article-details-share__item--hatena">
                            <p class="c-article-details-share__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-hatena.svg" alt="hatena"></p>
                            <p class="c-article-details-share__text">Hatena</p>
                        </a>
                        <a href="" class="c-article-details-share__item c-article-details-share__item--line">
                            <p class="c-article-details-share__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-line.svg" alt="line"></p>
                            <p class="c-article-details-share__text">LINE</p>
                        </a>
                        <a href="" class="c-article-details-share__item c-article-details-share__item--pocket">
                            <p class="c-article-details-share__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-pocket.svg" alt="pocket"></p>
                            <p class="c-article-details-share__text">Pocket</p>
                        </a>
                    </div>
                    <div class="c-article-details-body">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="c-col-main--arrow">
                    <a href="" class="c-col-main--arrow-prev c-col-main--arrow-blog">
                        <p class="c-blog-section-name c-blog-section-name--arrow-prev">◀︎ 前の記事</p>
                        <div class="c-arrow-block">
                            <div class="c-arrow-block__img-area">
                                <p class="c-arrow-block__img"><img srcset="<?php echo get_template_directory_uri(); ?>/images/top/blog03.png 1x, <?php echo get_template_directory_uri(); ?>/images/top/blog03@2x.png 2x" alt=""></p>
                            </div>
                            <div class="c-arrow-block__text-area">
                                <p class="c-arrow-block__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="c-col-main--arrow-next c-col-main--arrow-blog">
                        <p class="c-blog-section-name c-blog-section-name--arrow-next">次の記事 ▶︎</p>
                        <div class="c-arrow-block">
                            <div class="c-arrow-block__img-area">
                                <p class="c-arrow-block__img"><img srcset="<?php echo get_template_directory_uri(); ?>/images/top/blog03.png 1x, <?php echo get_template_directory_uri(); ?>/images/top/blog03@2x.png 2x" alt=""></p>
                            </div>
                            <div class="c-arrow-block__text-area">
                                <p class="c-arrow-block__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="c-col-main--related">
                    <p class="c-blog-section-name c-blog-section-name--related">関連記事</p>
                    <a href="" class="c-blog-block c-blog-block--related ">
                        <div class="c-blog-block__img-area c-blog-block__img-area--related">
                            <p class="c-blog-block__img c-blog-block__img--related"><img srcset="<?php echo get_template_directory_uri(); ?>/images/top/blog03.png 1x, <?php echo get_template_directory_uri(); ?>/images/top/blog03@2x.png 2x" alt=""></p>
                            <p class="c-blog-block__tag">ギター</p>
                        </div>
                        <div class="c-blog-block__text-area">
                            <p class="c-blog-block__title c-blog-block__title--related">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            <p class="c-blog-block__date c-blog-block__date--related"><time datetime="2022-01-01">2022.01.01</time></p>
                        </div>
                    </a>
                    <a href="" class="c-blog-block c-blog-block--related">
                        <div class="c-blog-block__img-area c-blog-block__img-area--related">
                            <p class="c-blog-block__img c-blog-block__img--related"><img srcset="<?php echo get_template_directory_uri(); ?>/images/top/blog03.png 1x, <?php echo get_template_directory_uri(); ?>/images/top/blog03@2x.png 2x" alt=""></p>
                            <p class="c-blog-block__tag">ギター</p>
                        </div>
                        <div class="c-blog-block__text-area">
                            <p class="c-blog-block__title c-blog-block__title--related">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            <p class="c-blog-block__date c-blog-block__date--related"><time datetime="2022-01-01">2022.01.01</time></p>
                        </div>
                    </a>
                    <a href="" class="c-blog-block c-blog-block--related">
                        <div class="c-blog-block__img-area c-blog-block__img-area--related">
                            <p class="c-blog-block__img c-blog-block__img--related"><img srcset="<?php echo get_template_directory_uri(); ?>/images/top/blog03.png 1x, <?php echo get_template_directory_uri(); ?>/images/top/blog03@2x.png 2x" alt=""></p>
                            <p class="c-blog-block__tag">ギター</p>
                        </div>
                        <div class="c-blog-block__text-area">
                            <p class="c-blog-block__title c-blog-block__title--related">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            <p class="c-blog-block__date c-blog-block__date--related"><time datetime="2022-01-01">2022.01.01</time></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>