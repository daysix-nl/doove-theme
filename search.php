<?php 
/**
 * The searche template file
 * 
 * @package Day Six theme
 */


get_header(); ?>
    <main>
        <section class="h-[127px] md:h-[130px] lg:h-[140px] xl:h-[160px] mt-[82px] md:mt-[71px] lg:mt-[68px] bg-[#F4F4F5]">
            <div class="container h-full flex flex-col justify-center">
                <p class="text-12 leading-20 md:text-12 md:leading-14 lg:text-12 lg:leading-18 xl:text-12 xl:leading-22 text-[#726A63]/[0.35] font-nunito font-semibold space-x-[15px] hidden md:flex"><a href="/">Home</a><span  class="block">></span><span class="block"><?php $search_query = get_search_query(); if (!empty($search_query)) { echo 'Zoekresultaten: ' . esc_html($search_query);} else { echo 'Geen zoekresultaten'; } ?> </span></p>
                <h1 class="text-22 leading-33 md:text-25 md:leading-35 lg:text-31 lg:leading-41 xl:text-35 xl:leading-45 font-satoshi text-[#ED701F] font-semibold pt-1"><?php $search_query = get_search_query(); if (!empty($search_query)) { echo 'Zoekresultaten: ' . esc_html($search_query);} else { echo 'Geen zoekresultaten'; } ?> </h1>
            </div>
        </section>

        <section>
            <div class="container pb-6 md:pb-[85px] lg:pb-[150px] xl:pb-[155px] mt-4 md:mt-5 lg:9 xl:mt-10">
            <div class="grid gap-3 md:gap-[45px] xl:gap-7">
                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post(); ?>
                        <div class="col-span-1">
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="text-[#332E2A] font-satoshi font-bold xl:text-25 xl:leading-33  lg:text-22 lg:leading-29 md:text-21 md:leading-28 text-25 leading-33 xl:pb-2 lg:pb-2 md:pb-2 pb-3"><?php the_title();?></h2>
                                <p class="text-[#332E2A] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-18 leading-30 lg:max-w-[780px] xl:max-w-[936px]">
                                    <?php 
                                     $meta_description = get_post_meta(get_the_ID(), 'rank_math_description', true);
                                    // Als er een meta-omschrijving is, toon deze, anders toon de standaard excerpt
                                    if (!empty($meta_description)) {
                                        echo esc_html($meta_description);  } else {
                                        } ?>
                                </p>
                                <p class="font-satoshi font-semibold text-14 leading-24 uppercase text-[#ED701F] pt-[15px]">Lees meer</p>
                            </a>
                        </div>
                    <?php
                        }
                    } else {
                        echo 'Geen zoekresultaten';
                    }
                    ?>
            </div>
            </div>
        </section>
   
    </main>
<?php get_footer(); ?>