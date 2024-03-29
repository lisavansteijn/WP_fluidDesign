    <div class="footer">
      <!-- footer navbar -->
      <nav class="navbar fd-footer-base col-12 w-100">
        <div class="col-3 float-right">
          <img style="width:60px;" src="<?php bloginfo('template_url'); ?>/img/fluiddesign_logo_dd.svg">
        </div>
        <div class="col-3 text-right fd-footer-page">
          <?php
            wp_nav_menu([
              'menu'            => 'footer',
              'theme_location'  => 'footer',
              'container'       => 'div',
              'container_id'    => '',
              'container_class' => 'fd-footer',
              'menu_id'         => false,
              'menu_class'      => 'navbar-nav mr-auto text-center',
              'depth'           => 0,
              'fallback_cb'     => 'bs4navwalker::fallback',
              'walker'          => new bs4navwalker()
            ]);
          ?>
        </div>
        <div class="col-3">
          <ul>
            <p>Privacy statement</p>
            <p>Algemene voorwaarden</p>
            <p>Cookie beleid</p>
          </ul>
        </div>
        <div class="col-3 float-right">
          <ul style="list-style-type: none;">
            <li class="font-weight-bold">Contact:</li>
            <li><a href="mailto:hey@fluiddesignstudio.nl">hey@fluiddesignstudio.nl</a></li>
            <li>06 40 25 88 53</li>
            <li>Contactweg 36</li>
            <li>1014 AN Amsterdam</li>
          </ul>
        </div>
      </nav>
    </div>

    <footer class="container-fluid">
      <div class="footer-text row w-100">
        <div class="col-6">
          <p style="margin:0px;">Copyright &#169; - Ontwikkeld door Fluiddesign</p>
        </div>
        <div class="col-6 text-right">
          <div class="footer-icons">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
            <a class="text-white" href="https://www.instagram.com/fluiddesignstudio.nl/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a class="text-white" href="https://nl.pinterest.com/36df643a75a36fa1ff55aad4220021/"><i class="fa fa-pinterest footer-icons" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
  </body>
</html>
