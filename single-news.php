<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header(); ?>
 <main>
<?php the_content(); ?>
 <!-- C2A EMAILADRES -->
     <section class="bg-[#F8F8F8] padding-top-l padding-bottom-l>">
        <div class="container">
            <h2 class="text-25 leading-33 md:text-21 md:leading-28 lg:text-21 lg:leading-28 xl:text-25 xl:leading-33 font-satoshi text-black font-semibold w-[412px] md:w-[432px] xl:w-[490px] mx-auto text-center">Wil je updates van het laatste nieuws van
<br>Doove Care Groep ontvangen?</h2>
            <div class="update w-[350px] md:w-[442px] lg:w-[436px] xl:w-[486px] mx-auto pt-2 md:pt-[45px] xl:pt-4">
                <?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ); ?>
            </div>        
        </div>
    </section>
     
    </main>
<?php get_footer(); ?>

<!-- xl:text- xl:leading-  lg:text- lg:leading- md:text- md:leading- -->
