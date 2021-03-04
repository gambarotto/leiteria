    <section class="image-fluid section-bg-image-about" style="background-image: url(<?php echo get_theme_mod( 'dlc_about_bg_image' ); ?>)">
      <div class="container">
        <div class="row">
          <div class="col-6 description-store">
            <div class="container-description">
              <h2 class="title-hero-image">
                  Leiteria Catarina
              </h2>
              <p style="color:<?php echo get_theme_mod( 'dlc_about_description_color' ); ?>">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <a href="/" class="button-products">Conheça nossos Produtos</a>
            </div>
          </div>
          <div class="col-6 image-button-store">
            <div class="container-image-button ">
              <?php if(!empty(get_theme_mod('dlc_about_image'))):?>
                  <img src="<?php echo get_theme_mod('dlc_about_image'); ?>" alt="about-image" class="image-fluid rounded about-image">
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>