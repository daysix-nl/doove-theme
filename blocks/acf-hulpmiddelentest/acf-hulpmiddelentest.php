<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- CONTENT BLOK 4 -->
    <div id="gf_1"></div>
    <section id="hulpmiddelentest" class="hulpmiddelentest bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container flex flex-col lg:flex-row lg:items-start">
            <div class="lg:w-[504px] xl:w-[563px] grid gap-[25px] md:gap-3 lg:gap-4 pt-[15px]">
                <h3 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold md:max-w-[654px] lg:max-w-[347px] xl:max-w-[395px]"><?php the_field('titel');?></h3>
                <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal md:max-w-[579px] lg:max-w-[282px] xl:max-w-[339px]"><?php the_field('tekst');?></p>
            </div>
            <div id="form-list" class="lg:w-[626px] xl:w-[709px] mt-4 md:mt-[35px] lg:mt-[unset]">
                <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax=“true”]' ); ?>
            </div>
        </div>
    </section>
<?php endif; ?>