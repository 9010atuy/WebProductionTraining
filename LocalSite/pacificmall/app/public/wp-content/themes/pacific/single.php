<!-- 投稿のテンプレート -->
<?php get_header(); ?>
<section id="contents">
  <?php
  // 記述すべき記事がのこっていればture
  if (have_posts()) :
    while (have_posts()) :
      // 処理対象の記事を一つWordPress内部にセットする
      // have_postsで利用するカウンタもすすめる<-これがないと無限ループになりうる
      the_post();
      get_template_part('content');
    endwhile;
  endif;
  ?>
</section> <!-- #contents end -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>