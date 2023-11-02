<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- CONTENT BLOK 7 -->
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[45vw] lg:w-[50vw] overflow-hidden relative order-2">
                <img src="<?php the_field('afbeelding');?>" alt="" class="h-full w-full object-cover object-center bg-[#f3f3f3]">
            </div>
            <div class="lg:aspect-square h-full w-full lg:h-[45vw] lg:w-[50vw] lg:flex lg:items-center relative <?php the_field('achtergrond');?> order-3 <?php the_field('order');?>">
                <div class="px-2 md:px-[unset] max-w-[390px] md:max-w-[688px] mx-auto lg:mx-[unset] lg:max-w-[439px] xl:max-w-[527px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto py-[50px] lg:py-[unset] tekst grid gap-[25px] md:gap-3 lg:gap-4">
                    <h2 class="text-22 leading-33 md:text-21 md:leading-28 lg:text-22 lg:leading-29 xl:text-25 xl:leading-33 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold lg:max-w-[439px] xl:max-w-[527px]"><?php the_field('titel');?></h2>
                    <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal lg:max-w-[439px] xl:max-w-[527px] text-editor"><?php the_field('tekst');?></div>                
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>