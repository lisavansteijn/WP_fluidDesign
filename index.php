<?php get_header(); ?>
  <body>
    <main role="main" class="container fd-home-container">
      <?php if(is_user_logged_in()): ?>
      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>
      <div>
        <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
          <h2>
            <a href="<?php the_permalink() ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <?php the_content(); ?>
        <?php endwhile; else: ?>
          <p>There no posts to show</p>
        <?php endif; ?>
      </div>
    <?php else: ?>

        <div class="fd-center-div w-100">
          <h1 class="col text-center" id="countdown-text"></h1>
        </div>

    <?php endif; ?>
    </main><!-- /.container -->
<?php get_footer(); ?>
