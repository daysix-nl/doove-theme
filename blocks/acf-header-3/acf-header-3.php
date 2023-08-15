<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- HEADER 3 -->
    <section class="h-[180px] md:h-[279px] lg:h-[367px] xl:h-[413px] mt-[82px] md:mt-[71px] lg:mt-[68px] bg-bottom bg-cover relative bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>" style="background-image: url('/wp-content/themes/doove-theme/img/local/bg-facility-support-top.jpeg');">
        <div class="h-4 md:h-6 lg:h-8 xl:h-9 absolute bottom-0 left-0 right-0 bg-top bg-cover" style="background-image: url('/wp-content/themes/doove-theme/img/local/bg-facility-support-bottom.jpeg');"></div>
        <div class="container flex h-full items-center relative">
            <h1 class="hidden md:block md:text-30 md:leading-40 lg:text-31 lg:leading-41 xl:text-35 xl:leading-45 font-satoshi text-<?php the_field('titel_kleur_desktop');?> font-semibold"><?php the_field('titel');?></h1>
            <div class="absolute left-0 md:left-[unset] right-0 md:right-[-25px] lg:right-0 bottom-0 top-0 h-[180px] md:h-[279px] lg:h-[367px] xl:h-[413px] flex items-center w-[350px] md:w-[unset] mx-auto md:mx-[unset] justify-center">
                <img class="h-[180px] md:h-[279px] lg:h-[367px] xl:h-[413px]" src="<?php the_field('mockup_afbeelding');?>" alt="">
            </div>
        </div>
    </section>
    <section class="block md:hidden bg-<?php the_field('achtergrond_kleur');?>">
        <div class="container pt-3">
            <h1 class="text-25 leading-30 font-satoshi text-<?php the_field('titel_kleur_mobiel');?> font-semibold"><?php the_field('titel');?></h1>
        </div>
    </section>
<?php endif; ?>