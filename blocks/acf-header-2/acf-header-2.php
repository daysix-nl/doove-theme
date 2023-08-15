<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
     <!-- HEADER 3 -->
    <section class="h-[180px] md:h-[279px] lg:h-[367px] xl:h-[413px] mt-[82px] md:mt-[71px] lg:mt-[68px] bg-center bg-cover relative bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>" style="background-image: url('<?php the_field('achtergrond_afbeelding');?>');">
        <div class="absolute top-0 left-0 right-[50%] bottom-0 z-10 bg-gradient-to-r from-[#1D1A18B3] to-transparen hidden md:block"></div>    
        <div class="container flex h-full items-center">
            <h1 class="hidden md:block md:text-30 md:leading-40 lg:text-31 lg:leading-41 xl:text-35 xl:leading-50 font-satoshi text-<?php the_field('titel_kleur_desktop');?> font-semibold z-20"><?php the_field('titel');?></h1>
        </div>
    </section>
    <section class="block md:hidden bg-<?php the_field('achtergrond_kleur');?>">
        <div class="container pt-3">
            <h1 class="text-25 leading-30 font-satoshi text-<?php the_field('titel_kleur_mobiel');?> font-semibold"><?php the_field('titel');?></h1>
        </div>
    </section>
<?php endif; ?>