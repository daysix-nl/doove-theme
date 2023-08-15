<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- CONTENT BLOK 2 -->
   <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container">
            <h2 class="text-20 leading-28 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold w-[350px] md:w-[688px] lg:w-[746px] xl:w-[848px]"><?php the_field('titel');?></h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 mt-[35px] lg:mt-[40px] xl:mt-[45px] gap-y-2">
                <div class="col-span-1">
                    <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal lg:w-[546px] xl:w-[568px] text-editor"><?php the_field('alinea_1');?></div>
                </div>
                 <div class="col-span-1">
                    <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal lg:w-[464px] xl:w-[555px] lg:ml-3 xl:ml-0 text-editor"><?php the_field('alinea_2');?></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>