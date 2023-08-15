<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- BUTTON -->
    <div class="<?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <a href="<?php the_field('link');?>"><button class="md:w-fit md:px-6 lg:px-6 px-[12px] xl:h-[39px] lg:h-[35px] bg-[#FF7922] hover:bg-[#FF7922]/[0.75] transition-all font-nunito xl:text-18 xl:leading-22 lg:text-15 lg:leading-18 md:h-[42px] md:text-15 md:leading-22 font-bold text-white h-5 text-18 leading-22 w-full xl-[391px]"><?php the_field('titel');?></button></a>
    </div>
<?php endif; ?>

