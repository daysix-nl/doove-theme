<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto; z-index:999;">';
else: ?>
    <!-- CATEGORIE OVERZICHT -->
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
       <?php if (get_field('titel')): ?>    
        <div class="container">
            <h2 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold pb-4 md:pb-4 lg:pb-6 xl:pb-[65px]"><?php the_field('titel');?></h2>
        </div>
        <?php endif; ?>
        <div class="container">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-[15px] md:gap-x-3 lg:gap-x-[25px] xl:gap-x-3 gap-y-[15px] md:gap-y-4 lg:gap-y-[35px] xl:gap-y-3">
                 <?php
                    $post_type = 'product'; // Vervang dit met het gewenste posttype
                    $taxonomy = 'category'; // Gebruik de 'category' taxonomy
                    $categories = get_terms(array(
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false, // Toon ook lege categorieën
                    ));
                    if (!empty($categories) && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            $category_link = get_site_url() . '/producten/categorie-' . $category->slug . '/'; // Bouw de categorie-link op ?> 
                      


                            <a href="<?php echo $category_link ?>" class="col-span-1">
                                <div class="w-full aspect-square bg-[#F4F4F4] flex items-center justify-center">
                                    <img class="w-auto h-auto max-w-[133px] max-h-[133px] md:max-w-[170px] md:max-h-[170px] lg:max-w-[215px] lg:max-h-[215px] xl:max-w-[242px] xl:max-h-[242px] mix-blend-darken" src="<?php echo z_taxonomy_image_url($category->term_id); ?>" alt="">
                                </div>
                                <h3 class="font-nunito font-bold text-16 leading-20 lg:text-16 lg:leading-25 xl:text-18 xl:leading-30 text-[#332E2A] mt-[15px] mb-1 md:mt-2 md:mb-[10px]"><?php echo $category->name ?></h3>
                                <div class="font-nunito font-normal text-[#332E2A] text-14 leading-20 lg:text-15 lg:leading-24 xl:text-16 xl:leading-27 line-clamp-2"><?php echo category_description($category->term_id); ?></div>
                            </a>
                        <?php }           
                    } else {
                        echo 'Geen categorieën gevonden.';
                    }
                    ?>
            </div>
        </div>
    </section>
<?php endif; ?>