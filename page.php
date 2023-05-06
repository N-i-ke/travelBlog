<?php get_header(); ?>

<div id="container" class="wrapper">
  <main>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <article>
        <h1 class="article-title"><?php the_title(); ?></h1>
        <?php the_post_thumbnail(); ?>
        <div class="text"><?php the_content(); ?></div>
      </article>
    <?php endwhile;endif; ?>
  </main>
  <!-- sidebar -->
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>