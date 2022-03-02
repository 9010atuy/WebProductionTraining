<?php get_header(); ?>
<section id="contents">
  <?php
  // 記述すべき記事がのこっていればture
  if (have_posts()) :
    while (have_posts()) :
      // 処理対象の記事を一つWordPress内部にセットする
      // have_postsで利用するカウンタもすすめる<-これがないと無限ループになりうる
      the_post();
  ?>
      <article>
        <header class="page-header">
          <h1 class="page-title">
            <?php
            the_title();
            ?>
          </h1>
        </header>
        <section class="entry-content">
          <?php
          // 記事を出力
          the_content();
          ?>
        </section>
      </article>
  <?php
    endwhile;
  endif;
  ?>
</section> <!-- #contents end -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>