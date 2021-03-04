<section class="image-fluid section-bg-image-order" style="background-image: url(<?php echo get_theme_mod( 'dlc_bg_order_image' ); ?>)">
      <div class="container">
        <div class="row">
          <h2 class="col-12 title-section-order ">Gostaria de Fazer um Pedido?</h2>
          <div class="col-6 container-text-order">
            <p style="color:<?php echo get_theme_mod( 'dlc_order_description_color' ); ?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release</p>
          </div>
          <div class=" col-6 container-form-order">
            <form>
              <div class="form-group" onsubmit="sendWhatsappOrder(event,this)">
                <label for="orderName">Nome</label>
                <input type="text" class="form-control" id="orderName" placeholder="Nome">
              </div>
              <div class="form-group">
                <label for="orderEmail">Email</label>
                <input type="email" class="form-control" id="orderEmail" aria-describedby="emailHelp" placeholder="exemplo@emxemplo.com">
                <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu email</small>
              </div>
              <div class="form-group">
                <label for="orderPhone">Telefone</label>
                <input type="text" class="form-control" id="orderPhone" placeholder="(11) 99999-9999">
                <small id="explain" class="form-text text-muted">Você será redirecionado para o whatsApp para realizar seu pedido</small>
              </div>
              <button type="submit" class="btn button-order-form">Fazer um Pedido</button>
            </form>
          </div>
        </div>
      </div>
    </section>