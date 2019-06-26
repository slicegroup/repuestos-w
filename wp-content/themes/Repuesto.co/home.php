<?php get_header(); ?>
  <!-- end of navbar-->
  <!-- banner section -->
 <?php  get_template_part('partials/banner'); ?>
    <!--banner section end -->
 <?php  get_template_part('partials/widget'); ?>


  <?php  get_template_part('partials/product-stock'); ?>

<?php  get_template_part('partials/lo-necesario'); ?>

<?php  get_template_part('partials/about'); ?>
  
<?php  get_template_part('partials/repuestos'); ?>

  <section id="contact " class="contact ">
    <div class="group-one ">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer.svg ">
      <div class="text-footer ">
        <p>Encuentra todos los repuestos que necesites para tu automóvil de las diferentes marcas y modelos, entérate de sus
          ofertas y promociones</p>
        <div class="more-wiew ">
          <p>
            <a href="about.html ">Leer más</a>
          </p>
        </div>
      </div>
    </div>
    <div class="img-footer ">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-footer.svg " alt=" ">
    </div>

    <div class="group-two ">
      <div class="text-footer ">
        <h4>Contáctanos</h4>
        <div class="redes ">
          <i class="fa fa-phone "></i>
          <p class="number ">+57 (0) 3 8376 6284, </p>
          <p class="number "> +57 (0) 3 8376 6284</p>
        </div>
        <div class="redes ">
          <i class="fa fa-envelope-o " aria-hidden="true "></i>
          <p> comercial@repuesto.co</p>
        </div>
        <div class="redes ">
          <i class="fa fa-map-marker " aria-hidden="true "></i>
          <p>Western Union - Acciones y Valores; Av Colombia. Av Colombia. Av Colombia. Carrera 55 A 49 A - 7 Local 104, Medellin
            , Colombia.
          </p>

        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>






