<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'page-block doove' ); ?>>
<header class="bg-white h-[82px] md:h-[71px] lg:h-[68px] w-full fixed z-50">
  <div class="grid items-center h-full">
    <a href="/" class="pl-2 md:pl-4"><?php include get_template_directory() . '/img/icons/logo.php'; ?></a>
  </div>
</header>
  

