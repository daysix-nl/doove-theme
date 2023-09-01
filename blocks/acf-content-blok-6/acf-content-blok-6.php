<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- CONTENT BLOK 6 -->


<?php if(get_field('afbeelding_uitlijning')): ?>

        <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container grid grid-cols-1 lg:grid-cols-2 items-center">
            <div class="col-span-1 block md:hidden lg:block pt-5 md:pt-0">
                <img src="<?php the_field('afbeelding');?>" alt="" class="aspect-video w-full">
            </div>
            <div class="col-span-1 grid gap-[25px] md:gap-3 lg:gap-4 lg:pl-2 justify-end">
                <h2 class="text-22 leading-33 md:text-21 md:leading-28 lg:text-22 lg:leading-29 xl:text-25 xl:leading-33 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold lg:max-w-[439px] xl:max-w-[527px]"><?php the_field('titel');?></h2>
                <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal lg:max-w-[439px] xl:max-w-[527px] text-editor"><?php the_field('tekst');?></div>                
            </div>
       
        </div>
        <div class="hidden md:block lg:hidden">
            <img src="<?php the_field('afbeelding');?>" alt="" class="aspect-video w-full">
        </div>
    </section>

<?php else: ?>
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container grid grid-cols-1 lg:grid-cols-2 items-center">
            <div class="col-span-1 grid gap-[25px] md:gap-3 lg:gap-4">
                <h2 class="text-22 leading-33 md:text-21 md:leading-28 lg:text-22 lg:leading-29 xl:text-25 xl:leading-33 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold lg:max-w-[439px] xl:max-w-[527px]"><?php the_field('titel');?></h2>
                <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal lg:max-w-[439px] xl:max-w-[527px] text-editor"><?php the_field('tekst');?></div>                
            </div>
            <div class="col-span-1 block md:hidden lg:block pt-5 md:pt-0">
                <img src="<?php the_field('afbeelding');?>" alt="" class="aspect-video w-full lg:pl-2">
            </div>
        </div>
        <div class="hidden md:block lg:hidden">
            <img src="<?php the_field('afbeelding');?>" alt="" class="aspect-video w-full">
        </div>
    </section>
<?php endif; ?>
<?php endif; ?>