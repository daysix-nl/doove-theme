<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- C2A EMAILADRES -->
     <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container">
            <h2 class="text-25 leading-33 md:text-21 md:leading-28 lg:text-21 lg:leading-28 xl:text-25 xl:leading-33 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold w-[350px] md:w-[258px] xl:w-[308px] mx-auto text-center"><?php the_field('titel');?></h2>
            <div class="update w-[350px] md:w-[442px] lg:w-[436px] xl:w-[486px] mx-auto pt-2 md:pt-[45px] xl:pt-4">
                <?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ); ?>
            </div>        
        </div>
    </section>
<?php endif; ?>