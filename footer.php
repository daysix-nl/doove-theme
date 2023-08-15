<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>


<footer>
    <section class="bg-[#F8F8F8]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-[45px] lg:gap-5 xl:gap-6 xl:mx-[15px] pt-4 pb-[45px] md:pt-6 md:pb-4 lg:pt-6 lg:pb-6 xl:pt-[85px] xl:pb-[75px]">
                <div class="col-span-1 flex flex-col">
                    <!-- MENU KOLOM 1 -->
                    <?php
                    if( have_rows('primaire_footer_menu_rij_1_repeater', 'option') ):
                        while( have_rows('primaire_footer_menu_rij_1_repeater', 'option') ) : the_row(); ?>
                         <a href="<?php the_sub_field('link', 'option');?>" class="text-16 leading-36 md:text-17 md:leading-36 lg:text-15 lg:leading-30 xl:text-18 xl:leading-36 font-nunito text-<?php the_sub_field('titel_kleur', 'option');?> font-medium hover:opacity-[0.7] duration-300 w-fit"><?php the_sub_field('titel', 'option');?></a>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="col-span-1 flex flex-col lg:ml-2 xl:ml-[14px]">
                    <!-- MENU KOLOM 2 -->
                     <?php
                    if( have_rows('primaire_footer_menu_rij_2_repeater', 'option') ):
                        while( have_rows('primaire_footer_menu_rij_2_repeater', 'option') ) : the_row(); ?>
                         <a href="<?php the_sub_field('link', 'option');?>" class="text-16 leading-36 md:text-17 md:leading-36 lg:text-15 lg:leading-30 xl:text-18 xl:leading-36 font-nunito text-<?php the_sub_field('titel_kleur', 'option');?> font-medium hover:opacity-[0.7] duration-300 w-fit"><?php the_sub_field('titel', 'option');?></a>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="col-span-1 flex flex-col lg:ml-1 xl:ml-[15px]">
                    <!-- MENU KOLOM 3 -->
                    <?php
                    if( have_rows('primaire_footer_menu_rij_3_repeater', 'option') ):
                        while( have_rows('primaire_footer_menu_rij_3_repeater', 'option') ) : the_row(); ?>
                         <a href="<?php the_sub_field('link', 'option');?>" class="text-16 leading-36 md:text-17 md:leading-36 lg:text-15 lg:leading-30 xl:text-18 xl:leading-36 font-nunito text-<?php the_sub_field('titel_kleur', 'option');?> font-medium hover:opacity-[0.7] duration-300 w-fit"><?php the_sub_field('titel', 'option');?></a>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                    <div class="grid grid-cols-5 w-[268px] md:w-[268px] lg:w-[239px] xl:w-[268px] mx-auto md:mx-[unset] pt-[55px] md:pt-4 lg:pt-3 xl:pt-3">
                        <!-- SOCIAL MEDIA -->
                        <?php if (get_field('facebook', 'option')): ?><a href="<?php the_field('facebook', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/facebook.php'; ?></a><?php endif; ?>
                         <?php if (get_field('linkedin', 'option')): ?><a href="<?php the_field('linkedin', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/linkedin.php'; ?></a><?php endif; ?>
                         <?php if (get_field('google', 'option')): ?><a href="<?php the_field('google', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/google.php'; ?></a><?php endif; ?>
                         <?php if (get_field('instagram', 'option')): ?><a href="<?php the_field('instagram', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/instagram.php'; ?></a><?php endif; ?>
                         <?php if (get_field('youtube', 'option')): ?><a href="<?php the_field('youtube', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/youtube.php'; ?></a><?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="border-t-[1px] border-[#C6C6C6] opacity-[0.42] xl:mx-[15px]"></div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-[45px] lg:gap-5 xl:gap-6 xl:mx-[15px] pt-[37px] pb-[30px] md:pt-3 md:pb-[55px] lg:pt-3 lg:pb-[55px] xl:pt-[35px] xl:pb-[55px]">
                <div class="col-span-1 lg:col-span-2 flex flex-col">
                    <a href="/" class="w-[242px] md:w-[242px] lg:w-[166px] xl:w-[187px]"><?php include get_template_directory() . '/img/icons/logo.php'; ?></a>
                    <p class="text-13 leading-30 md:text-13 md:leading-30 lg:text-10 lg:leading-23 xl:text-13 xl:leading-30 font-nunito text-black lg:pt-2 xl:pt-[25px] hidden lg:block">© <?php echo date("Y"); ?> Doove Care Groep.</p>                
                </div>
                <div class="col-span-1 flex flex-col lg:ml-1 xl:ml-[15px]">
                    <div class="grid grid-cols-2 justify-items-start md:justify-items-end lg:justify-items-start">
                        <div class="col-span-1 w-[unset] md:w-full lg:w-[unset]">
                            <p class="text-15 leading-15 md:text-15 md:leading-15 lg:text-11 lg:leading-11 xl:text-15 xl:leading-15 font-nunito text-black">Contact</p>
                            <a href="tel:<?php the_field('telefoonnummer', 'option');?>" class="text-15 leading-22 md:text-15 md:leading-22 lg:text-12 lg:leading-18 xl:text-15 xl:leading-22 font-nunito text-black opacity-[0.5] pt-2 hover:opacity-[0.3] block duration-300"><?php the_field('telefoonnummer', 'option');?></a>     
                            <a href="mailto:<?php the_field('e-mailadres', 'option');?>" class="text-15 leading-22 md:text-15 md:leading-22 lg:text-12 lg:leading-18 xl:text-15 xl:leading-22 font-nunito text-black opacity-[0.5] hover:opacity-[0.3] duration-300 block"><?php the_field('e-mailadres', 'option');?></a>           
                        </div>
                        <div class="col-span-1 w-[unset] md:w-fit lg:w-[unset] mr-[unset] md:mr-1 lg:mr-[unset]">
                            <p class="text-15 leading-15 md:text-15 md:leading-15 lg:text-11 lg:leading-11 xl:text-15 xl:leading-15 font-nunito text-black">Bezoekadres</p>
                            <p class="text-15 leading-22 md:text-15 md:leading-22 lg:text-12 lg:leading-18 xl:text-15 xl:leading-22 font-nunito text-black opacity-[0.5] pt-2"><?php the_field('bezoekadres', 'option');?></p>     
                            <!-- <p class="text-15 leading-22 md:text-15 md:leading-22 lg:text-12 lg:leading-18 xl:text-15 xl:leading-22 font-nunito text-black opacity-[0.5] block"><?php the_field('', 'option');?></p>            -->
                        </div>
                    </div>
                     <p class="text-13 leading-30 md:text-13 md:leading-30 lg:text-10 lg:leading-23 xl:text-13 xl:leading-30 font-nunito text-black pt-[55px] md:pt-6 block lg:hidden">© <?php echo date("Y"); ?> Doove Care Groep.</p>
                </div>
            </div>
        </div>
    </section>
</footer>




<div id="popup-modal" class="overlay-popup absolute">
    <div class="flex justify-center items-center">
        <div class="w-[361px] md:w-[623px] lg:w-[524px] xl:w-[569px] bg-white min-h-[580px] md:min-h-[537px] xl:min-h-[569px] overflow-scroll">
            <div class="form-header flex justify-end w-full">
                <button class="button-close pt-2 pr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.086" height="11.086" viewBox="0 0 11.086 11.086">
                        <g id="Group_266" data-name="Group 266" transform="translate(-965.086 -138.086)">
                            <line id="Line_43" data-name="Line 43" x2="8.257" y2="8.257" transform="translate(966.5 139.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_44" data-name="Line 44" x1="8.257" y2="8.257" transform="translate(966.5 139.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2"/>
                        </g>
                    </svg>

                </button>
            </div>
            <div class="form-titel xl:pl-[65px]">
                <h2 class="pt-2 text-22 leading-33 md:text-21 md:leading-28 lg:text-22 lg:leading-29 xl:text-25 xl:leading-33 font-satoshi text-oranje font-semibold">Een afspraak maken</h2>
            </div>
            <div class="form-gravity py-4 xl:py-5 xl:pl-[65px]">
                <div class="w-[255px] md:w-[354px] xl:w-[400px] contact-form">
				    <?php echo do_shortcode('[gravityform id="4" title="false" ajax="true"] '); ?>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="overlay-popup-background"></div>

<div id="popup-offerte-modal" class="overlay-offerte-popup absolute">
    <div class="flex justify-center items-center">
        <div class="w-[361px] md:w-[623px] lg:w-[524px] xl:w-[569px] bg-white min-h-[580px] md:min-h-[537px] xl:min-h-[569px] overflow-scroll">
            <div class="form-header flex justify-end w-full">
                <button class="button-offerte-close pt-2 pr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.086" height="11.086" viewBox="0 0 11.086 11.086">
                        <g id="Group_266" data-name="Group 266" transform="translate(-965.086 -138.086)">
                            <line id="Line_43" data-name="Line 43" x2="8.257" y2="8.257" transform="translate(966.5 139.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_44" data-name="Line 44" x1="8.257" y2="8.257" transform="translate(966.5 139.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2"/>
                        </g>
                    </svg>

                </button>
            </div>
            <div class="form-titel xl:pl-[65px]">
                <h2 class="pt-2 text-22 leading-33 md:text-21 md:leading-28 lg:text-22 lg:leading-29 xl:text-25 xl:leading-33 font-satoshi text-oranje font-semibold">Een offerte aanvragen</h2>
            </div>
            <div class="form-gravity py-4 xl:py-5 xl:pl-[65px]">
                <div class="w-[255px] md:w-[354px] xl:w-[400px] contact-form">
				    <?php echo do_shortcode('[gravityform id="5" title="false" ajax="true"] '); ?>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="overlay-offerte-popup-background"></div>

<script>
  document.addEventListener( 'gform_confirmation_loaded', function( event, formId ) {
console.log("object");
    console.log(formId);
    // Check if the form ID is the one you want to trigger the modal for
    if(formId == 4) {
      // Show the modal
      document.getElementById( 'popup-modal' ).style.display = 'block';
    }
    else if(formId == 5) {
      // Show the modal
      document.getElementById( 'popup-offerte-modal' ).style.display = 'block';
    }
    else if (formId == 1) {
        // Show the modal for Form 1
        document.getElementById( 'hulpmiddelentest' ).style.display = 'fixed';
    }
  }, false );
</script>

<?php wp_footer('my_custom_js'); ?>
</body>
</html>
