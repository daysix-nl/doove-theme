<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- ELEMENT WYSIWYG EDITOR -->
   
        <div class="grid grid-cols-2 xl:gap-[38px] lg:gap-[35px] md:gap-[20px] gap-[50px] <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
                <?php
                // Check rows existexists.
                if( have_rows('videos_repeater') ):
                    // Loop through rows.
                    while( have_rows('videos_repeater') ) : the_row(); ?>
                        <div class="col-span-2 md:col-span-1">
                            <?php if (get_sub_field('titel')): ?>   
                            <h3 class="text-[#ED701F] font-bold font-satoshi xl:text-25 xl:leading-33  lg:text-22 lg:leading-29 md:text-18 md:leading-25 text-25 leading-33 lg:mb-[25px] md:mb-[15px] mb-2"><?php the_sub_field('titel');?></h3>
                             <?php endif; ?>
                            <iframe class="aspect-video w-full" src="https://www.youtube-nocookie.com/embed/<?php the_sub_field('id_youtube');?>?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" allowfullscreen></iframe>
                        </div>
                    <?php
                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
                ?>     
        </div>

<?php endif; ?>