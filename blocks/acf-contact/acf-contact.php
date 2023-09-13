<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: 
?>
    <!-- CONTACT -->
<section class="bg-white">
        <div class="container grid grid-cols-1 lg:grid-cols-2 items-start pt-5 pb-[35px] md:pt-4 md:pb-4 lg:pt-[85px] lg:pb-[85px] xl:pt-9 xl:pb-9">
            <div class="col-span-1 grid gap-[25px] md:gap-3 lg:gap-4">
                <h2 class="text-25 leading-35 md:text-21 md:leading-28 xl:text-25 xl:leading-33 font-satoshi text-[#ED701F] font-semibold lg:max-w-[439px] xl:max-w-[527px]"><?php the_field('titel');?></h2>
                <p class="text-16 leading-25 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-16 xl:leading-25 font-nunito text-black font-normal max-w-[350px] md:max-w-[382px] lg:max-w-[410px] xl:max-w-[437px]"><?php the_field('tekst');?></p>   
                <div class="contact-form w-full lg:max-w-[500px] xl-max-w-[570px]">
                    <?php echo do_shortcode('[gravityform id="3" title="false" description="false"]'); ?>
                </div>
            </div>
            <div class="col-span-1 block pt-[45px] md:pt-[55px] lg::pt-0 xl:pt-[10px] min-h-[291px] md:min-h-[429px] lg:min-h-[429px] xl:min-h-[489px] h-full">
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2454.89633537465!2d4.661715478345402!3d52.026986171936215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5d1702941a95d%3A0x3872edabe47b658a!2sWilhelminakade%2010%2C%202741%20JV%20Waddinxveen!5e0!3m2!1sen!2snl!4v1689760464347!5m2!1sen!2snl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                                      
            </div>
        </div>  

</section>

<section class="bg-[#F8F8F8] xl:pt-[114px] lg:pt-[85px] md:pt-[72px] pt-[83px] xl:pb-[135px] lg:pb-[85px] md:pb-[72px] pb-[70px]">
    <div class="container lg:flex xl:space-x-[180px] lg:space-x-[168px] space-x-0 space-y-4 lg:space-y-0">
        <div class="xl:max-w-[316px] lg:max-w-[310px] md:max-w-[412px] lg:ml-4 xl:ml-[47px]">
            <img class="xl:pb-4 lg:pb-[45px] md:pb-[35px] pb-5" src="<?php echo home_url();?>/wp-content/themes/doove-theme/img/local/logo-contact.svg" alt="logo contact">
            <div>
                <h4 class="text-[#ED701F] font-bold font-nunito xl:text-16 xl:leading-25  lg:text-15 lg:leading-25 md:text-15 md:leading-25 text-16 leading-25 xl:pb-2 lg:pb-1.5 md:pb-1.5 pb-2">Kantoor en Showroom</h4>
                <p class="font-bold text-[#000000] font-nunito xl:text-15 xl:leading-25  lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25 xl:pb-1.5 lg:pb-1 md:pb-1.5 pb-[15px]"><?php the_field('adres_hoofdvestiging', 'option');?></p>
                <p class="text-[#332E2A] xl:text-15 font-nunito xl:leading-25  lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25 lg:max-w-[273px] md:max-w-full max-w-[273px]"><?php the_field('tekst_hoofdvestiging', 'option');?></p>
            </div>
            <div class="xl:pt-4 lg:pt-2.5 md:pt-3 pt-4">
                <h4 class="text-[#ED701F] font-bold font-nunito xl:text-16 xl:leading-25  lg:text-15 lg:leading-25 md:text-15 md:leading-25 text-16 leading-25 xl:pb-2 lg:pb-1.5 md:pb-1.5 pb-2">Werkplaats en afleveradres</h4>
                <p class="font-bold text-[#000000] font-nunito xl:text-15 xl:leading-25  lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25 xl:pb-1.5 lg:pb-1 md:pb-1.5 pb-[15px]"><?php the_field('adres_werkplaats', 'option');?></p>
                <p  class="text-[#332E2A] xl:text-15 font-nunito xl:leading-25  lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25 lg:max-w-[300px] md:max-w-full max-w-[300px]"><?php the_field('tekst_werkplaats', 'option');?></p>
            </div>
        </div>

        <div class="">
            <h4 class="text-[#ED701F] text-20 leading-33  xl:text-20 xl:leading-33 lg:text-15 lg:leading-25 md:text-21 md:leading-28 font-bold font-satoshi xl:pb-4 lg:pb-[37px] md:pb-[40px] pb-4">Direct de juiste afdeling bereiken</h4>
            <div class="xl:space-y-3 lg:space-y-2 md:space-y-2 space-y-2">
                <div class="flex flex-col lg:flex-row">
                    <p class="text-[#ED701F] font-bold font-nunito xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-15 md:leading-25 text-16 leading-25 xl:w-[285px] lg:w-[254px] w-full lg:pb-0 md:pb-1.5 pb-1">Algemeen</p>
                    <p class="text-[#000000] font-nunito font-normal xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25"><a href="tel:<?php the_field('algemeen', 'option');?>"><?php the_field('algemeen', 'option');?></a> <?= get_field('algemeen', 'option') && get_field('algemeen_email', 'option') ? "/" : "" ?> <a href="mailto:<?php the_field('algemeen_email', 'option');?>"><?php the_field('algemeen_email', 'option');?></a></p>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <p class="text-[#ED701F] font-bold font-nunito xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-15 md:leading-25 text-16 leading-25 xl:w-[285px] lg:w-[254px] w-full lg:pb-0 md:pb-1.5 pb-1">Sales</p>
                    <p class="text-[#000000] font-nunito font-normal xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25"><a href="tel:<?php the_field('sales', 'option');?>"><?php the_field('sales', 'option');?></a> <?= get_field('sales', 'option') && get_field('sales_email', 'option') ? "/" : "" ?> <a href="mailto:<?php the_field('sales_email', 'option');?>"><?php the_field('sales_email', 'option');?></a></p>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <p class="text-[#ED701F] font-bold font-nunito xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-15 md:leading-25 text-16 leading-25 xl:w-[285px] lg:w-[254px] w-full lg:pb-0 md:pb-1.5 pb-1">Verhuur</p>
                    <p class="text-[#000000] font-nunito font-normal xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25"><a href="tel:<?php the_field('verhuur', 'option');?>"><?php the_field('verhuur', 'option');?></a> <?= get_field('verhuur', 'option') && get_field('verhuur_email', 'option') ? "/" : "" ?> <a href="mailto:<?php the_field('verhuur_email', 'option');?>"><?php the_field('verhuur_email', 'option');?></a></p>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <p class="text-[#ED701F] font-bold font-nunito xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-15 md:leading-25 text-16 leading-25 xl:w-[285px] lg:w-[254px] w-full lg:pb-0 md:pb-1.5 pb-1">WLZ / Verzekerde Zorg</p>
                    <p class="text-[#000000] font-nunito font-normal xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25"><a href="tel:<?php the_field('wlz_verzekerde_zorg', 'option');?>"><?php the_field('wlz_verzekerde_zorg', 'option');?></a> <?= get_field('wlz_verzekerde_zorg', 'option') && get_field('wlz_verzekerde_zorg_email', 'option') ? "/" : "" ?> <a href="mailto:<?php the_field('wlz_verzekerde_zorg_email', 'option');?>"><?php the_field('wlz_verzekerde_zorg_email', 'option');?></a></p>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <p class="text-[#ED701F] font-bold font-nunito xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-15 md:leading-25 text-16 leading-25 xl:w-[285px] lg:w-[254px] w-full lg:pb-0 md:pb-1.5 pb-1">Service, Reparatie en onderhoud</p>
                    <p class="text-[#000000] font-nunito font-normal xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25"><a href="tel:<?php the_field('service_reparatie_onderhoud', 'option');?>"><?php the_field('service_reparatie_onderhoud', 'option');?></a> <?= get_field('service_reparatie_onderhoud', 'option') && get_field('service_reparatie_onderhoud_email', 'option') ? "/" : "" ?> <a href="mailto:<?php the_field('service_reparatie_onderhoud_email', 'option');?>"><?php the_field('service_reparatie_onderhoud_email', 'option');?></a></p>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <p class="text-[#ED701F] font-bold font-nunito xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-15 md:leading-25 text-16 leading-25 xl:w-[285px] lg:w-[254px] w-full lg:pb-0 md:pb-1.5 pb-1">Planning</p>
                    <p class="text-[#000000] font-nunito font-normal xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-16 leading-25"><a href="tel:<?php the_field('planning', 'option');?>"><?php the_field('planning', 'option');?></a> <?= get_field('planning', 'option') && get_field('planning_email', 'option') ? "/" : "" ?> <a href="mailto:<?php the_field('planning_email', 'option');?>"><?php the_field('planning_email', 'option');?></a></p>
                </div>
            </div>
        </div>

        
    </div>
</section>

<section class="xl:pb-[55px] xl:pt-[45px] lg:pb-[53] lg:pt-[60px] md:pt-[35px] md:pb-[43px] pt-6 pb-4 lg:ml-4 xl:ml-[47px] bg-white">
    <div  class="container">
        <h2 class="xl:pb-[47px] lg:pb-[33px] md:pb-[34px] pb-[46px] text-25 leading-35 md:text-21 md:leading-28 lg:text-21 lg:leading-28 xl:text-25 xl:leading-35 font-satoshi text-[#332E2A] font-bold">Overige gegevens</h2>
        <div class="max-w-[750px] grid grid-cols-1 lg:grid-cols-2 text-16 leading-25 md:text-14 md:leading-24 lg:text-15 lg:leading-25  font-nunito text-[#332E2A] font-normal content">
            <div class="grid xl:grid-cols-[185px_185px] lg:grid-cols-[185px_195px] md:grid-cols-[170px_160px] grid-cols-[163px_183px]">
                <p class="font-bold font-nunito text-[#000000] xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-25 text-16 leading-25">KvK nummer</p>  
                <p class="font-nunito text-[#000000] xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-25 text-16 leading-25"><?php the_field('kvk', 'option');?></p>   
                <p class="font-bold font-nunito text-[#000000] xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-25 text-16 leading-25">BTW nummer</p>  
                <p class="font-nunito text-[#000000] xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-25 text-16 leading-25"><?php the_field('btw', 'option');?></p>    
            </div>
            <div class="grid xl:grid-cols-[185px_185px] lg:grid-cols-[185px_195px] md:grid-cols-[170px_160px] grid-cols-[163px_183px]">
                <p class="font-bold font-nunito text-[#000000] xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-25 text-16 leading-25">Rekeningnummer</p>  
                <p class="font-nunito text-[#000000] xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-25 text-16 leading-25 uppercase"><?php the_field('rekeningnummer', 'option');?></p>   
                <p class="font-bold font-nunito text-[#000000] xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-25 text-16 leading-25 uppercase">BIC</p>  
                <p class="uppercase font-nunito text-[#000000] xl:text-16 xl:leading-25 lg:text-15 lg:leading-25 md:text-14 md:leading-25 text-16 leading-25"><?php the_field('bic', 'option');?></p>  
            </div>
        </div>
    </div>
</section>
<?php endif; ?>