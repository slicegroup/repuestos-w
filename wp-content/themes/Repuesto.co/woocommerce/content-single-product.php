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
      <h3>Clutch Valeo</h3>
    </div>
  </div>

  <section class="details">
    <div class="container">
      <!--       Detail Product-->
      <div class="row no-gutters">
        <!--               picture product-->
        <div class="col-md-6">
          <!-- <div class="row no-gutters w-100">
                            
            <div class="col-12 col-lg-10 flex-lg-last border-full-1px-solid border-color-a0">
              <div class="d-flex justify-content-center align-items-center w-100 px-5">
                <img src="https://dummyimage.com/400x600/e85de8/fff" class="img-fluid" id="main-image" style="max-height:600px;">
              </div>
            </div>
        
            <div class=" col-12 col-lg-2 flex-lg-first mb-md-0 mb-4" style="display:block">
              <div class="row no-gutters ">

                <div class="col-4 col-sm-3 col-lg-12 border-full-1px-solid border-color-a0 justify-content-center side-picture active" role="button"
                  data-target="side-1">
                  <div class="p-2 w-75">
                    <img src="https://dummyimage.com/400x600/e85de8/fff" class="img-fluid ">
                  </div>
                </div>

                <div class="col-4 col-sm-3 col-lg-12 border-full-1px-solid border-color-a0 justify-content-center side-picture" role="button"
                  data-target="side-2">
                  <div class="p-2 w-75">
                    <img src="https://dummyimage.com/400x600/6e5fe6/fff" class="img-fluid ">
                  </div>
                </div>
                <div class="col-4 col-sm-3 col-lg-12 border-full-1px-solid border-color-a0 justify-content-center side-picture" role="button"
                  data-target="side-3">
                  <div class="p-2 w-75">
                    <img src="https://dummyimage.com/400x600/61e66c/fff" class="img-fluid ">
                  </div>
                </div>
              </div>
            </div> -->
        </div>

        <!--                Options Product-->
        <div class="col-md-6">
          <div class="pt-0 pr-2 pb-2 pl-1 pl-md-5">
            <!--                       Judul-->
            <div class="mb-4 border-full-2px-solid border-top-0 border-left-0 border-right-0 border-color-inverse">
              <h6 class="text-muted font-size-08 text-uppercase ">Producto:</h6>
              <h1>Clutch Valeo</h1>
            </div>

            <div class="mb-5 ">
              <h6 class="text-muted font-size-08 text-uppercase ">Precio:</h6>
              <h4>$ 194.000</h4>
            </div>

            <div class="mb-5 ">
              <h6 class="text-muted font-size-08 text-uppercase ">Categoria:</h6>
              <h4>Repuesto electrico</h4>
            </div>
            <div class="mb-4 border-full-2px-solid border-top-0 border-left-0 border-right-0 border-color-inverse">
              <h6 class="text-muted font-size-08 text-uppercase ">Año:</h6>
              <h4>2016-2019</h4>
            </div>
            <!--Button-->
            <div class="btn-see-two flex">
              <button type="button" class="btn-primary site-button btn-block">Añadir a Carrito</button>
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
        <div class="tab-pane container active" id="home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima autem possimus deserunt quidem quod, eius, asperiores
          necessitatibus, ut doloremque enim quibusdam amet! Ipsum qui autem ratione fugiat consequuntur optio adipisci.</div>
        <div class="tab-pane container fade" id="menu1">hey</div>

      </div>
  </section>

  <section class="products-relation">
    <h2 class="title-products ">Productos
      <span class="word-color ">relacionados</span>
    </h2>
    <div class="card-group">
      <div class="card-product wow fadeInDown ">
        <div class="card-image ">
          <img src="assets/img/ejemplo_producto_2.jpg ">
        </div>
        <div class="display-flex ">
          <div class="price cout ">
            <h5>$ 350.000</h5>
          </div>
        </div>

        <div class="group-info ">
          <div class="line ">
          </div>
          <div class="title-card ">
            <a href=" ">
              <div class="flex-title ">
                <h5>Pistones</h5>
                <i class="fa fa-cart-plus " aria-hidden="true "></i>
              </div>
              <h6>Optra</h6>
              <p>2010-2019</p>
            </a>
          </div>
        </div>
      </div>
      <div class="card-product wow fadeInDown ">
        <div class="card-image ">
          <img src="assets/img/ejemplo_producto_2.jpg ">
        </div>
        <div class="display-flex ">
          <div class="price cout ">
            <h5>$ 350.000</h5>
          </div>
        </div>

        <div class="group-info ">
          <div class="line ">
          </div>
          <div class="title-card ">
            <a href=" ">
              <div class="flex-title ">
                <h5>Pistones</h5>
                <i class="fa fa-cart-plus " aria-hidden="true "></i>
              </div>
              <h6>Optra</h6>
              <p>2010-2019</p>
            </a>
          </div>
        </div>
      </div>
      <div class="card-product wow fadeInDown ">
        <div class="card-image ">
          <img src="assets/img/ejemplo_producto_2.jpg ">
        </div>
        <div class="display-flex ">
          <div class="price cout ">
            <h5>$ 350.000</h5>
          </div>
        </div>

        <div class="group-info ">
          <div class="line ">
          </div>
          <div class="title-card ">
            <a href=" ">
              <div class="flex-title ">
                <h5>Pistones</h5>
                <i class="fa fa-cart-plus " aria-hidden="true "></i>
              </div>
              <h6>Optra</h6>
              <p>2010-2019</p>
            </a>
          </div>
        </div>
      </div>
      <div class="card-product wow fadeInDown ">
        <div class="card-image ">
          <img src="assets/img/ejemplo_producto_2.jpg ">
        </div>
        <div class="display-flex ">
          <div class="price cout ">
            <h5>$ 350.000</h5>
          </div>
        </div>

        <div class="group-info ">
          <div class="line ">
          </div>
          <div class="title-card ">
            <a href=" ">
              <div class="flex-title ">
                <h5>Pistones</h5>
                <i class="fa fa-cart-plus " aria-hidden="true "></i>
              </div>
              <h6>Optra</h6>
              <p>2010-2019</p>
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>














































<div class="container" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

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
