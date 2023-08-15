<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- ELEMENT WYSIWYG EDITOR -->
   <div class="<?php the_field('padding_top');?> <?php the_field('padding_bottom');?> text-[#332E2A] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-18 leading-30 text-editor w-full xl:max-w-[893px] lg:max-w-[747]"><?php the_field('tekst');?></div>
<?php endif; ?>