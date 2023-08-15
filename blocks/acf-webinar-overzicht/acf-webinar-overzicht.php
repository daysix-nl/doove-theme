<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- WEBINAR OVERZICHT -->
        <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-[15px] md:gap-x-3 lg:gap-x-[25px] xl:gap-x-3 gap-y-[15px] md:gap-y-4 lg:gap-y-[35px] xl:gap-y-3">
                <?php
                        $loop = new WP_Query( array(
                            'post_type' => 'webinar',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        )
                        );
                        ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        $post_id = get_the_ID();
                        $formatted_date = get_field('datum', $post_id);
                        $formatted_date = ucfirst($formatted_date);
                    ?>
                    <a href="<?php the_permalink();?>" class="col-span-1 hover:opacity-80 duration-300">
                        <div class="w-full aspect-[4/3] bg-[#F4F4F4] flex items-center justify-center bg-center bg-cover" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
                        <div class="min-h-[228px] md:min-h-[209px] lg:min-h-[208px] xl:min-h-[234px]">
                            <h3 class="font-nunito font-bold text-18 leading-30 md:text-15 md:leading-25 xl:text-18 xl:leading-30 text-[#332E2A] pt-[15px] md:pt-2 line-clamp-2 mr-2"><?php the_title();?></h3>
                            <p class="font-nunito font-normal text-[#332E2A] text-18 leading-30 md:text-15 md:leading-25 xl:text-18 xl:leading-30 line-clamp-3 mr-2 mt-1"><?php the_field('introductie_tekst', $post_id);?></p>
                            <p class="font-satoshi font-semibold text-14 leading-24 uppercase text-[#332E2A] pt-[15px]">Lees meer</p>
                        </div>
                        <div class="bg-[#FF7922] flex justify-center items-center w-full h-[49px] md:h-[42px] lg:h-[35px] xl:h-[39px]"><p class="text-white font-nunito font-bold text-18 leading-22 md:text-15 md:leading-22 lg:text-15 lg:leading-19 xl:text-18 xl:leading-22"><?php echo $formatted_date; ?></p></div>
                    </a>
                <?php endwhile; wp_reset_query(); ?>  
            </div>
        </div>
    </section>
<?php endif; ?>