<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head()?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container-all-menu">
      <div class="container container-top-nav">
        <div class="row menu-container">
          <div class="col-3 col-sm-6 container-logo">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } ?>
          </div>
          <div class="col-9 col-sm-6 container-nav-menu">
            <?php
              if (has_nav_menu('primary')) {
                  wp_nav_menu(array(
                'theme_location'=>'primary',
                'container'=>'nav',
                'container_class'=>'primary_menu primary_menu-hover',
                'fallback_cb'=>false,
              ));
              }
            ; ?>
          </div>
        </div>
      </div>
    </div>
  </header>