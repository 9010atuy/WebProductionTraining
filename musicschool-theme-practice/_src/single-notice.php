<?php get_header(); ?>
<?php get_template_part('./template-parts/contact-button'); ?>

<?php get_template_part('./template-parts/breadcrumbs'); ?>

<?php if (have_posts()) : the_post(); ?>
    <section class="notice-details">
        <div class="content-area content-area--notice-details">
            <div class="c-col-main c-col-main--notice">
                <div class="c-col-main-body">
                    <div class="c-article-details-title-area c-article-details-title-area--notice">
                        <h1 class="c-article-details-title"><?php the_title(); ?></h1>
                        <p class="c-article-details-time"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                    </div>
                    <div class="c-article-details-body c-article-details-body--notice">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php get_template_part('./template-parts/single-arrows-area', '', $args = array('image_area' => 'has_not', 'post_type' => 'notice')); ?>
            </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>