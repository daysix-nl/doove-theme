<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- HEADER 1 -->
    <section class="h-[421px] max-h-[unset] md:max-h-[768px] lg:max-h-[unset] md:h-screen md:min-h-[530px] lg:min-h-[633px] bg-center bg-cover bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>" style="background-image: url('<?php the_field('achtergrond_afbeelding');?>');">
        <div class="container flex h-full items-center pt-[41px] md:pt-[35.5px] lg:pt-[34px]">
            <?php if (get_field('mockup_afbeelding')): ?>    
            <img src="<?php the_field('mockup_afbeelding');?>" alt="<?php the_title();?>" class="max-w-[89px] md:max-w-[196px] lg:max-w-[247px] xl:max-w-[273px] ml-[20px] mr-[30px] md:ml-[55px] md:mr-[65px] lg:ml-[116px] lg:mr-[85px] xl:ml-[132px] xl:mr-[75px]">
            <?php endif; ?>
            <h1 class="text-22 leading-30 max-w-[206px] md:text-40 md:leading-46 md:max-w-[373px] lg:text-55 lg:leading-65 lg:max-w-[569px] xl:text-60 xl:leading-70 xl:max-w-[653px] font-satoshi text-<?php the_field('titel_kleur');?> font-semibold"><?php the_field('titel');?></h1>
        </div>
    </section>
<?php endif; ?>