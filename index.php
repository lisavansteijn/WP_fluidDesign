<?php get_header(); ?>
  <body>
    <main role="main" class="container fd-home-container">
      <div>
        <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: ?>
          <p>There no posts to show</p>
        <?php endif; ?>
      </div>
        <div class="fd-center-div w-100">
          <h1 class="col text-center" id="countdown-text"></h1>
        </div>
    </main><!-- /.container -->
<?php get_footer(); ?>
