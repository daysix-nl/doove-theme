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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block doove' ); ?>>
<header class="bg-white h-[82px] md:h-[71px] lg:h-[68px] w-full fixed top-0 z-[999] border-b-[1px] border-[#EBEBEB]">
  <div class="flex items-center justify-between h-full mr-2 md:mr-[25px] lg:mr-[15px] xl:mr-2">
    <a href="/" class="ml-2 md:ml-4 w-[231px]"><?php include get_template_directory() . '/img/icons/logo.php'; ?></a>
    <div class="overflow-hidden flex h-[82px] md:h-[71px] lg:h-[68px] items-center relative">
      <!-- DESKTOP MENU -->
      <div class="hidden lg:flex">
        <button data-target="zorghulpmiddelen" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-bold text-[#726A63] ml-4 flex items-center hover:text-orange duration-300 button-navbar"><?php the_field('titel', 'option');?> <span class="lg:h-[4.689px] xl:h-[5px] ml-2"><?php include get_template_directory() . '/img/icons/arrow-down.php'; ?></span></button>
        <!-- HOOFDMENU DESKTOP -->
        <?php
          if( have_rows('primaire_navbar_repeater', 'option') ):
            while( have_rows('primaire_navbar_repeater', 'option') ) : the_row(); ?>
              <a href="<?php the_sub_field('link', 'option');?>" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-bold text-[#726A63] ml-4 hover:text-orange duration-300"><?php the_sub_field('titel', 'option');?></a>
         <?php
          endwhile;
          else :
          endif;
          ?>
      </div>
      <div class="hidden lg:flex ml-4">
        <a href="<?php the_field('button_link', 'option');?>"><div id="kis" class="uppercase bg-orange rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 lg:w-[78px] lg:h-[34px] xl:h-[39px] xl:w-[88px] flex items-center justify-center"><?php the_field('button_titel', 'option');?></div></a>
        <button id="search" class="search-in uppercase bg-[#F4F4F5] rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 lg:w-[36px] lg:h-[34px] xl:h-[39px] xl:w-[40px] flex items-center justify-center lg:ml-[10px] xl:ml-[15px]"><span class="lg:h-[12.9px] xl:h-[14.5px]"><?php include get_template_directory() . '/img/icons/glass.php'; ?></span></button>
      </div>
      <!-- ZOEKBALK DESKTOP -->
      <div class="search-out absolute bg-[#F4F4F5] rounded-[2px] lg:w-[315px] lg:h-[34px] xl:h-[39px] xl:w-[360px] hidden lg:block">
        <div class="flex items-center justify-end">
          <form role="search" method="get" id="searchform"
            class="searchform w-full" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="w-full flex">
              <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
              <input type="submit" id="searchsubmit"
                value="">
              <button id="search-form" class="uppercase bg-[#F4F4F5] rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 lg:w-[36px] lg:h-[34px] xl:h-[39px] xl:w-[40px] flex items-center justify-center"><span class="lg:h-[12.9px] xl:h-[14.5px]"><?php include get_template_directory() . '/img/icons/glass.php'; ?></span></button>
              <input class="w-[calc(100%-50px)] pl-[0px] bg-transparent text-[#726A63] font-nunito lg:text-14 xl:text-16" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Zoeken..." />
            </div>
          </form>
          <button id="close" class="close uppercase bg-[#F4F4F5] rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 lg:w-[36px] lg:h-[34px] xl:h-[39px] xl:w-[40px] flex items-center justify-center"><span class="lg:h-[12.9px] xl:h-[14.5px] flex items-center"><?php include get_template_directory() . '/img/icons/close.php'; ?></span></button>
        </div>
      </div>
      <!-- MOBIEL HAMBURGER MENU -->
      <div class="block lg:hidden ml-4">
        <button id="hamburger menuToggle" class="button-hamburger uppercase bg-orange rounded-[2px] w-[49px] h-[47px] md:h-[40px] md:w-[42px] flex items-center justify-center">
            <span></span>
            <span></span>
            <span></span>
        </button>
      </div>
    </div>
  </div>
</header>
<!-- OVERLAY DESKTOP MENU -->
<div class="left-0 right-0 top-0 bg-white fixed z-40 hidden lg:block menuitemoverlay">
  <div id="zorghulpmiddelen" class="pt-7 inner_div">
    <div class="lg:mx-5 xl:mx-6 lg:pt-3 xl:pt-4">
      <div class="grid grid-cols-2 ">
        <div class="col-span-1">
          <h3 class="lg:text-15 lg:leading-19 xl:text-16 xl:leading-22 font-satoshi font-bold text-black"><a href="<?php the_field('link', 'option');?>"><?php the_field('titel', 'option');?></a></h3>
        </div>
        <div class="col-span-1 flex justify-end">
          <a class="lg:text-14 lg:leading-24 xl:text-15 xl:leading-30 text-orange font-nunito font-bold w-fit flex justify-center items-center hover:opacity-[0.7] duration-300" href="<?php the_field('link', 'option');?>"><?php the_field('link_tekst', 'option');?> <span class="arrow-orange h-[8.94px] md:h-[7.14px] lg:h-[7.96px] xl:h-[8.94px]"><?php include get_template_directory() . '/img/icons/arrow-orange.php'; ?></span></a>
        </div>
      </div>
      <hr class="border-[#707070] mt-[15px]">
      <div class="grid grid-cols-4 lg:gap-x-[15px] lg:gap-y-[9px] xl:gap-x-2 xl:gap-y-1 py-3">
              <?php
              $post_type = 'product'; 
              $taxonomy = 'category'; 
              $categories = get_terms(array(
                  'taxonomy' => $taxonomy,
                  'hide_empty' => false, 
              ));
              if (!empty($categories) && !is_wp_error($categories)) {
                  foreach ($categories as $category) {
                      $category_link = get_site_url() . '/producten/categorie-' . $category->slug . '/';  ?> 
                      <a href="<?php echo $category_link ?>" class="col-span-1 flex hover:opacity-[0.7] duration-300">
                        <div class="lg:min-h-[70px] lg:min-w-[70px] xl:min-h-[79px] xl:min-w-[79px] aspect-square bg-[#F4F4F4] flex items-center justify-center"><img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" alt="" class="w-auto h-auto max-w[60px] max-h-[60px] md:max-w-[60px] md:max-h-[60px] lg:max-w-[60px] lg:max-h-[60px] xl:max-w-[60px] xl:max-h-[60px] mix-blend-darken"></div>
                        <div class="flex items-center lg:ml-[13px] xl:ml-[15px]"><h4 class="lg:text-13 lg:leading-14 xl:text-14 xl:leading-16 font-nunito font-bold text-black"><?php echo $category->name ?></h4></div>
                      </a>
                  <?php }           
              } else {
                  echo 'Geen categorieën gevonden.';
              }
              ?>
        </div>
    </div>
  </div>
</div>
<div class="overlay-header fixed top-0 left-0 right-0 h-screen w-screen z-30 hidden"></div>
<!-- OVERLAY MOBILE MENU -->
<div class="top-[82px] md:top-[71px] h-[calc(100vh-82px)] md:h-[calc(100vh-71px)] bg-white fixed lg:hidden z-40 menumobileoverlay">
  <div class="relative h-full">
    <div class="mx-2 md:mx-4 mt-2 mb-3 md:mt-3 md:mb-[35px]">
      <!-- ZOEKBALK MOBIEL -->
      <div class="rounded-[2px] h-[53px] w-full bg-[#F4F4F5] flex justify-center items-center">
        <div class="flex items-center justify-end w-full">
          <form role="search" method="get" id="searchform"
            class="searchform w-full" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="w-full flex">
              <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
              <input type="submit" id="searchsubmit"
                value="">
              <button id="search-form" class="uppercase bg-[#F4F4F5] pl-2 rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 w-[40px] h-[53px] flex items-center justify-center"><span class="h-[14.5px]"><?php include get_template_directory() . '/img/icons/glass.php'; ?></span></button>
              <input class="w-[calc(100%-50px)] pl-[10px] bg-transparent text-[#726A63] font-nunito lg:text-14 xl:text-16" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Zoeken naar..." />
               
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="h-full">
      <div class="mobilemenu">
        <div class="mobilemenuitem">
          <hr class="border-[#F4F4F5]">
          <button class="mx-2 md:mx-4 my-[21px] md:my-[22px] text-[#726A63] text-18 leading-22 font-nunito font-bold zorghulpmiddelen flex items-center"><?php the_field('titel', 'option');?> <span class="h-1 w-1 block -rotate-90 ml-2 "><?php include get_template_directory() . '/img/icons/arrow-down-orange.php'; ?></span></button>
        </div>
         <!-- HOOFDMENU MOBIEL -->
        <?php
          if( have_rows('primaire_navbar_repeater', 'option') ):
            while( have_rows('primaire_navbar_repeater', 'option') ) : the_row(); ?>
            <div class="mobilemenuitem">
              <hr class="border-[#F4F4F5]">
              <a href="<?php the_sub_field('link', 'option');?>" class="mx-2 md:mx-4 my-[21px] md:my-[22px] block text-[#726A63] text-18 leading-22 font-nunito font-bold"><?php the_sub_field('titel', 'option');?></a>
            </div>
         <?php
          endwhile;
          else :
          endif;
          ?>
        <hr class="border-[#F4F4F5]">
      </div>
    </div>
    <div class="absolute bottom-2 md:bottom-3 left-0 right-0">
      <a href="<?php the_field('button_link', 'option');?>">
      <div class="h-[49px] bg-orange flex justify-center items-center mx-2 md:mx-4 mb-3 md:mb-7"><p class="text-20 leading-22 font-nunito font-bold text-white uppercase"><?php the_field('button_titel', 'option');?></p></div>
          </a>
    </div>
  </div>
</div>  
<!-- OVERLAY MOBILE SUBMENU -->
<div class="left-0 right-0 top-[82px] md:top-[71px] h-[calc(100vh-82px)] md:h-[calc(100vh-71px)] bg-white fixed z-40 lg:hidden submenumobileoverlay">
  <div class="relative h-full">
    <div class="mx-2 md:mx-4 mt-2 mb-2 md:mt-[25px] md:mb-[25px]">
      <button href="" class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="5.714" height="8.597" viewBox="0 0 5.714 8.597"><path id="Path_20" data-name="Path 20" d="M0,2.886,2.672,0l3.1,2.886" transform="translate(1.415 7.184) rotate(-90)" fill="none" stroke="#ed701f" stroke-linecap="round" stroke-width="2"/></svg>
        <span class="ml-[25px] text-[#726A63] text-18 leading-22 font-nunito font-bold backtomenu">Terug</span>
      </button>
    </div>
    <hr class="border-[#F4F4F5]">
    <div class="mx-2 md:mx-4 mt-2 mb-2 md:mt-[25px] md:mb-[25px] grid grid-cols-2">
      <div class="col-span-1">
          <h3 class="text-16 leading-22 font-nunito font-bold text-black"><?php the_field('titel', 'option');?></h3>
        </div>
        <div class="col-span-1 flex justify-end">
          <a class="text-16 leading-22 text-[#726A63] font-nunito font-bold w-fit flex justify-center items-center hover:opacity-[0.7] duration-300" href="<?php the_field('link', 'option');?>"><?php the_field('link_tekst', 'option');?> <span class="arrow-orange h-[8.94px]"><?php include get_template_directory() . '/img/icons/arrow-orange.php'; ?></span></a>
        </div>
    </div>
    <hr class="border-[#F4F4F5]">
    <div class="h-full overflow-scroll">
      <div class="mobilemenu pb-[200px]">
         <?php
              $post_type = 'product'; // Vervang dit met het gewenste posttype
              $taxonomy = 'category'; // Gebruik de 'category' taxonomy
              $categories = get_terms(array(
                  'taxonomy' => $taxonomy,
                  'hide_empty' => false, // Toon ook lege categorieën
              ));
              if (!empty($categories) && !is_wp_error($categories)) {
                  foreach ($categories as $category) {
                      $category_link = get_site_url() . '/producten/categorie-' . $category->slug . '/'; // Bouw de categorie-link op ?> 
                    <div class="mobilemenuitem">
                      <div class="mx-2 md:mx-4 my-[17px] flex">
                        <a href="<?php echo $category_link ?>" class="col-span-1 flex  w-full h-full">
                          <div class="min-h-[42px] min-w-[42px] aspect-square bg-[#F4F4F4] flex items-center justify-center"><img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" alt="" class="w-auto h-auto max-w[30px] max-h-[30px] md:max-w-[30px] md:max-h-[30px] mix-blend-darken"></div>
                          <div class="flex items-center ml-2"><p class="text-15 leading-16 font-nunito font-bold text-black"><?php echo $category->name ?></p></div>
                        </a>
                      </div>
                      <hr class="border-[#F4F4F5]">
                    </div>
                  <?php }           
              } else {
                  echo 'Geen categorieën gevonden.';
              }
              ?>
      </div>
    </div>
  </div>
</div> 