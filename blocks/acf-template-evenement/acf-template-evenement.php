<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: 
$post_id = get_the_ID();
$formatted_date = get_field('datum', $post_id);
?>
    <!-- TEMPLATE EVENEMENT ITEM -->
    <div class="overflow-x-hidden bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <section class="xl:mt-11 xl:mb-3 lg:mb-[25px] md:mb-5 mb-4 mt-10">
        <div class="container h-full flex flex-col justify-center">
            <p class="text-12 leading-20 md:text-12 md:leading-14 lg:text-12 lg:leading-18 xl:text-12 xl:leading-22 text-[#726A63]/[0.35] font-nunito font-semibold space-x-[15px] hidden md:flex">
                <a href="/">Home</a>
                <span class="block">></span>
                <a href="/academie">Academie</a>
                <span  class="block">></span>
                <span class="block"><?php the_title() ?></span>
            </p>
        </div>
    </section>
    <section class="xl:pb-[47px] lg:pb-[37px] md:pb-[37px] pb-[25px]">
        <div class="container">
            <div class="object-cover xl:w-[590px] xl:h-[340px] lg:w-[524px] lg:h-[302px] md:w-[524px] md:h-[302px] w-full h-auto aspect-video bg-[#F4F4F4] bg-center bg-cover" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
        </div>
    </section>
    <section class="xl:pb-[93px] lg:pb-[81px] md:pb-[54px] pb-5" >
        <div class="container">
            <div class="w-full xl:max-w-[893px] lg:max-w-[747]">
                <h1 class="text-[#ED701F] font-satoshi font-bold xl:text-25 xl:leading-33  lg:text-22 lg:leading-29 md:text-21 md:leading-28 text-25 leading-33 xl:pb-2 lg:pb-2 md:pb-2 pb-3"><?php the_title();?></h1>
                <p class="text-[#332E2A]/[0.5] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-15 leading-30 xl:pb-3 lg:pb-[27px] md:pb-[22px] pb-2.5"><?php echo $formatted_date; ?></p>
                <div class="xl:space-y-4 lg:space-y-[35px] md:space-y-[35px] space-y-[45px]">
                <?php $allowed_blocks_text = ['acf/acf-element-wysiwyg-editor', 'acf/acf-element-videos', 'acf/acf-element-button' ]; ?> <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_text ) ); ?>" />
                </div>
            </div>
        </div>
    </section>
</div>
<?php endif; ?>