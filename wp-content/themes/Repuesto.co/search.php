<?php
get_header();
?>
<?php if (have_posts() ): ?>
<div class="header-img-four">
      <div class="mask-item-img">
        <h3>Resultados</h3>
      </div>
    </div>
 <section class="products d-none d-sm-block " id="products " style="padding-top: 100px;">
    
    <div class="card-group ">
           
   <?php  while ( have_posts() ) : the_post(); global $product; ?>
      <div class="card-product wow fadeInDown " style="visibility: visible; animation-name: fadeInDown; ">
        <div class="card-image ">
          <img src="<?php echo get_the_post_thumbnail_url(); ?> ">
        </div>
        <div class="display-flex ">
          <div class="price ">
            <h5><?php echo $product->get_price_html(); ?></h5>
          </div>
          <div class="price ">
            <span style="text-decoration:line-through; ">
              <h6>$ 300.000</h6>
            </span>
          </div>
        </div>

        
        <div class="group-info ">
          <div class="line ">
          </div>
          <div class="title-card ">
            <a href="<?php the_permalink(); ?> ">
              <div class="flex-title ">
                <h5> <?php the_title(); ?></h5>
                <i class="fa fa-cart-plus " aria-hidden="true "></i>
              </div>
              <h6>Chevrolet Spark</h6>
              <p>2016-2019</p>
            </a>
          </div>
        </div>

      </div>
 <?php endwhile; 
else:
 ?>
 <section class="contact-container">
    <h3>Lo sentimos, no encontramos lo que buscas.</h3>
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

<?php endif; ?>

    </div>

   
  </section>



<?php
get_footer();
?>