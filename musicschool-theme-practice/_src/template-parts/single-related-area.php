<div class="c-col-main--related">
    <?php
    // ブログタグのタームを取得
    $terms = get_the_terms($post->ID, $args['post_type'] . '_tag');
    // ターム空判断
    if (!empty($terms)) :
        // タームの数繰り返し
        foreach ($terms as $term) :
            $args = array(
                'posts_per_page' => 3, // 取得件数
                'post_type' => $args['post_type'], // 投稿タイプ「ブログ」
                'taxonomy' => $args['post_type'] . '_tag', // タクソノミー「blog_tag」
                'term' => $term->slug, // ターム名＝記事と同じターム
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC' // 降順でソート
            );
            $the_query = new WP_Query($args);
    ?>
            <p class="c-blog-section-name c-blog-section-name--related">関連記事</p>
            <?php
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
            ?>
                    <a href="<?php echo get_permalink($post->ID); ?>" class="c-blog-block c-blog-block--related ">
                        <div class="c-blog-block__img-area c-blog-block__img-area--related">
                            <p class="c-blog-block__img c-blog-block__img--related">
                                <?php
                                $thumbnail_id = get_post_thumbnail_id($post->ID);
                                $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                                if (get_post_thumbnail_id($post->ID)) :
                                ?>
                                    <img src="<?php echo $thumb_url[0]; ?>" alt="">
                                <?php endif; ?>
                            </p>
                            <p class="c-blog-block__tag"><?php echo $term->name; ?></p>
                        </div>
                        <div class="c-blog-block__text-area">
                            <p class="c-blog-block__title c-blog-block__title--related">
                                <?php
                                if (mb_strlen($post->post_title) > 32) {
                                    $title = mb_substr($post->post_title, 0, 32);
                                    echo $title . '...';
                                } else {
                                    echo $post->post_title;
                                }
                                ?>
                            </p>
                            <p class="c-blog-block__date c-blog-block__date--related">
                                <time datetime="<?php echo the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
                            </p>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>