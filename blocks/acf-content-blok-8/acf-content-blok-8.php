<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- CONTENT BLOK 8 -->
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container">
            <div class="w-[312px] md:w-[556px] lg:w-[582px] xl:w-[662px] mx-auto">
                <h3 class="font-satoshi font-bold text-<?php the_field('tekst_kleur');?> text-22 leading-33 md:text-21 md:leading-28 lg:text-22 lg:leading-29 xl:text-25 xl:leading-33 text-center"><?php the_field('tekst');?></h3>
            </div>
        </div>
    </section>
<?php endif; ?>