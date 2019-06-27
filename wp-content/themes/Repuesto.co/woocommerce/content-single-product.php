<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;


/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="header-img-four">
    <div class="mask-item-img">
      <h3><?php the_title(); ?></h3>
    </div>
  </div>

  <section class="details">
    <div class="container">
      <!--       Detail Product-->
      <div class="row no-gutters">
        <!--               picture product-->
        <div class="col-md-6">
              <?php
          /**
           * Hook: woocommerce_before_single_product_summary.
           *
           * @hooked woocommerce_show_product_sale_flash - 10
           * @hooked woocommerce_show_product_images - 20
           */
          do_action( 'woocommerce_before_single_product_summary' );
          ?>
        </div>

        <!--                Options Product-->
        <div class="col-md-6">
          <div class="pt-0 pr-2 pb-2 pl-1 pl-md-5">
            <!--                       Judul-->
            <div class="mb-4 border-full-2px-solid border-top-0 border-left-0 border-right-0 border-color-inverse">
              <h6 class="text-muted font-size-08 text-uppercase ">Producto:</h6>
              <h1><?php the_title(); ?></h1>
            </div>

            <div class="mb-5 ">
              <h6 class="text-muted font-size-08 text-uppercase ">Precio:</h6>
              <h4>$ 194.000</h4>
            </div>

            <div class="mb-5 ">
              <h6 class="text-muted font-size-08 text-uppercase ">Categoria:</h6>

              
                <h4><?php echo $product->get_categories( ', ', ' ' . _n( ' ', '  ', $cat_count, 'woocommerce' ) . ' ', ' ' ); ?></h4>
          
              
            </div>
            <div class="mb-4 border-full-2px-solid border-top-0 border-left-0 border-right-0 border-color-inverse">
              <h6 class="text-muted font-size-08 text-uppercase ">Año:</h6>
              <h4>2016-2019</h4>
            </div>
            <!--Button-->
            <div class="btn-see-two flex">
              <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                <?php
                do_action( 'woocommerce_before_add_to_cart_quantity' );

                woocommerce_quantity_input( array(
                  'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                  'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                  'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                ) );

                do_action( 'woocommerce_after_add_to_cart_quantity' );
                ?>

                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt btn-shop"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
              </form>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--    Description / Details / shipping -->
    <div class="container tabs-info">
      <ul class="nav nav-tabs">
        <li class="nav-other ">
          <a class="nav-link active" data-toggle="tab" href="#home">Descripción</a>
        </li>
        <li class="nav-other">
          <a class="nav-link" data-toggle="tab" href="#menu1">Detalles</a>
        </li>

      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane container active" id="home"><?php the_content(); ?></div>
        <div class="tab-pane container fade" id="menu1">hey</div>

      </div>
  </section>

  <section class="products-relation">
    <h2 class="title-products ">Productos
      <span class="word-color ">relacionados</span>
    </h2>
    <div class="card-group">
        <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 4 ); ?>
         <?php $loop = new WP_Query( $args ); ?>

         <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
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














































<div class="container" id="product-<?php the_ID(); ?>" style="display: none;" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
