<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/common/favicon.ico')); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <header id="header">
    <!-- h1ordivタグに切り替える -->
    <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
    <<?php echo $html_tag; ?> class="site-title wrapper">
    <!-- logoの画像ないから後で消しておくこと -->
      <a href="<?php echo esc_url(home_url()); ?>">
        <img decoding="async" src="<?php echo esc_url(get_theme_file_uri('img/common/logo.svg')); ?>" alt="Travel Blog">
      </a>
    </<?php echo $html_tag; ?>>

    <nav id="navi">
      <ul class="wrapper">
        <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">NEWS</a></li>
        <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">COLUMN</a></li>
        <li><a href="<?php echo esc_url(home_url('/category/hotel/')); ?>">HOTEL</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
      </ul>
    </nav>
  </header>