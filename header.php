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
<header class="bg-white h-[82px] md:h-[71px] lg:h-[68px] w-full fixed z-50 border-b-[1px] border-[#EBEBEB]">
  <div class="flex items-center justify-between h-full">
    <a href="/" class="ml-2 md:ml-4 w-[231px]"><?php include get_template_directory() . '/img/icons/logo.php'; ?></a>
    <div class="flex h-[82px] md:h-[71px] lg:h-[68px] items-center">
      <div class="hidden lg:flex">
        <button data-target="zorghulpmiddelen" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-semibold text-[#726A63] ml-4 flex items-center hover:opacity-[0.7] duration-300 button-navbar">Zorghulpmiddelen <span class="lg:h-[4.689px] xl:h-[5px] ml-2"><?php include get_template_directory() . '/img/icons/arrow-down.php'; ?></span></button>
        <button data-target="test" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-semibold text-[#726A63] ml-4 flex items-center hover:opacity-[0.7] duration-300 button-navbar">test <span class="lg:h-[4.689px] xl:h-[5px] ml-2"><?php include get_template_directory() . '/img/icons/arrow-down.php'; ?></span></button>
        <a href="#" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-semibold text-[#726A63] ml-4 hover:opacity-[0.7] duration-300">Facility Support</a>
        <a href="#" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-semibold text-[#726A63] ml-4 hover:opacity-[0.7] duration-300">Academie</a>
        <a href="#" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-semibold text-[#726A63] ml-4 hover:opacity-[0.7] duration-300">Nieuws</a>
        <a href="#" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-semibold text-[#726A63] ml-4 hover:opacity-[0.7] duration-300">Vacatures</a>
        <a href="#" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-semibold text-[#726A63] ml-4 hover:opacity-[0.7] duration-300">Contact</a>
      </div>
      <div class="hidden lg:flex ml-4 lg:mr-[15px] xl:mr-2">
        <button id="kis" class="uppercase bg-orange rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-semibold text-white hover:opacity-[0.7] duration-300 lg:w-[78px] lg:h-[34px] xl:h-[39px] xl:w-[88px] flex items-center justify-center">Kis</button>
        <button id="search" class="uppercase bg-[#F4F4F5] rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-semibold text-white hover:opacity-[0.7] duration-300 lg:w-[36px] lg:h-[34px] xl:h-[39px] xl:w-[40px] flex items-center justify-center lg:ml-[10px] xl:ml-[15px]"><span class="lg:h-[12.9px] xl:h-[14.5px]"><?php include get_template_directory() . '/img/icons/glass.php'; ?></span></button>
      </div>
      <div class="block lg:hidden ml-4 mr-2 md:mr-[25px]">
        <button id="hamburger" class="uppercase bg-orange rounded-[2px] w-[49px] h-[47px] md:h-[40px] md:w-[42px] flex items-center justify-center"></button>
      </div>
    </div>
  </div>
</header>
  
<!-- OVERLAY ZORGHULPMIDDELEN -->
<div  class=" left-0 right-0 top-0 h-[500px] bg-white fixed z-40 menuitemoverlay ">
  <div id="zorghulpmiddelen" class="pt-10 inner_div">
    <p>zorg</p>
  </div>
    <div id="test" class="pt-10 inner_div">
    <p>test</p>
  </div>
</div>

<div class="overlay-header fixed top-0 left-0 right-0 h-screen w-screen z-0 hidden"></div>