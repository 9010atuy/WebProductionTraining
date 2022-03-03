<?php get_header(); ?>
<section id="contents">
  <header class="page-header">
    <h1 class="page-title">
      <?php single_cat_title(); ?>
    </h1>
  </header>
  <div class="posts">
    <?php
    // 記述すべき記事がのこっていればture
    if (have_posts()) :
      while (have_posts()) :
        // 処理対象の記事を一つWordPress内部にセットする
        // have_postsで利用するカウンタもすすめる<-これがないと無限ループになりうる
        the_post();
        get_template_part('content-archive');
      endwhile;
    endif;
    ?>
  </div>
</section> <!-- #contents end -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>