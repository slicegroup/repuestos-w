<?php get_header(); ?>
 <div class="header-img-four">
    <div class="mask-item-img">
      <h3>Sobre nosotros</h3>
    </div>
  </div>


  <section class="about-page">
    <div class="row">
      <div class="col-md-6 about-content">
        <div class="father-about">
          <div class="iso">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/isotipo.svg" alt="">
          </div>
          <div class="about">
            <p>Nuestros clientes son adultos y propietarios de vehículos, aman que les trasmitan una información segura y acertada
              sobre lo que buscan y que les resuelvan rápido. Además, contamos con clientes antiguos y el propósito es hacer
              nuevos clientes en comercio electrónico.
            </p>
            <p>
              <span class="word-color">Misión</span>: Lograr ser una empresa líder en el mercado de ventas de repuestos automotores por Internet a
              nivel nacional.
            </p>
            <p>
              <span class="word-color">Visión</span>: Ser aliado estratégico a nivel mundial entre las grandes empresas y los consumidores de repuestos.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 about-content-two">
        <div class="form-contact">
          <div class="contact_header container">
            <h4>Contáctanos
            </h4>
          </div>
          <div id="contact_form">
            <form action="#" method="post">
              <fieldset>
                <div class="form-input">
                  <div class="flex-content">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" />
                  </div>
                  <div class="flex-content">
                    <label for="phone">Teléfono</label>
                    <input type="text" name="phone" id="phone">
                  </div>
                  <div class="flex-content">
                    <label for="email">Correo</label>
                    <input type="email" name="email" id="email" />
                  </div>
                  <div>
                    <label for="comment">Comentario</label>
                    <textarea cols="40" rows="10" name="comment" id="comment" class="required"></textarea>
                  </div>
                  <div class="re-flex">
                    <div class="btn-see-two flex">
                      <button type="button" class="btn-primary site-button btn-block">Enviar </button>
                    </div>
                    <div class="g-recaptcha" data-sitekey="clave-del-sitio">
                    </div>
                  </div>
              </fieldset>
            </form>
            </div>
          </div>
        </div>
  </section>

  <?php  get_template_part('partials/contact'); ?>
  <div class="img-footer">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-footer.svg" alt="">
  </div>


<?php get_footer(); ?>
