<?php get_header(); 
get_template_part('partials/header-2'); ?>

<div style="width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;" >
	<div style="text-align: center;">
		
		 <h1 style="color: #CCC; font-size: 70px;">Page not Found</h1><br>
		 <h2 style="color: #CCC; font-size: 100px;">404</h2><br>
		 <a style="color: #e60065" href="<?php bloginfo('url'); ?>/index.php">Return to Home</a>
	</div>
</div>

section class="contact-container">
    <div class="form-contact">
      <div class="contact_header container">
        <h4>Escríbenos
        </h4>
        <p>Te ayudaremos con lo que necesites</p>
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

              <div>
                <div class="flex-content">
                  <label for="email">Correo</label>
                  <input type="email" name="email" id="email" />
                </div>
                <div class="flex-content">
                  <label for="select-choice" class="mid">Marca</label>
                  <select name="extraoptions" id="select-choice">
                    <option value="Choice 4">Seleccionar</option>
                    <option value="Choice 4">Lamborghini</option>
                    <option value="Choice 5">Kia</option>
                    <option value="Choice 6">Otro</option>
                  </select>
                </div>
                <div class="flex-content">
                  <label for="select-choice" class="mid">Modelo</label>
                  <select name="extraoptions" id="select-choice">
                    <option value="Choice 4">Seleccionar</option>
                    <option value="Choice 4">Alpine. A110.</option>
                    <option value="Choice 5">Abarth. 124 Spider. 595.</option>
                    <option value="Choice 6">Otro</option>
                  </select>
                </div>
              </div>
            </div>
            <div>
              <label for="comment">Comentario</label>
              <textarea cols="40" rows="10" name="comment" id="comment" class="required"></textarea>
            </div>
            <div class="btn-see-two">
              <button type="button" class="btn-primary site-button btn-block">Enviar </button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    </div>
    <div class="background-sorry">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner.jpg" alt="">
    </div>
  </section>

  <?php  get_template_part('partials/contact'); ?>
  <div class="img-footer">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-footer.svg" alt="">
  </div>

    </div>
<?php get_footer(); ?>