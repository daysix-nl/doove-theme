<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
<!-- AFBEELDING SLIDER -->
<section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="w-full">
        <div class="swiper myafbeelingslider pb-[55px] md:pb-[65px] lg:pb-[66px]">
            <div class="swiper-wrapper">
                <?php
                    if( have_rows('afbeelding_slider') ):
                        while( have_rows('afbeelding_slider') ) : the_row(); ?>
                        <?php
                            $image = get_sub_field('image');
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                        ?>
                        <div class="swiper-slide w-full">
                            <div class="h-full aspect-[16/11] overflow-hidden relative">
                                <?php if (get_sub_field('image')): ?>  
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover">
                                <?php endif; ?>
                                
                            </div>
                        </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                ?>
            </div>
            <div class="container">
                <div class="swiper-button-next">
            
                </div>
                <div class="swiper-button-prev">
          
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php endif; ?>