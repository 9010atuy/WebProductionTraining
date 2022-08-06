<?php get_header(); ?>

<?php get_template_part('./template-parts/contact-button'); ?>
<div class="c-headline headline--result">
    <p class="c-headline-text">卒業実績</p>
</div>
<?php get_template_part('./template-parts/breadcrumbs'); ?>

<section class="result-list">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $the_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    $term_name = $the_term->name;
    $args = array(
        'paged' => $paged,
        'post_type' => 'result',
        'tax_query' => array(
            array(
                'taxonomy' => 'result_tag',
                'field' => 'slug',
                'terms' => $the_term
            )
        )
    );
    $the_query = new WP_Query($args);
    ?>
    <div class="content-area content-area-result-list">
        <h2 class="c-head-lower"><?php echo $term_name ?></h2>
        <?php
        if ($the_query->have_posts()) :
            $i = 0;
            while ($the_query->have_posts()) :
                $the_query->the_post();
                if ($i % 2 == 0) :
        ?>
                    <div class="result-list__row">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="c-result-block c-result-block--list">
                            <div class="c-result-block__img-area c-result-block__img-area--list">
                                <p class="c-result-block__img c-result-block__img--list">
                                    <?php
                                    $thumbnail_id = get_post_thumbnail_id($post->ID);
                                    $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                                    if (get_post_thumbnail_id($post->ID)) :
                                    ?>
                                        <img src="<?php echo $thumb_url[0] ?>" alt="">
                                    <?php endif; ?>
                                </p>
                                <p class="c-result-block__tag">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'result_tag');
                                    foreach ($terms as $term) :
                                        echo $term->name;
                                    endforeach;
                                    ?>
                                </p>
                            </div>
                            <div class="c-result-block__text-area">
                                <p class="c-result-block__title c-result-block__title--list">
                                    <?php
                                    if (mb_strlen($post->post_title) > 33) {
                                        $title = mb_substr($post->post_title, 0, 33);
                                        echo $title . '...';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?>
                                </p>
                                <p class="c-result-block__date c-result-block__date--list">
                                    <time datetime="the_time('Y-m-d')">
                                        <?php the_time('Y.m.d'); ?>
                                    </time>
                                </p>
                            </div>
                        </a>
                    <?php else : ?>
                        <a href="<?php get_permalink($post->ID); ?>" class="c-result-block c-result-block--list">
                            <div class="c-result-block__img-area c-result-block__img-area--list">
                                <p class="c-result-block__img c-result-block__img--list">
                                    <?php
                                    $thumbnail_id = get_post_thumbnail_id($post->ID);
                                    $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                                    if (get_post_thumbnail_id($post->ID)) :
                                    ?>
                                        <img srcset="<?php echo $thumb_url[0] ?>" alt="">
                                    <?php endif; ?>
                                </p>
                                <p class="c-result-block__tag">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'result_tag');
                                    foreach ($terms as $term) :
                                        echo $term->name;
                                    endforeach;
                                    ?>
                                </p>
                            </div>
                            <div class="c-result-block__text-area">
                                <p class="c-result-block__title c-result-block__title--list">
                                    <?php
                                    if (mb_strlen($post->post_title) > 33) {
                                        $title = mb_substr($post->post_title, 0, 33);
                                        echo $title . '...';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?>
                                </p>
                                <p class="c-result-block__date c-result-block__date--list"><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d'); ?></time></p>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php $i++; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <?php get_template_part('./template-parts/pager', '', $the_query); ?>
</section>

<?php get_footer(); ?>