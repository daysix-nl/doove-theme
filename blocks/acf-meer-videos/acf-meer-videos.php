<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
   <!-- MEER VIDEO'S -->
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container ">
            <div class="max-w-unset md:max-w-[529px] lg:max-w-[567px] xl:max-w-[680px]">
                <h2 class="text-25 leading-30 md:text-15 md:leading-14 lg:text-21 lg:leading-25 xl:text-25 xl:leading-30 font-satoshi text-black font-semibold pb-4 md:pb-[25px] lg:pb-[25px] xl:pb-3"><?php the_field('titel');?></h2>
                <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal"><?php the_field('tekst');?></p>
                <a class="text-15 leading-30 md:text-15 md:leading-14 lg:text-14 lg:leading-24 xl:text-15 xl:leading-30 my-[45px] text-orange font-nunito font-bold w-fit flex justify-center items-center hover:opacity-[0.7] duration-300" href="<?php the_field('link');?>"><?php the_field('link_tekst');?> <span class="arrow-orange h-[8.94px] md:h-[7.14px] lg:h-[7.96px] xl:h-[8.94px]"><?php include get_template_directory() . '/img/icons/arrow-orange.php'; ?></span></a>
            </div>
        </div>
        <div class="swiper mySwiper  md:container relative pb-5">
            <div class="swiper-wrapper mx-2 md:mx-0">
                <?php
                    // Check rows existexists.
                    if( have_rows('videos_repeater') ):
                        // Loop through rows.
                        while( have_rows('videos_repeater') ) : the_row(); ?>
                            <div class="swiper-slide w-full max-w-[384px]">
                                <iframe class="aspect-video w-full" src="https://www.youtube-nocookie.com/embed/<?php the_sub_field('id_youtube');?>?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" allowfullscreen></iframe>
                                <h3 class="text-18 leading-30 md:text-15 md:leading-30 lg:text-18 lg:leading-30 xl:text-18 xl:leading-30 text-black font-nunito font-bold pt-2 md:pt-2 lg:pt-3 xl:pt-[35px]"><?php the_sub_field('titel');?></h3>
                            </div>
                        <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                        // Do something...
                    endif;
                ?>
            </div>
     
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
   
        </div>
    </section>
<?php endif; ?>