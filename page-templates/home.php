<?php
/**
 * Template name: Home
 */


 get_header(); ?>
 
<!-- BLOCK: MAIN -->
<main class="relative">

    <!-- BACKGROUND SETUP -->
    <!-- <img src="/wp-content/themes/theinvaders-theme/img/local/background-page.jpg" alt="" class="absolute top-0 left-0 right-0 bottom-0 object-cover h-screen w-screen z-[-2] duration-[unset]"> -->
    <video autoplay="" loop="" muted="" playsinline="" class="absolute top-0 left-0 right-0 bottom-0 object-cover h-screen w-screen z-[-2] duration-[unset]">
            <source class="hidden md:block" src="<?php the_field('video_desktop', 'options')?>" type="video/mp4">
            <source class="block md:hidden" src="<?php the_field('video_mobiel', 'options')?>" type="video/mp4">
    </video>

    <!-- CONTENT AREA -->
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen page-top overflow-hidden">
        <a href="<?php the_field('blok_link_1', 'options')?>" class="col-span-1 row-span-1 h-full bg-[#1B156438] hover:bg-[#1B156499] duration-300 home-item relative">
            <div class="flex justify-center h-full md:h-auto items-center md:block md:absolute md:left-4 md:bottom-0 md:right-4 xl:left-5 xl:bottom-0 xl:right-5 home-item-content">
                <h2 class="home-item-title text-55 leading-70 md:text-42 md:leading-42 xl:text-46 xl:leading-42 font-space font-bold text-white uppercase"><?php the_field('blok_titel_1', 'options')?></h2>
                <p class="hidden md:block home-item-text text-13 leading-20 xl:text-14 xl:leading-22 font-rubik font-normal text-white pt-3 max-w-[471px] xl:max-w-[493px]"><?php the_field('blok_tekst_1', 'options')?></p>
            </div>
        </a>
        <a href="<?php the_field('blok_link_2', 'options')?>" class="col-span-1 row-span-1 h-full bg-[#48237F38] hover:bg-[#48237F99] duration-300 home-item relative">
            <div class="flex justify-center items-center h-full md:h-auto md:block md:absolute md:left-4 md:bottom-0 md:right-4 xl:left-5 xl:bottom-0 xl:right-5 home-item-content">
                <h2 class="home-item-title text-55 leading-70 md:text-42 md:leading-42 xl:text-46 xl:leading-42 font-space font-bold text-white uppercase"><?php the_field('blok_titel_2', 'options')?></h2>
                <p class="hidden md:block home-item-text text-13 leading-20 xl:text-14 xl:leading-22 font-rubik font-normal text-white pt-3 max-w-[471px] xl:max-w-[493px]"><?php the_field('blok_tekst_2', 'options')?></p>
            </div>
        </a>
        <a href="<?php the_field('blok_link_3', 'options')?>" class="col-span-1 row-span-1 h-full bg-[#742B8938] hover:bg-[#742B8999] duration-300 home-item relative">
            <div class="flex justify-center items-center h-full md:h-auto md:block md:absolute md:left-4 md:bottom-0 md:right-4 xl:left-5 xl:bottom-0 xl:right-5 home-item-content">
                <h2 class="home-item-title text-55 leading-70 md:text-42 md:leading-42 xl:text-46 xl:leading-42 font-space font-bold text-white uppercase"><?php the_field('blok_titel_3', 'options')?></h2>
                <p class="hidden md:block home-item-text text-13 leading-20 xl:text-14 xl:leading-22 font-rubik font-normal text-white pt-3 max-w-[471px] xl:max-w-[493px]"><?php the_field('blok_tekst_3', 'options')?></p>
            </div>
        </a>
        <a href="<?php the_field('blok_link_4', 'options')?>" class="col-span-1 row-span-1 h-full bg-[#8C278838] hover:bg-[#8C278899] duration-300 home-item relative">
            <div class="flex justify-center items-center h-full md:h-auto md:block md:absolute md:left-4 md:bottom-0 md:right-4 xl:left-5 xl:bottom-0 xl:right-5 home-item-content">
                <h2 class="home-item-title text-55 leading-70 md:text-42 md:leading-42 xl:text-46 xl:leading-42 font-space font-bold text-white uppercase"><?php the_field('blok_titel_4', 'options')?></h2>
                <p class="hidden md:block home-item-text text-13 leading-20 xl:text-14 xl:leading-22 font-rubik font-normal text-white pt-3 max-w-[471px] xl:max-w-[493px]"><?php the_field('blok_tekst_4', 'options')?></p>
            </div>
        </a>
    </div>
</main>



<?php get_footer('empty'); ?>



