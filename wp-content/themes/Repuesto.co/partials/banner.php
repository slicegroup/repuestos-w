
    
  <section class='products-slider'>
    <div class="ct-header ct-header--slider ct-slick-custom-dots" id="home">
      <div class="ct-slick-homepage" data-arrows="true" data-autoplay="false">
        <?php $args = array( 'post_type' => 'banner', 'posts_per_page' => 5); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="ct-header tablex item">

          <div class="ct-u-display-tablex">
            <div class="inner">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              <div class="container">
                <div class="row">
                  <div class=" slider-inner">
                    <h1 class="big animated"><?php the_title(); ?></h1>
                    <h3 class="animated"><?php the_excerpt(); ?></h3>
                    <a class="btn btn-transparent btn-lg text-uppercase animated" href="<?php the_permalink(); ?>">Solicitar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 <?php endwhile; ?>
        
  </section>