<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
 <section class="products d-none d-sm-block " id="products " style="padding-top: 100px;">
    <h2 class="title-products " style="margin-top: 50px;">Repuestos en
      <span class="word-color ">stock</span> para despacho inmediato</h2>
    <div class="card-group ">
             

                 <?php while ( have_posts() ) : the_post(); global $product; ?>
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
    <?php endwhile; ?>
    </div>
  </section>

<?php

get_footer( 'shop' ); ?>
