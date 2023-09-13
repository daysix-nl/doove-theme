<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- NIEUWS OVERZICHT -->
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-[15px] md:gap-x-3 lg:gap-x-[25px] xl:gap-x-3 gap-y-[15px] md:gap-y-4 lg:gap-y-[35px] xl:gap-y-3">

                <?php
                // add page for to go to the next 9 posts
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $loop = new WP_Query( array(
                            'post_type' => 'news',
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'paged' => $paged, 
                            'order' => 'DESC'
                        )
                        );
                        ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        $post_id = get_the_ID();?>
                    <a href="<?php the_permalink();?>" class="col-span-1 hover:opacity-80 duration-300">
                        <div class="w-full aspect-[4/3] bg-[#F4F4F4] flex items-center justify-center bg-center bg-cover" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
                        <h3 class="font-nunito font-bold text-18 leading-30 md:text-15 md:leading-25 xl:text-18 xl:leading-30 text-[#332E2A] pt-[15px] md:pt-2 line-clamp-2"><?php the_title();?></h3>
                        <p class="my-[6px] font-nunito font-normal text-[#6A5E54] text-15 leading-30 md:text-13 md:leading-25 xl:text-15 xl:leading-30"><?php echo get_the_date('d F Y'); ?></p>
                        <p class="font-nunito font-normal text-[#332E2A] text-18 leading-30 md:text-15 md:leading-25 xl:text-18 xl:leading-30 line-clamp-3 mr-2"><?php the_field('introductie_tekst', $post_id);?></p>
                        <p class="font-satoshi font-semibold text-14 leading-24 uppercase text-[#ED701F] pt-[15px]">Lees meer</p>
                    </a>
                <?php endwhile; wp_reset_query(); ?>  
                <!-- make button here -->
            </div>
        </div>
        <div class="container flex">
          
            <div class="pagination-wordpress mx-auto">
                <?php 
                    $big = 999999999; 
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $loop->max_num_pages
                    ) );
                ?>
            </div>

        </div>
    </section>
<?php endif; ?>