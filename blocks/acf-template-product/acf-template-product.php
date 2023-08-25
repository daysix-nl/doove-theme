<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <?php 
    // Haal de categorieën op waartoe de huidige post behoort
    $categories = get_the_category();
    // Controleer of er categorieën zijn gevonden
    if (!empty($categories)) {
        // Haal de eerste categorie op (je kunt dit aanpassen als nodig)
        $current_category = $categories[0];
        // Haal de naam en slug van de categorie op
        $category_name = $current_category->name;
        $category_slug = $current_category->slug;
    }
    ?>

    <!-- TEMPLATE PRODUCT -->
 <div class="overflow-x-hidden bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <section class="xl:pt-11 xl:pb-3 lg:pb-[25px] md:pb-5 mb-4 pt-10">
        <div class="container h-full flex flex-col justify-center">
            <p class="text-12 leading-20 md:text-12 md:leading-14 lg:text-12 lg:leading-18 xl:text-12 xl:leading-22 text-[#726A63]/[0.35] font-nunito font-semibold space-x-[15px] hidden md:flex"><a href="/">Home</a><span  class="block">></span><a href="/zorghulpmiddelen">Zorghulpmiddelen</a><span  class="block">></span><a href="/producten/categorie-<?php echo $category_slug;?>"><?php echo $category_name; ?></a><span  class="block">></span><span class="block"><?php the_title() ?></span></p>
        </div>
    </section>
     <section class="xl:pb-[73px] lg:pb-[65px] md:pb-[63px] pb-4 ">
        <div class="container grid grid-cols-2 lg:gap-8 md:gap-[35px]">
        <div class="flex-col w-full md:hidden flex col-span-2">
            <h1 class="font-bold font-satoshi  text-[#ED701F] text-22 leading-33 mb-[22px]"><?php the_title();?></h1>
            <h2 class="font-nunito text-[#332E2A] font-semibold text-16 leading-30 mb-2"><?php the_field('subtitel');?></h2>
        </div>
            <div class="col-span-2 md:col-span-1 flex flex-col lg:flex-row xl:space-x-[40px] lg:space-x-[35px]">
                <div class="swiper-container overflow-[inherit] thumbs xl:w-[108px] lg:w-[96px] w-full lg:h-fit md:h-[73px] h-[98px] md:overflow-hidden order-1 lg:order-first">
                    <div class="swiper-wrapper w-full">
                        <?php
                            // Check rows existexists.
                            if( have_rows('product_afbeeldingen_repeater') ):
                                // Loop through rows.
                                while( have_rows('product_afbeeldingen_repeater') ) : the_row(); ?>
                                    <div class="swiper-slide bg-[#F4F4F4] lg:w-full w-auto lg:h-auto h-full aspect-square flex p-1"><img class="mx-auto my-auto w-full h-auto mix-blend-darken" src="<?php the_sub_field('product_afbeelding');?>" alt="Afbeelding <?php the_title();?>"></div>
                                <?php
                                // End loop.
                                endwhile;
                            // No value.
                            else :
                                // Do something...
                            endif;
                        ?>
                    </div>
                </div>
                <div class="swiper-container big w-full h-auto overflow-hidden order-first lg:order-1 lg:mb-0 md:mb-2 mb-3 relative">
                    <div class="swiper-wrapper">
                        <?php
                            // Check rows existexists.
                            if( have_rows('product_afbeeldingen_repeater') ):
                                // Loop through rows.
                                while( have_rows('product_afbeeldingen_repeater') ) : the_row(); ?>
                                    <div class="swiper-slide bg-[#F4F4F4] lg:w-full w-auto lg:h-auto h-full flex p-4 aspect-square"><img class="mx-auto my-auto w-full h-auto mix-blend-darken" src="<?php the_sub_field('product_afbeelding');?>" alt="Afbeelding <?php the_title();?>"></div>
                                <?php
                                // End loop.
                                endwhile;
                            // No value.
                            else :
                                // Do something...
                            endif;
                        ?>
                    </div>
                    <div class="swiper-button-next hidden md:block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="xl:w-[16px_!important] lg:w-[14px_!important] w-[17px_!important] h-full" viewBox="0 0 15.429 14.846">
                            <g id="Group_233" data-name="Group 233" transform="translate(0 1.466)">
                                <g id="Group_179" data-name="Group 179" transform="matrix(0.719, 0.695, -0.695, 0.719, 8.011, 0)">
                                <path id="Path_1" data-name="Path 1" d="M0,0,8.312.311v8.3" transform="translate(0)" fill="none" stroke="#726a63" stroke-linecap="round" stroke-width="2"/>
                                </g>
                                <line id="Line_35" data-name="Line 35" x2="13.933" transform="translate(0 6.008)" fill="none" stroke="#726a63" stroke-width="2"/>
                            </g>
                        </svg>
                    </div>
                    <div class="swiper-button-prev hidden md:block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="xl:w-[16px_!important] lg:w-[14px_!important] w-[17px_!important] h-full ml-auto" viewBox="0 0 15.429 14.846">
                            <g id="Group_234" data-name="Group 234" transform="translate(15.429 13.38) rotate(180)">
                                <g id="Group_179" data-name="Group 179" transform="matrix(0.719, 0.695, -0.695, 0.719, 8.011, 0)">
                                <path id="Path_1" data-name="Path 1" d="M0,0,8.312.311v8.3" transform="translate(0)" fill="none" stroke="#726a63" stroke-linecap="round" stroke-width="2"/>
                                </g>
                                <line id="Line_35" data-name="Line 35" x2="13.933" transform="translate(0 6.008)" fill="none" stroke="#726a63" stroke-width="2"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-span-2 md:col-span-1">
                <h1 class="xl:mt-[25px] lg:mt-[22px] mt-0 xl:text-25 xl:leading-33 lg:text-22 lg:leading-29 font-bold font-satoshi lg:text-[#332E2A] text-[#ED701F] md:text-22 md:leading-18  text-22 leading-29 xl:mb-[35px] md:mb-3 mb-2 hidden md:flex"><?php the_title();?></h1>
                <h2 class="font-nunito text-[#332E2A] font-bold xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 leading-28 md:mb-[23px] hidden md:flex"><?php the_field('subtitel');?></h2>
                <div class="font-nunito text-[#332E2A] font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 xl:max-w-[540px] lg:max-w-[440px] md:max-w-[340px] lg:mb-[73px] md:mb-[23px] mb-[26px] mt-4 md:mt-0 text-editor"><?php the_field('tekst');?></div>
                <div class="flex md:flex-row flex-col md:space-y-0 space-y-2 xl:space-x-3 lg:space-x-2 md:space-x-1">
                    <button id="proefaanvragen" onclick="location.href='#'" type="button" class="md:w-fit lg:px-2 px-[12px] xl:h-4 lg:h-[35px] bg-[#FF7922] font-nunito xl:text-18 xl:leading-22 lg:text-15 lg:leading-18 md:h-[42px] md:text-15 md:leading-22 font-bold text-white h-5 text-18 leading-22 w-full">Proef aanvragen</button>
                    <button id="offerteaanvragen" onclick="location.href='#'" type="button" class="md:w-fit lg:px-2 px-[12px] xl:h-4 lg:h-[35px] bg-[#FF7922] font-nunito xl:text-18 xl:leading-22 lg:text-15 lg:leading-18 md:h-[42px] md:text-15 md:leading-22 font-bold text-white h-5 text-18 leading-22 w-full">Offerte aanvragen</button>
                     
                </div>
            </div>
        </div>
     </section>
    <section class="xl:mb-[65px] lg:mb-[85px] md:mb-[50px] mb-[50px]">
        <div class="container hidden md:block">
            <div class="">
                <div class="tab-wrapper h-auto">
                    <div class="tab-header flex flex-col md:flex-row">
                            <?php
                                // Check value exists.
                                if( have_rows('tabbladen_repeater') ):
                                    // Loop through rows.
                                    while ( have_rows('tabbladen_repeater') ) : the_row(); 
                                        // Case: Tabblad
                                        if( get_row_layout() == 'tabblad' ): ?>
                                         <button class="tab-btn text-[#332E2A] font-nunito xl:text-18 xl:leading-30  lg:text-15 lg:leading-25 md:text-15 md:leading-25 xl:mr-[65px] lg:mr-[53px] mr-[43px]"><?php the_sub_field('titel');?></button>
                                       <?php
                                        endif;
                                    // End loop.
                                    endwhile;
                                // No value.
                                else :
                                    // Do something...
                                endif;
                            ?>
                        <div class="underline hidden md:flex"></div>
                    </div>
                    <div class="tab-body">
                            <?php
                                // Check value exists.
                                if( have_rows('tabbladen_repeater') ):
                                    // Loop through rows.
                                    while ( have_rows('tabbladen_repeater') ) : the_row(); 
                                        // Case: Tabblad
                                        if( get_row_layout() == 'tabblad' ): ?>
                                        <div class="tab-content">
                                            <div class="">
                                                <div class="text-[#332E2A] font-nunito xl:text-18 xl:leading-30  lg:text-15 lg:leading-25 md:text-14 md:leading-24 xl:max-w-[944px] lg:max-w-[787px] w-full text-editor"><?php the_sub_field('tekst');?>
                                                </div>
                                            </div>
                                        </div>
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
            </div>
        </div>
        <div class="container md:hidden">
                <div class="accordion-item"> 
                             <?php
                                // Check value exists.
                                if( have_rows('tabbladen_repeater') ):
                                    // Loop through rows.
                                    while ( have_rows('tabbladen_repeater') ) : the_row(); 
                                        // Case: Tabblad
                                        if( get_row_layout() == 'tabblad' ): ?>
                                         <button class="accordion text-18 leading-30 font-nunito font-bold h-[65px] flex items-center text-[#332E2A]"><?php the_sub_field('titel');?></button>
                                            <div class="panel">
                                                <div class="text-18 leading-30 font-nunito text-[#332E2A] pb-2 text-editor">
                                                   <?php the_sub_field('tekst');?>
                                                </div>
                                            </div>
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
    
    <section >
        <div class="container">
            <?php $allowed_blocks_text = ['acf/acf-element-wysiwyg-editor', 'acf/acf-element-videos', 'acf/acf-element-button' ]; ?> <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_text ) ); ?>" />
        </div>
     </section>
    
     <section class="xl:mb-[190px] lg:mb-[100px] md:mb-[55px] mb-[80px]">
        <div class="container">
            <h3 class="text-[#ED701F] font-bold font-satoshi xl:text-25 xl:leading-33 lg:text-22 lg:leading-29 md:text-18 md:leading-25 text-25 leading-33 xl:mb-[37px] lg:mb-[33px] md:mb-[27px] mb-[35px]">Gerelateerde producten</h3>
        </div>
        <div class="container grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 xl:gap-[30px] lg:gap-[26px] md:gap-[33px] gap-x-[24px] gap-y-[28px] gerelateerde__producten">
             <?php
                // Haal de huidige post op
                $current_post = get_post();
                // Haal de categorieën van de huidige post op
                $categories = wp_get_post_categories($current_post->ID);
                // Als er categorieën zijn, voer dan de query uit
                if ($categories) {
                    $args = array(
                        'post_type' => 'product',
                        'category__in' => $categories,
                        'post__not_in' => array($current_post->ID),
                        'posts_per_page' => 4, // Aantal gerelateerde berichten om weer te geven
                    );
                    $related_query = new WP_Query($args);
                    if ($related_query->have_posts()) { 
                        while ($related_query->have_posts()) {
                            $related_query->the_post(); 
                             $post_id = get_the_ID(); ?>

                              <a href="<?php the_permalink();?>" class="col-span-1 md:last-of-type:hidden lg:last-of-type:block">
                                    <div class="w-full aspect-square bg-[#F4F4F4] flex items-center justify-center">
                                        <img class="w-auto h-auto max-w-[133px] max-h-[133px] md:max-w-[170px] md:max-h-[170px] lg:max-w-[215px] lg:max-h-[215px] xl:max-w-[242px] xl:max-h-[242px] mix-blend-darken" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                    </div>
                                    <h3 class="font-nunito font-bold text-16 leading-20 lg:text-16 lg:leading-25 xl:text-18 xl:leading-30 text-[#332E2A] mt-[15px] mb-1 md:mt-2 md:mb-[10px]"><?php the_title();?></h3>
                                    <p class="font-nunito font-normal text-[#332E2A] text-14 leading-20 lg:text-15 lg:leading-24 xl:text-16 xl:leading-27"><?php the_field('introductie_tekst', $post_id);?></p>
                                </a>
                            <?php
                        }
                        // Herstel de oorspronkelijke postgegevens
                        wp_reset_postdata();
                    } else {
                        echo 'Geen gerelateerde producten gevonden.';
                    }
                }
            ?>
        </div>
     </section>
</div>
</div>
<?php endif; ?>