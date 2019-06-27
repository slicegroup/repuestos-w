<?php get_header(); ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>	

<?php  get_template_part('partials/cart'); ?>
<?php  get_template_part('partials/contact'); ?>
  <div class="img-footer">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-footer.svg" alt="">
	</div>

<div class="container">
	<?php echo do_shortcode('[woocommerce_cart]'); ?>
</div>
<?php get_footer(); ?>
