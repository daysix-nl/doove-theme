<?php 
$version_number = '1.3';
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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PNMPSWV');</script>
    <!-- End Google Tag Manager -->
</head>
<body <?php body_class( 'page-block doove' ); ?>>
  <!-- POPUP -->
  <?php if((!isset($_COOKIE["popup"]) || $_COOKIE["popup"] !== "yes") && get_field('actief', 'option') === 'active') { ?>
      <div class="pop_up fixed top-0 left-0 w-screen h-screen flex bg-[#000000]/20 z-[1000] justify-center items-center ">
          <div class="w-full max-w-[358px] md:max-w-[415px] bg-white m-auto rounded-[11px] overflow-hidden relative pop_up_inner">
              <button class="closePopUp top-2 right-2 absolute z-[100]">
                <?php if (get_field('kleur_close_button', 'option') !== "button_zwart"): ?>   
                <svg id="Group_440" data-name="Group 440" xmlns="http://www.w3.org/2000/svg" width="20.441" height="20.441" viewBox="0 0 20.441 20.441">
                  <rect id="Rectangle_7" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(2.395 0) rotate(45)" fill="#fff"/>
                  <rect id="Rectangle_7-2" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(0 18.047) rotate(-45)" fill="#fff"/>
                </svg>
                <?php endif; ?>
                <?php if (get_field('kleur_close_button', 'option') !== "button_wit"): ?>   
                <svg id="Group_440" data-name="Group 440" xmlns="http://www.w3.org/2000/svg" width="20.441" height="20.441" viewBox="0 0 20.441 20.441">
                  <rect id="Rectangle_7" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(2.395 0) rotate(45)" fill="#000"/>
                  <rect id="Rectangle_7-2" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(0 18.047) rotate(-45)" fill="#000"/>
                </svg>
                <?php endif; ?>
              </button>
              <?php
              $image = get_field('popup_afbeelding', 'option');
              $image_url = isset($image['url']) ? esc_url($image['url']) : '';
              $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
              ?>
              <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full object-cover object-center h-[199px] md:h-[210px]">
              <div class="pt-[40px] md:pt-[35px] lg:pt-[30px] pb-[35px] lg:pb-[30px] w-[269.54px] md:w-[334.8px] mx-auto">
                <?php if (get_field('popup_titel', 'option')): ?>   
                  <h2 class="text-25 leading-30 md:text-21 md:leading-28 lg:text-22 lg:leading-25 xl:text-25 xl:leading-30 font-satoshi text-<?php the_field('titel_kleur', 'option');?> font-bold pb-[15px] md:pb-[25px] xl:pb-2 mr-0 md:mr-[45px] xl:mr-[0px]"><?php the_field('popup_titel', 'option');?></h2>
                <?php endif; ?>
                <?php if (get_field('popup_tekst', 'option')): ?>   
                  <p class="text-18 leading-30 md:text-15 md:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal pb-[30px] md:pb-[28px] lg:pb-2 xl:pb-[35px] mr-0 md:mr-[45px] xl:mr-[0px]"><?php the_field('popup_tekst', 'option');?></p>
                <?php endif; ?>
                <?php
                  $link = get_field('popup_link', 'option');
                  $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                  $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                  $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                <?php if (get_field('popup_link', 'option')): ?>   
                  <a href="<?php echo $link_url; ?>" class="bg-<?php the_field('button_achtergrond', 'option');?> flex justify-center items-center w-full h-[49px] text-white text-18 leading-18 md:text-15 md:leading-15 lg:text-15 lg:leading-15 xl:text-18 xl:leading-18 font-nunito font-bold hover:opacity-[0.8] duration-300" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php endif; ?>
              </div>
          </div>
      </div>
  <?php } ?>
  
<header class="bg-white h-[82px] md:h-[71px] lg:h-[68px] w-full fixed top-0 z-[999] border-b-[1px] border-[#EBEBEB]">
  <div class="flex items-center justify-between h-full mr-2 md:mr-[25px] lg:mr-[15px] xl:mr-2">
    <a href="/" class="ml-2 md:ml-4 w-[231px]"><?php include get_template_directory() . '/img/icons/logo.php'; ?></a>
    <div class="overflow-hidden flex h-[82px] md:h-[71px] lg:h-[68px] items-center relative">
      <!-- DESKTOP MENU -->
      <div class="hidden lg:flex">
        <div data-target="zorghulpmiddelen" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-bold text-[#726A63] ml-4 flex items-center hover:text-orange duration-300 button-navbar"><a href="/zorghulpmiddelen"><?php the_field('titel', 'option');?></a> <span class="lg:h-[4.689px] xl:h-[5px] ml-2"><?php include get_template_directory() . '/img/icons/arrow-down.php'; ?></span></div>
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
        <a href="<?php the_field('button_link', 'option');?>" target="_blank"><div id="kis" class="uppercase bg-orange rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 lg:w-[78px] lg:h-[34px] xl:h-[39px] xl:w-[88px] flex items-center justify-center"><?php the_field('button_titel', 'option');?></div></a>
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
<div class="top-[82px] md:top-[71px] h-[calc(100dvh-82px)] md:h-[calc(100dvh-71px)] bg-white fixed lg:hidden z-40 menumobileoverlay">
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
      <a href="<?php the_field('button_link', 'option');?>" target="_blank">
      <div class="h-[49px] bg-orange flex justify-center items-center mx-2 md:mx-4 mb-3 md:mb-7"><p class="text-20 leading-22 font-nunito font-bold text-white uppercase"><?php the_field('button_titel', 'option');?></p></div>
          </a>
    </div>
  </div>
</div>  
<!-- OVERLAY MOBILE SUBMENU -->
<div class="left-0 right-0 top-[82px] md:top-[71px] h-[calc(100dvh-82px)] md:h-[calc(100dvh-71px)] bg-white fixed z-40 lg:hidden submenumobileoverlay">
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
