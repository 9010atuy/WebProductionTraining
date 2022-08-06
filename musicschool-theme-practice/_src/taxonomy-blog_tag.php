<?php get_header(); ?>
<?php get_template_part('./template-parts/contact-button'); ?>

<div class="c-headline headline--blog-list">
    <p class="c-headline-text">ブログ</p>
</div>
<?php get_template_part('./template-parts/breadcrumbs'); ?>
<section class="blog-list">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $the_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    $term_name = $the_term->name;
    $args = array(
        'paged' => $paged,
        'post_type' => 'blog',
        'tax_query' => array(
            array(
                'taxonomy' => 'blog_tag',
                'field' => 'slug',
                'terms' => $the_term,
            )
        ),
    );
    $the_query = new WP_Query($args);
    ?>
    <div class="content-area">
        <h2 class="c-head-lower"><?php echo $term_name; ?></h2>
        <?php
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
                $the_query->the_post();
        ?>
                <a href="<?php echo get_permalink($post->ID); ?>" class="c-blog-block c-blog-block--list">
                    <div class="c-blog-block__img-area c-blog-block__img-area--list">
                        <p class="c-blog-block__img c-blog-block__img--list">
                            <?php
                            // 現在の投稿のIDを条件にサムネイル画像のIDを取得
                            $thumbnail_id = get_post_thumbnail_id($post->ID);
                            // サムネイルIDを条件にサムネイル画像のURLを取得
                            $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                            if (get_post_thumbnail_id($post->ID)) :
                            ?>
                                <img srcset="<?php echo $thumb_url[0] ?>" alt="">
                            <?php endif; ?>
                        </p>
                        <p class="c-blog-block__tag">
                            <?php
                            $terms = get_the_terms($post->ID, 'blog_tag');
                            foreach ($terms as $term) :
                                echo $term->name;
                            endforeach;
                            ?>
                        </p>
                    </div>
                    <div class="c-blog-block__text-area">
                        <p class="c-blog-block__title c-blog-block__title--list">
                            <?php
                            if (mb_strlen($post->post_title) > 37) {
                                $title = mb_substr($post->post_title, 0, 37);
                                echo $title . '...';
                            } else {
                                echo $post->post_title;
                            }
                            ?>
                        </p>
                        <p class="c-blog-block__date c-blog-block__date--list">
                            <time datetime="<?php the_time('Y-m-d') ?>">
                                <?php the_time('Y.m.d') ?>
                            </time>
                        </p>
                        <p class="c-blog-block__text">
                            <!-- 投稿の概要を取得する -->
                            <?php echo get_the_excerpt(); ?>
                        </p>
                    </div>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <?php get_template_part('./template-parts/pager', '', $the_query); ?>
</section>
<?php get_footer(); ?>