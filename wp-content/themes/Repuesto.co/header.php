<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Repuesto.co</title>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Sitio Web empresa líder en el mercado de ventas de repuestos automotores por Internet a nivel nacional">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/isotipo.png">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slider.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/result.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sorry.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/detail.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
   <?php wp_head(); ?>
</head>

<body>
  <header class="header__main navbar-me container-fluid">
    <div class="logo">
      <a href="<?php bloginfo('url') ?>">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="repuesto">
      </a>
    </div>
    <button class="responsive-menu-btn">
      <svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
        <path d="M14.000002 15.99999c-3.3137 0-6 2.68619-6 6 0 3.31359 2.6863 6 6 6h71.999996c3.3137 0 6-2.68641 6-6 0-3.31381-2.6863-6-6-6zm0 28.00003c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6zm0 28c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6z"
          style="text-indent:0;text-transform:none;block-progression:tb" overflow="visible" color="#000" />
      </svg>

      <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20">
        <path d="M14.7 1.3c-.4-.4-1-.4-1.4 0L8 6.6 2.7 1.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4L6.6 8l-5.3 5.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3L8 9.4l5.3 5.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L9.4 8l5.3-5.3c.4-.4.4-1 0-1.4z"
        />
      </svg>
    </button>

    <nav class="nav__menu">
      <div class="nav-item">
        <div class="search-box">
          <div class="search-icon">
            <i class="fa fa-search search-icon"></i>
          </div>
          <form action="<?php bloginfo('url') ?>" class="search-form">
            <input type="text" placeholder="Buscar" id="search" name="s" autocomplete="on" class="search">
          </form>
          <div class="go-icon">
            <i class="fa fa-arrow-right"></i>
          </div>
        </div>
      </div>
      <div class="nav-item ">
        <a class="item-color" href="<?php bloginfo('url') ?>">Inicio</a>
      </div>
      <div class="nav-item">
        <a class="item-color" href="<?php bloginfo('url') ?>/tienda">Productos</a>
      </div>
      <div class="nav-item">
        <a class="item-color" href="#recomendation">Cotización</a>
      </div>
      <div class="nav-item ">
        <a class="item-color" href="#contact">Contacto</a>
      </div>
      <div class="nav-item icon-plus ">
      <a href="<?php bloginfo('url') ?>/carrito"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a> 
      </div>
    </nav>
  </header>

  <div class="btn-whatsapp">
    <a href="https://api.whatsapp.com/send?phone=51944570043" target="_blank">
      <i aria-hidden="true" class="fa fa-whatsapp"></i>
    </a>
  </div>