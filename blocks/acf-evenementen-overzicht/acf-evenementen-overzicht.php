<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- EVENEMENTEN OVERZICHT -->
 <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container">
            <h2 class="text-25 leading-33 md:text-21 md:leading-28 lg:text-21 lg:leading-28 xl:text-25 xl:leading-33 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold"><?php the_field('titel');?></h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-x-[15px] md:gap-x-3 lg:gap-x-[25px] xl:gap-x-3 gap-y-[15px] md:gap-y-4 lg:gap-y-[35px] xl:gap-y-3 pt-6 md:pt-5 lg:pt-4 xl:pt-7">
                <?php
                        $loop = new WP_Query( array(
                            'post_type' => 'evenementen',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        )
                        );
                        ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        $post_id = get_the_ID();
                        $formatted_date = get_field('datum', $post_id);
                    ?>
                    <a href="<?php the_permalink();?>" class="col-span-1 hover:opacity-80 duration-300">
                        <div class="w-full aspect-square bg-white flex items-center justify-center bg-center bg-cover" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
                        <h3 class="font-nunito font-bold text-18 leading-30 md:text-15 md:leading-25 xl:text-18 xl:leading-30 text-[#332E2A] pt-[15px] md:pt-2 line-clamp-4 lg:line-clamp-2"><?php the_title();?></h3>
                        <p class="my-[6px] font-nunito font-normal text-[#6A5E54] text-15 leading-30 md:text-13 md:leading-25 xl:text-15 xl:leading-30"><?php echo $formatted_date; ?></p>
                    </a>
                <?php endwhile; wp_reset_query(); ?>  
            </div>
        </div>
    </section>
<?php endif; ?>