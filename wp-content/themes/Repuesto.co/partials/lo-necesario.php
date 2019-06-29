
  <section id="recomendation " class="recomendation ">
    <div class="img-back ">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car.svg ">
    </div>
    <h2 class="title-recommended ">Encuentra lo
      <span class="word-color ">necesario</span> para tu vehículo</h2>
    <div class='carrusel-slider container'>
      <div class='multiple-items carousel-products'>
  <?php $args = array(

      'orderby' => 'slug',
      'order' => 'ASC'
      );
      $product_categories = get_terms('product_cat', $args);

      foreach ($product_categories as $product_category) { ?>
         <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);
          $images = wp_get_attachment_image_src($thumbnail_id, 'medium'); ?>
              <div class="card wow fadeInDown " style="visibility: visible; animation-name: fadeInDown; ">
                <div class="card-categories ">
                  <div class="mask ">
                    <a href="<?php echo $url_category = get_term_link( $product_category ) ?> ">
                      <div class="title-categories ">
                        <h5><?php echo $product_category->name; ?></h5>
                      </div>
                    </a>
                  </div>
                  <?php var_dump($product_categories); ?>
                  <img src="<?php echo $images[0]; ?>">
                </div>
              </div>
       <?php
              }
            ?>
      </div>
    </div>
  </section>