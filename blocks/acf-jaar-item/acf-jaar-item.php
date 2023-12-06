<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php
$image1 = get_field('achtergrond');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
    <!-- JAAR ITEM -->
    <?php if (get_field('uitlijning') !== "content-rechts"): ?>   
    <section class="h-[738px] md:h-[calc(100dvh-91px)] lg:h-[calc(100dvh-88px)] xl:h-[calc(100dvh-88px)] min-h-[738px] md:min-h-[533px] lg:min-h-[560px] xl:min-h-[631px] max-h-[738px] md:max-h-[933px] lg:max-h-[632px] xl:max-h-[722px] overflow-hidden relative bg-white jaar-item">
        <div class="z-[2] relative h-full w-full flex flex-col md:flex-row justify-between px-[20px] md:px-[unset] max-w-[390px] md:max-w-[604px] lg:max-w-[911px] xl:max-w-[1068px] mx-auto items-center">
            <div class="grid items-center h-full">
                <div class="w-full md:w-[381px] lg:w-[412px] xl:w-[490px] grid h-fit">
                    <h3 class="order-1 font-satoshi font-medium italic text-<?php the_field('jaartal_kleur');?> text-76 leading-56 md:text-74 md:leading-54 lg:text-75 lg:leading-55 xl:text-80 xl:leading-60 pt-[5px] md:pt-[unset]"><?php the_field('jaartal');?></h3>
                    <h2 class="order-2 font-satoshi font-bold text-25 leading-35 text-<?php the_field('titel_kleur');?> md:hidden mt-[40px]"><?php the_field('titel');?></h2>
                    <div class="order-4 md:order-2 w-[350px] h-[211px] md:w-[382px] md:h-[220px] lg:w-[412px] lg:h-[239px] xl:w-[490px] xl:h-[284px] bg-black mt-[65px] md:mt-[52px] lg:mt-[50px] xl:mt-[45px] overflow-hidden">
                        <?php if (get_field('beeld') !== "video"): ?>   
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-center-center">
                        <?php endif; ?>
                        <?php if (get_field('beeld') !== "afbeelding"): ?>   
                        <iframe class="w-[350px] h-[211px] md:w-[382px] md:h-[220px] lg:w-[412px] lg:h-[239px] xl:w-[490px] xl:h-[284px]" src="https://www.youtube-nocookie.com/embed/<?php the_field('id_youtube');?>?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>
                    <p class="order-3 md:order-3 font-nunito font-normal text-18 leading-30 md:text-14 md:leading-23 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 mt-3 md:max-h-[155px] lg:max-h-[unset] overflow-hidden"><?php the_field('tekst');?></p>
                </div>
            </div>
            <div class="w-[2px] ml-[8px] lg:ml-[unset] h-full relative hidden md:block">
                <div class="bg-[#ED701F] w-[2px] absolute <?php the_field('tijdlijn');?> left-0 right-0"></div>
                <div class="absolute bg-[#ED701F] w-[9px] h-[9px] mx-auto rounded-full top-[calc(50%-4.5px)] left-[-3.5px]"></div>
            </div>
            <div class="w-full md:w-[146px] lg:w-[412px] xl:w-[490px] hidden md:block">
                <h2 class="font-satoshi font-bold md:text-21 md:leading-28 lg:text-22 leading-31 xl:text-25 xl:leading-35 text-<?php the_field('titel_kleur');?>"><?php the_field('titel');?></h2>
            </div>
        </div>
        <div class="absolute top-0 left-0 right-0 bottom-0 z-[0]">
            <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="min-h-full min-w-full object-cover object-center-center opacity-[0.2]">
        </div>
         <div class="absolute top-0 left-0 right-0 bottom-0 z-[1]">
            <div class="h-full w-full bg-white opacity-[0.17]"></div>
        </div>
    </section>
    <?php endif; ?>
    <?php if (get_field('uitlijning') !== "content-links"): ?>  
     <section class="h-[738px] md:h-[calc(100dvh-91px)] lg:h-[calc(100dvh-88px)] xl:h-[calc(100dvh-88px)] min-h-[738px] md:min-h-[533px] lg:min-h-[560px] xl:min-h-[631px] max-h-[738px] md:max-h-[933px] lg:max-h-[632px] xl:max-h-[722px] overflow-hidden relative bg-white jaar-item">
        <div class="z-[2] relative h-full w-full flex flex-col md:flex-row justify-between px-[20px] md:px-[unset] max-w-[390px] md:max-w-[604px] lg:max-w-[911px] xl:max-w-[1068px] mx-auto items-center">
            <div class="order-1 lg:order-3 grid items-center h-full">
                <div class="w-full md:w-[381px] lg:w-[412px] xl:w-[490px] grid h-fit">
                    <h3 class="order-1 font-satoshi font-medium italic text-<?php the_field('jaartal_kleur');?> text-76 leading-56 md:text-74 md:leading-54 lg:text-75 lg:leading-55 xl:text-80 xl:leading-60 pt-[5px] md:pt-[unset]"><?php the_field('jaartal');?></h3>
                    <h2 class="order-2 font-satoshi font-bold text-25 leading-35 text-<?php the_field('titel_kleur');?> md:hidden mt-[40px]"><?php the_field('titel');?></h2>
                    <div class="order-4 md:order-2 w-[350px] h-[211px] md:w-[382px] md:h-[220px] lg:w-[412px] lg:h-[239px] xl:w-[490px] xl:h-[284px] bg-black mt-[65px] md:mt-[52px] lg:mt-[50px] xl:mt-[45px] overflow-hidden">
                        <?php if (get_field('beeld') !== "video"): ?>   
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-center-center">
                        <?php endif; ?>
                        <?php if (get_field('beeld') !== "afbeelding"): ?>   
                        <iframe class="w-[350px] h-[211px] md:w-[382px] md:h-[220px] lg:w-[412px] lg:h-[239px] xl:w-[490px] xl:h-[284px]" src="https://www.youtube-nocookie.com/embed/<?php the_field('id_youtube');?>?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>
                    <p class="order-3 md:order-3 font-nunito font-normal text-18 leading-30 md:text-14 md:leading-23 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 mt-3 max-h-[182px] md:max-h-[155px] lg:max-h-[unset] overflow-hidden"><?php the_field('tekst');?></p>
                </div>
            </div>
            <div class="order-2 w-[2px] ml-[8px] lg:ml-[unset] h-full relative hidden md:block">
                <div class="bg-[#ED701F] w-[2px] absolute <?php the_field('tijdlijn');?> left-0 right-0"></div>
                <div class="absolute bg-[#ED701F] w-[9px] h-[9px] mx-auto rounded-full top-[calc(50%-4.5px)] left-[-3.5px]"></div>
            </div>
            <div class="w-full md:w-[146px] lg:w-[412px] xl:w-[490px] hidden md:block order-2 lg:order-1 text-left lg:text-right">
                <h2 class="font-satoshi font-bold md:text-21 md:leading-28 lg:text-22 leading-31 xl:text-25 xl:leading-35 text-<?php the_field('titel_kleur');?>"><?php the_field('titel');?></h2>
            </div>
        </div>
        <div class="absolute top-0 left-0 right-0 bottom-0 z-[0]">
            <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="min-h-full min-w-full object-cover object-center-center opacity-[0.2]">
        </div>
         <div class="absolute top-0 left-0 right-0 bottom-0 z-[1]">
            <div class="h-full w-full bg-white opacity-[0.17]"></div>
        </div>
    </section>
    <?php endif; ?>

<?php endif; ?>