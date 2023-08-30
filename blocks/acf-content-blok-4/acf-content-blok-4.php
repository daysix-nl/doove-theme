<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- CONTENT BLOK 4 -->
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container flex flex-col lg:flex-row lg:items-center">
            <div class="lg:w-[504px] xl:w-[563px]">
                <h3 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold md:max-w-[654px] lg:max-w-[347px] xl:max-w-[395px]"><?php the_field('titel');?></h3>
                <a id="proefaanvragen" href="#" class="hidden md:flex text-18 leading-30 md:text-15 md:leading-25 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 md:mt-[45px] lg:mt-[184px] xl:mt-[212px] text-orange font-nunito font-bold w-fit justify-center items-center hover:opacity-[0.7] duration-300"><?php the_field('link_tekst');?> <span class="arrow-orange h-[8.94px] md:h-[7.14px] lg:h-[7.96px] xl:h-[8.94px]"><?php include get_template_directory() . '/img/icons/arrow-orange.php'; ?></span></a>
            </div>
            <div class="lg:w-[626px] xl:w-[709px] grid md:grid-cols-2 gap-y-[65px] md:gap-x-[100px] md:gap-y-[70px] lg:gap-x-[79px] lg:gap-y-[65px] mt-[65px] lg:mt-[unset]">
                <?php if( have_rows('uitgelichte_items_repeater') ): ?>
                    <?php while( have_rows('uitgelichte_items_repeater') ): the_row();  ?>
                        <div class="col-span-1 w-full">
                            <div class="h-[148px] md:h-[142px] lg:h-[131px] xl:h-[148px] flex items-start">
                                <img src="<?php the_sub_field('afbeelding');?>" alt="<?php the_sub_field('tekst');?>" class="max-h-[148px] md:max-h-[142px] lg:max-h-[131px] xl:max-h-[148px] mix-blend-darken">
                            </div>
                            <p class="text-14 leading-22 md:text-12 md:leading-19 lg:text-12 lg:leading-19 xl:text-14 xl:leading-22 font-nunito text-black font-normal"><?php the_sub_field('tekst');?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <a class="flex md:hidden text-18 leading-30 mt-[45px] text-orange font-nunito font-bold w-fit justify-center items-center hover:opacity-[0.7] duration-300" href="/"><?php the_field('link_tekst');?> <span class="arrow-orange h-[8.94px] md:h-[7.14px] lg:h-[7.96px] xl:h-[8.94px]"><?php include get_template_directory() . '/img/icons/arrow-orange.php'; ?></span></a>
        </div>
    </section>
<?php endif; ?>
