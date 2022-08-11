<?php get_header(); ?>

<?php get_template_part('./template-parts/contact-button'); ?>
<?php get_template_part('./template-parts/breadcrumbs'); ?>

<section class="contact-form c-message">
    <div class="content-area content-area--contact-form">
        <p class="c-message-description">当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>通常３営業日以内にメールにてご連絡させていただきます。</p>
        <?php echo do_shortcode('[contact-form-7 id="184" title="お問い合わせ"]') ?>
    </div>
</section>

<?php get_footer(); ?>