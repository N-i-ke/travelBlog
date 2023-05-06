<aside id="sidebar">
  <section class="author">
    <img decoding="async" src="<?php echo esc_url(get_theme_file_uri('img/sidebar/author.jpg')); ?>" alt="テキストテキストテキスト">
    <h3 class="side-title">Name Name</h3>
    <p class="profile">
      プロフィールテキストテキストテキストテキストテキストテキストテキスト
      テキストテキストテキストテキストテキストテキストテキストテキストテキスト
      テキストテキストテキストテキストテキストテキストテキストテキストテキスト
    </p>
  </section>

  <?php get_search_form(); ?>

  <section class="archive">
    <?php dynamic_sidebar('sidebar'); ?>
  </section>
</aside>