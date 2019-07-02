 <section class="products d-none d-sm-block " id="products ">
    <h2 class="title-products ">Repuestos en
      <span class="word-color ">stock</span> para despacho inmediato</h2>
    <div class="card-group ">
      <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 8 ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
      <a href="<?php the_permalink(); ?> ">
      <div class="card-product wow fadeInDown " style="visibility: visible; animation-name: fadeInDown; ">
        <div class="card-image ">
          <img src="<?php echo get_the_post_thumbnail_url(); ?> ">
        </div>
        <div class="display-flex ">
          <div class="price ">
            <h5><?php echo $product->get_price_html(); ?></h5>
          </div>
          <div class="price ">
            <span style="text-decoration:line-through; color:black;">
            </span>
          </div>
        </div>
        <div class="group-info ">
          <div class="line ">
          </div>
          <div class="title-card ">
              <div class="flex-title ">
                <h5> <?php the_title(); ?></h5>
                <i class="fa fa-cart-plus " aria-hidden="true "></i>
              </div>
              <h6>Chevrolet Spark</h6>
              <p>2016-2019</p>
            </div>
          </div>
      </div> 
      </a>
 <?php endwhile; ?>
 </section>
<!---****************************CARDS RESPOSNIVE CARRUSEL ****************************-->
  <section class="products d-block d-sm-none " id="products ">
    <h2 class="title-products ">Repuestos en
      <span class="word-color ">stock</span> para despacho inmediato</h2>
    <div class="card-group ">
      <div class="multiple-items-two">
        <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 8 ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="card-product wow fadeInDown " style="visibility: visible; animation-name: fadeInDown; ">
          <div class="card-image ">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
          <div class="display-flex ">
            <div class="price ">
              <h5><?php echo $product->get_price_html(); ?></h5>
            </div>
            <div class="price ">
              <span style="text-decoration:line-through; ">
              </span>
            </div>
          </div>

          <div class="group-info ">
            <div class="line ">
            </div>
            <div class="title-card ">
              <a href=" <?php the_permalink(); ?>">
                <div class="flex-title ">
                  <h5><?php the_title(); ?></h5>
                  <i class="fa fa-cart-plus " aria-hidden="true "></i>
                </div>
                <h6>Chevrolet Spark</h6>
                <p>2016-2019</p>
              </a>
            </div>
          </div>

        </div>
    <?php endwhile; ?>
        
      </div>
    </div>
    <a href=" ">
      <div class="btn-see ">
        <button type="button " class="btn-primary site-button btn-block ">Ver más </button>
      </div>
    </a>
  </section>