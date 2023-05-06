  <footer id="footer">
    <div class="content wrapper">
      <section class="item">
        <h3 class="footer-title">About</h3>
        <p>
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
        <ul class="about-list">
          <li><a href="<?php echo esc_url(home_url('/profile/')); ?>" class="arrow">プロフィール詳細</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="arrow">お問い合わせ</a></li>
        </ul>
      </section>

      <section class="item">
        <h3 class="footer-title">Menu</h3>
        <ul class="menu-list">
          <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">NEWS</a></li>
          <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">COLUMN</a></li>
          <li><a href="<?php echo esc_url(home_url('/category/hotel/')); ?>">HOTEL</a></li>
        </ul>
      </section>

      <section class="item">
        <h3 class="footer-title">Twitter</h3>
        <a class="twitter-timeline" data-height="315" href="https://twitter.com/TwitterJP?ref_src=twsrc%5Etfw">Tweets by TwitterJP</a>
        <script async src="https://platform.twitter.com/widgets.js"></script>
      </section>
    </div>

    <p class="copyright">&copy; Travel Blog</p>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>