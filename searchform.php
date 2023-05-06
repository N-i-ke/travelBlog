<form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>">
  <input type="text" name="s" id="s" placeholder="キーワードで検索する">
  <button type="submit">
    <img decoding="async" src="<?php echo esc_url(get_theme_file_uri('img/common/search.png')); ?>" alt="">
  </button>
</form>