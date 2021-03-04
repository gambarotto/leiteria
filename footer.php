  <footer style="background-color:<?php echo get_theme_mod( 'dlc_footer_color' ); ?>">
    <div class="container footer-container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <?php if ( dynamic_sidebar('dlc_footer_first') ):
            
          endif;?>
        </div>
        <div class="col-md-4 col-sm-12">
          <?php if ( dynamic_sidebar('dlc_footer_second') ):
          endif;?>
        </div>
        <div class="col-md-4 col-sm-12">
          <?php if ( dynamic_sidebar('dlc_footer_third') ):
          endif;?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="line col-md-12 text-right">
            <?php echo get_theme_mod( 'dlc_footer_credit' ); ?>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(  ); ?>
  </footer>
</div>
</body>
</html>