  
<?php get_header(); ?>
    <main class="bg-white">
        <div class="container pt-4 pb-7 flex flex-col justify-center">
            <img class="w-full max-w-[690px] mx-auto" src="/wp-content/themes/doove-theme/img/local/404.png" alt="">
            <h1 class="text-21 leading-25 lg:text-35 lg:leading-80 font-bold font-satoshi max-w-[228px] md:max-w-[412px] lg:max-w-[687px] text-orange text-center mx-auto">Sorry wij kunnen deze pagina niet vinden</h1>
            <button class="text-16 leading-25 lg:text-18 lg:leading-26 text-black font-nunito mb-[35px] md:mb-5 lg:mb-4 xl:mb-5 mt-2" onclick="location.reload()">Probeer opnieuw</button>
            <form role="search" method="get" id="searchform" 
            class="searchform w-full max-w-[689px] mx-auto" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="w-full flex bg-[#F4F4F5]">
              <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
              <input type="submit" id="searchsubmit"
                value="">
              <button id="search-form" class="uppercase bg-[#F4F4F5] pl-2 rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 w-[40px] h-[53px] flex items-center justify-center"><span class="h-[14.5px]"><?php include get_template_directory() . '/img/icons/glass.php'; ?></span></button>
              <input class="w-[calc(100%-50px)] pl-[10px] bg-transparent text-[#726A63] font-nunito lg:text-14 xl:text-16" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Zoeken naar..." />
            </div>
          </form>
        </div>
    </main>
<?php get_footer(); ?>