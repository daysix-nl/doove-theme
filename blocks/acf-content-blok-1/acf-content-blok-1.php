<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

    <!-- CONTENT BLOK 1 -->
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?> overflow-hidden w-screen">
        <div class="relative">
            <div class="absolute right-0 top-0 bottom-0 left-[unset] md:w-[calc(50%+76px)] lg:w-[calc(50%+127px)] xl:w-[calc(50%+142px)] overflow-hidden">
                <img src="<?php the_field('rij_1_afbeelding');?>" alt="<?php the_field('rij_1_titel');?>" class="w-full h-full object-cover object-left-top hidden md:block inner-hero scale-150">
            </div>
            <div class="max-w-[390px] md:max-w-[calc(50%-76px)] md:w-[calc(50%-76px)] lg:max-w-[1130px] lg:w-[1130px] xl:max-w-[1272px] xl:w-[1272px] mx-auto md:mx-[unset] lg:mx-auto px-2 md:px-0">
                <div class="grid content-center gap-[25px] md:gap-3 lg:gap-4 xl:gap-4 bg-<?php the_field('achtergrond_kleur');?> md:w-[243px] lg:w-[439px] xl:w-[494px] pt-4 md:py-[65px] lg:py-[115px] xl:py-[130px] mx-[unset] md:mx-auto lg:mx-[unset]">
                    <h2 class="text-25 leading-33 md:text-16 md:leading-23 lg:text-22 lg:leading-28 xl:text-25 xl:leading-33 font-satoshi text-<?php the_field('rij_1_titel_kleur');?> font-semibold max-w-[unset] md:max-w-[243px] lg:max-w-[320px] xl:max-w-[384px]"><?php the_field('rij_1_titel');?></h2>
                    <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal max-w-[unset] md:max-w-[243px] lg:max-w-[320px] xl:max-w-[384px] text-editor"><?php the_field('rij_1_tekst');?></div>
                </div>
            </div>
            <img src="<?php the_field('rij_1_afbeelding');?>" alt="<?php the_field('rij_1_titel');?>" class="aspect-[4/3] object-cover block md:hidden pt-5  overflow-hidden">
        </div>
        <div class="bg-half relative section-hero">
            <div class="max-w-[390px] md:max-w-full md:w-full lg:max-w-[1130px] lg:w-[1130px] xl:max-w-[1272px] xl:w-[1272px] mx-auto md:mx-[unset] lg:mx-auto px-2 md:px-0 grid grid-flow-col gap-0 md:gap-0 lg:gap-0">
                <div class="hidden md:grid content-center bg-[#F4F4F5] md:w-[268px] lg:w-[439px] xl:w-[494px] mx-[unset] md:mx-auto lg:mx-[unset]">
                    <img src="<?php the_field('rij_2_afbeelding');?>" alt="Logo Reverse Thinking" class="md:w-[183px] lg:w-[305px] xl:w-[343px] md:ml-2 lg:ml-3 xl:ml-[35px]">
                </div>
                <div class="md:w-full lg:w-[691px] xl:w-[778px]">
                    <div class="grid content-center gap-[25px] md:gap-3 lg:gap-4 xl:gap-4 bg-<?php the_field('achtergrond_kleur');?> h-full md:pl-[0%] lg:pl-8 xl:pl-9 py-[55px] md:py-[45px] lg:py-9 xl:py-10 max-w-[unset] md:max-w-[100%] lg:max-w-[567px] xl:max-w-[675px]">
                        <h2 class="text-25 leading-33 md:text-16 md:leading-23 lg:text-22 lg:leading-28 xl:text-25 xl:leading-33 font-satoshi text-<?php the_field('rij_2_titel_kleur');?> font-semibold max-w-[unset] md:max-w-[415px] md:w-[447px] lg:w-[567px] lg:max-w-[567px] xl:w-[675px] xl:max-w-[675px] mx-auto"><?php the_field('rij_2_titel');?></h2>
                        <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal max-w-[unset] md:max-w-[415px] lg:max-w-[567px] xl:max-w-[675px] mx-auto text-editor"><?php the_field('rij_2_tekst');?></div>
                    </div>
                </div>
            </div>
            <div class="bg-[#F4F4F5] block md:hidden mt-3"><img src="<?php the_field('rij_2_afbeelding');?>" alt="Logo Reverse Thinking" class="w-[224px] mx-auto py-6"></div>
        </div>
    </section>
<?php endif; ?>