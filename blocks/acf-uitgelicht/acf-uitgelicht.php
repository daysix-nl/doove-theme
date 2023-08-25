<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
   <!-- UITGELICHT -->
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container">
            <h2 class="text-25 leading-25 md:text-21 md:leading-21 lg:text-22 lg:leading-22 xl:text-25 xl:leading-25 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold pl-[unset] md:pl-2 lg:pl-[27px] xl:pl-3 pb-[55px] md:pb-6 lg:pb-2 xl:pb-[15px]"><?php the_field('titel');?></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-1">
                <?php
                    // Check value exists.
                    if( have_rows('uitgelichte_items_repeater') ):
                        // Loop through rows.
                        while ( have_rows('uitgelichte_items_repeater') ) : the_row();
                            // Case: ITEM ZONDER LINK - STANDAARD KLEUR
                            if( get_row_layout() == 'item_1' ): ?>
                                <!-- ITEM ZONDER LINK - STANDAARD KLEUR -->
                                <div class="col-span-1 px-[unset] md:px-2 lg:px-[27px] xl:px-3 pt-[unset] lg:pt-4 xl:pt-5 pb-[unset] lg:pb-3 xl:pb-3 grid rounded-xl relative uspcard">
                                    <div class="grid gap-2 md:gap-3 lg:gap-[35px] xl:gap-3 content-between">
                                        <div class="grid gap-[35px] md:gap-[25px] lg:gap-3">
                                            <h3 class="text-25 leading-30 md:text-21 md:leading-28 lg:text-22 lg:leading-25 xl:text-25 xl:leading-30 font-satoshi text-black font-semibold titel lg:min-h-[25px]"><?php the_sub_field('item_1_titel');?></h3>
                                            <p class="text-18 leading-30 md:text-15 md:leading-25 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal content"><?php the_sub_field('item_1_tekst');?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            // Case: ITEM ZONDER LINK - GROEN
                            elseif( get_row_layout() == 'item_2' ):  ?>
                                <!-- ITEM ZONDER LINK - GROEN -->
                                <div class="col-span-1 px-[unset] md:px-2 lg:px-[27px] xl:px-3 pt-[unset] lg:pt-4 xl:pt-5 pb-[unset] lg:pb-3 xl:pb-3 grid rounded-xl relative uspcard">
                                    <div class="grid gap-2 md:gap-3 lg:gap-[35px] xl:gap-3 content-between">
                                        <div class="grid gap-[35px] md:gap-[25px] lg:gap-3">
                                            <h3 class="text-25 leading-30 md:text-21 md:leading-28 lg:text-22 lg:leading-25 xl:text-25 xl:leading-30 font-satoshi text-[#4EBE5B] font-semibold titel green lg:min-h-[25px]"><?php the_sub_field('item_2_titel');?></h3>
                                            <p class="text-18 leading-30 md:text-15 md:leading-25 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-[#4EBE5B] font-normal content green"><?php the_sub_field('item_2_tekst');?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            // Case: ITEM MET LINK - STANDAARD KLEUR
                            elseif( get_row_layout() == 'item_3' ):  ?>
                                <!-- ITEM MET LINK - STANDAARD KLEUR -->
                                <a href="<?php the_sub_field('item_3_link');?>" class="col-span-1 px-[unset] md:px-2 lg:px-[27px] xl:px-3 pt-[unset] lg:pt-4 xl:pt-5 pb-[unset] lg:pb-3 xl:pb-3 grid lg:hover:bg-white duration-300 rounded-xl relative uspcard">
                                    <div class="grid gap-2 md:gap-3 lg:gap-[35px] xl:gap-3 content-between">
                                        <div class="grid gap-[35px] md:gap-[25px] lg:gap-3">
                                            <h3 class="text-25 leading-30 md:text-21 md:leading-28 lg:text-22 lg:leading-25 xl:text-25 xl:leading-30 font-satoshi text-black font-semibold titel lg:min-h-[25px]"><?php the_sub_field('item_3_titel');?></h3>
                                            <p class="text-18 leading-30 md:text-15 md:leading-25 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal content"><?php the_sub_field('item_3_tekst');?></p>
                                        </div>
                                        <p class="text-12 leading-27 md:text-12 md:leading-17 lg:text-11 lg:leading-23 xl:text-12 xl:leading-17 font-satoshi text-orange md:text-black font-semibold uppercase content tracking-[.6px]"><?php the_sub_field('item_3_c2a');?></p>
                                    </div>
                                    <div class="absolute lg:top-[25px] xl:top-3 lg:right-2 xl:right-[25px] arrow opacity-0"><?php include get_template_directory() . '/img/icons/arrow.php'; ?></div>
                                </a>
                            <?php
                            // Case: ITEM MET LINK - GROEN
                            elseif( get_row_layout() == 'item_4' ):  ?>
                                 <!-- ITEM MET LINK - GROEN -->
                                    <a href="<?php the_sub_field('item_4_link');?>" class="col-span-1 px-[unset] md:px-2 lg:px-[27px] xl:px-3 pt-[unset] lg:pt-4 xl:pt-5 pb-[unset] lg:pb-3 xl:pb-3 grid lg:hover:bg-white duration-300 rounded-xl relative uspcard">
                                        <div class="grid gap-2 md:gap-3 lg:gap-[35px] xl:gap-3 content-between">
                                            <div class="grid gap-[35px] md:gap-[25px] lg:gap-3">
                                                <h3 class="text-25 leading-30 md:text-21 md:leading-28 lg:text-22 lg:leading-25 xl:text-25 xl:leading-30 font-satoshi text-[#4EBE5B] font-semibold green lg:min-h-[25px]"><?php the_sub_field('item_4_titel');?></h3>
                                                <p class="text-18 leading-30 md:text-15 md:leading-25 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-[#4EBE5B] font-normal green"><?php the_sub_field('item_4_tekst');?></p>
                                            </div>
                                            <p class="text-12 leading-27 md:text-12 md:leading-17 lg:text-11 lg:leading-23 xl:text-12 xl:leading-17 font-satoshi text-[#4EBE5B] font-semibold uppercase green tracking-[.6px]"><?php the_sub_field('item_4_c2a');?></p>
                                        </div>
                                        <div class="absolute lg:top-[25px] xl:top-3 lg:right-2 xl:right-[25px] arrow opacity-0"><?php include get_template_directory() . '/img/icons/arrow.php'; ?></div>
                                    </a>
                            <?php
                            endif;
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                        // Do something...
                    endif;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>