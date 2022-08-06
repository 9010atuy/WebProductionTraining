<?php get_header(); ?>

<?php get_template_part('./template-parts/contact-button'); ?>

<div class="c-headline headline--notice">
    <p class="c-headline-text">お知らせ</p>
</div>

<?php get_template_part('./template-parts/breadcrumbs'); ?>

<section class="notice-list">
    <?php
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
    $args = array(
        'paged' => $paged,
        'post_type' => 'notice',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $the_query = new WP_Query($args);
    ?>
    <div class="content-area">
        <h2 class="c-head-lower">お知らせ一覧</h2>
        <ul>
            <?php
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
            ?>
                    <li class="notice-list__item notice-list__item--top">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="notice-list__item-text">
                            <p class="notice-list__time"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                            <p class="notice-list__title">
                                <?php
                                if (mb_strlen($post->post_title) > 35) {
                                    $title = mb_substr($post->post_title, 0, 35);
                                    echo $title . '...';
                                } else {
                                    echo $post->post_title;
                                }
                                ?>
                            </p>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php get_template_part('./template-parts/pager', '', $the_query); ?>
</section>

<?php get_footer(); ?>