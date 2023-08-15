<?php
/**
 * Template name: Filter
 */


 get_header(); ?>
 
<main>
   <!-- HEADER 2 -->
    <section class="h-[127px] md:h-[130px] lg:h-[140px] xl:h-[160px] mt-[82px] md:mt-[71px] lg:mt-[68px] bg-[#F4F4F5]">
        <div class="container h-full flex flex-col justify-center">
            <p class="text-12 leading-20 md:text-12 md:leading-14 lg:text-12 lg:leading-18 xl:text-12 xl:leading-22 text-[#726A63]/[0.35] font-nunito font-semibold space-x-[15px] hidden md:flex"><a href="/">Home</a><span  class="block">></span><a href="/zorghulpmiddelen">Zorghulpmiddelen</a><span  class="block">></span><span class="block"><?php include('/Users/daysix/Local Sites/doove-care-groep/app/public/wp-content/themes/doove-theme/componenten/show-current-caregory.php'); ?></span></p>
            <h1 class="text-22 leading-33 md:text-25 md:leading-35 lg:text-31 lg:leading-41 xl:text-35 xl:leading-45 font-satoshi text-[#ED701F] font-semibold pt-1"><?php include('/Users/daysix/Local Sites/doove-care-groep/app/public/wp-content/themes/doove-theme/componenten/show-current-caregory.php'); ?>
            </h1>
        </div>
    </section>
    <section>
        <div class="container pt-3 pb-4 lg:pt-[30px] lg:pb-[42px] xl:pt-[35px] xl:pb-[35px]">
            <?php echo do_shortcode( '[fe_widget]' ); ?>
        </div>
    </section>
    <section>
        <div class="container pb-6 md:pb-[85px] lg:pb-[150px] xl:pb-[155px] ajax">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-[15px] md:gap-x-3 lg:gap-x-[25px] xl:gap-x-3 gap-y-[15px] md:gap-y-4 lg:gap-y-[35px] xl:gap-y-3">
                <?php
                    // De huidige categorie term ID ophalen
                    $category = get_queried_object();
                    // Array van tag ID's ophalen die aan deze categorie zijn gekoppeld
                    $tags_in_category = wp_get_post_tags($category->term_id, array('fields' => 'ids'));
                    // Aangepaste WP Query maken om berichten op te halen met zowel de huidige categorie als de bijbehorende tags
                    $args = array(
                        'post_type' => 'product',  // Het posttype dat je wilt weergeven
                        'posts_per_page' => -1, // Het aantal berichten dat je wilt weergeven (-1 toont alle)
                        'cat' => $category->term_id, // Categorie term ID
                        'tag__in' => $tags_in_category, // Tags in de huidige categorie
                    );
                    $query = new WP_Query($args);
                    // De loop starten
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $post_id = get_the_ID(); ?>
                            
                            <a href="<?php the_permalink();?>" class="col-span-1">
                                <div class="w-full aspect-square bg-[#F4F4F4] flex items-center justify-center">
                                    <img class="w-auto h-auto max-w-[133px] max-h-[133px] md:max-w-[170px] md:max-h-[170px] lg:max-w-[215px] lg:max-h-[215px] xl:max-w-[242px] xl:max-h-[242px] mix-blend-darken" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                </div>
                                <h3 class="font-nunito font-bold text-16 leading-20 lg:text-16 lg:leading-25 xl:text-18 xl:leading-30 text-[#332E2A] mt-[15px] mb-1 md:mt-2 md:mb-[10px]"><?php the_title();?></h3>
                                <p class="font-nunito font-normal text-[#332E2A] text-14 leading-20 lg:text-15 lg:leading-24 xl:text-16 xl:leading-27 line-clamp-2"><?php the_field('introductie_tekst', $post_id);?></p>
                            </a>
                            <?php
                        }
                    } else {
                        echo 'Geen producten gevonden.';
                    }
                    // Terugzetten van de originele query
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
    </section>
    <script>
    window.addEventListener('DOMContentLoaded', function() {
    // Zoek alle elementen met de class ".wpc-filters-radio"
    const radioButtons = document.querySelectorAll('.wpc-filters-radio input[type="radio"]');
    // Controleer of er radio buttons zijn gevonden
    if (radioButtons.length > 0) {
        // Controleer of er geen andere radio button is geselecteerd
        const checkedRadio = document.querySelector('.wpc-filters-radio input[type="radio"]:checked');
        if (!checkedRadio) {
        // Als er geen geselecteerde radio button is, selecteer dan de eerste radio button
        radioButtons[0].checked = true;
        }
    }
    });
    </script>
</main>
<?php get_footer(); ?>



