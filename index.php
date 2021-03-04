<?php get_header(); ?>
<section class="brightness">
  <div>
    <div class="hero-image-container">
      <?php
      $count = 0 ;
      $max=5;
      while ($count < $max):
        if (!empty(get_theme_mod('dlc_image'.$count))):?>
      <div class="hero-image img-fluid"
        style="background-image: url(<?php echo get_theme_mod('dlc_image'.$count); ?>)">
      </div>
      <?php endif;
        $count++;
      endwhile; ?>
    </div>
    <div class="container container-data-hero-image">
      <h2><?php echo get_theme_mod('dlc_title'); ?>
      </h2>
      <h3><?php echo get_theme_mod('dlc_subtitle'); ?>
      </h3>
      <a href="/">Conheça Nossos Produtos</a>
    </div>
  </div>
</section>
<div class="elevate">
  <?php if (get_theme_mod('dlc_about_activated') === true): ?>
  <section id="whoweare" class="img-fluid section-bg-image-about"
    style="background-image: url(<?php echo get_theme_mod('dlc_about_bg_image'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-6 description-store">
          <div class="container-description">
            <h2 class="title-hero-image">
              Leiteria Catarina
            </h2>
            <p
              style="color:<?php echo get_theme_mod('dlc_about_description_color'); ?>">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
            </p>
          </div>
        </div>
        <div class="col-md-6 container-image-store">
          <div class="image-about-div ">
            <?php if (!empty(get_theme_mod('dlc_about_image'))):?>
            <img
              src="<?php echo get_theme_mod('dlc_about_image'); ?>"
              alt="about-image" class="img-fluid about-image">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php if (get_theme_mod('dlc_order_activated') === true): ?>
  <section id="order" class="image-fluid section-bg-image-order"
    style="background-image: url(<?php echo get_theme_mod('dlc_bg_order_image'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-6 container-map" data-animate="left">
          <h2 class="col-12 title-section-order ">Gostaria de Fazer um Pedido?</h2>
          <div class="col-12 container-text-order">
            <p
              style="color:<?php echo get_theme_mod('dlc_order_description_color'); ?>">
              <?php echo get_theme_mod('dlc_order_description'); ?>
            </p>
          </div>
          <?php if (!empty(get_theme_mod('dlc_order_map'))):?>
          <iframe
            src="https://www.google.com/maps/embed?pb=<?php echo get_theme_mod('dlc_order_map'); ?>"
            width="80%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <?php endif; ?>
          <?php if (!empty(get_theme_mod('dlc_order_address'))):?>
          <p class="text-map"><?php echo get_theme_mod('dlc_order_address'); ?>
          </p>
          <?php endif; ?>
        </div>
        <div class=" col-md-6 container-form-order" data-animate="right">
          <form name="order" onsubmit="sendWhatsappOrder(event,this)">
            <div class="form-group">
              <label for="orderName">Nome</label>
              <input type="text" class="form-control" id="orderName" placeholder="Nome" title="Preencha o campo Nome"
                required>
            </div>
            <div class="form-group">
              <label for="orderEmail">Email</label>
              <input type="email" class="form-control" id="orderEmail" aria-describedby="emailHelp"
                placeholder="exemplo@emxemplo.com" required>
              <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu email</small>
            </div>
            <div class="form-group">
              <label for="orderPhone">Telefone</label>
              <input type="text" class="form-control" id="orderPhone" placeholder="(11) 99999-9999" required
                onkeypress="mask(this,maskPhone)">
              <small id="explain" class="form-text text-muted">Você será redirecionado para o whatsApp para realizar seu
                pedido</small>
            </div>
            <button type="submit" class="btn button-order-form">Fazer um
              Pedido</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php if (get_theme_mod('dlc_resale_activated') === true): ?>
  <section id="revendedor" class="img-fluid section-bg-image-resale"
    style="background-image: url(<?php echo get_theme_mod('dlc_bg_resale_image'); ?>)">
    <div class="container">
      <h2 class="title-resale-section" data-animate="top"><?php echo get_theme_mod('dlc_resale_title'); ?>
      </h2>
      <div class="col-8 container-text-resale" data-animate="top">
        <p
          style="color:<?php echo get_theme_mod('dlc_resale_description_color', '#777'); ?>">
          <?php echo get_theme_mod('dlc_resale_description'); ?>
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 container-resale">
          <div class=" col-md-6 container-form-resale" data-animate="left">
            <form name="resale" onsubmit="sendWhatsappResale(event,this)">
              <div class="form-group">
                <label for="resaleName">Nome</label>
                <input type="text" class="form-control" id="resaleName" placeholder="Nome" required>
              </div>
              <div class="form-group">
                <label for="resaleEmail">Email</label>
                <input type="email" class="form-control" id="resaleEmail" aria-describedby="emailHelp"
                  placeholder="exemplo@emxemplo.com" required>
              </div>
              <div class="form-group">
                <label for="resalePhone">Telefone</label>
                <input type="text" class="form-control" id="resalePhone" placeholder="(11) 99999-9999"
                  onkeypress="mask(this,maskPhone)" required>
              </div>
              <div class=" form-group form-direction">
                <label class="label-radios" for="radios">Conhece nossos produtos?</label>
                <div class="container-radio-product">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="product" id="yesproduct" value="yes" required
                      name=product>
                    <label class="form-check-label" for="yesproduct">Sim</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="product" id="noproduct" value="no" required
                      name=product>
                    <label class="form-check-label" for="noproduct">Não</label>
                  </div>
                </div>
              </div>
              <div class="form-group form-direction">
                <label class="label-radios2" for="radios">Já trabalhou com vendas?</label>
                <div class="container-radio-sale">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sale" id="yessale" value="yes" required>
                    <label class="form-check-label" for="yessale">Sim</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sale" id="nosale" value="no">
                    <label class="form-check-label" for="nosale">Não</label>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn button-resale-form">Entrar em Contato</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 container-img-resale" data-animate="right">
          <div class="image-fluid image-representative">
            <img
              src="<?php echo get_theme_mod('dlc_resale_image'); ?>"
              alt="image-resale" class="image-style">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php get_footer();
