<?php get_header(); ?>
<?php get_template_part('./template-parts/contact-button'); ?>
<?php get_template_part('./template-parts/breadcrumbs'); ?>
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
                            <?php
                            if (has_term('', 'blog_tag', $post->ID)) :
                                $post_term = get_the_terms($post->ID, 'blog_tag');
                                echo $post_term[0]->name;
                            endif;
                            ?>
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
                    <div class="c-article-details-body">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php get_template_part('./template-parts/single-arrows-area', '', $args = array('image_area' => 'has', 'post_type' => 'blog')); ?>
                <?php get_template_part('./template-parts/single-related-area', '', $args = array('post_type' => 'blog')); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>