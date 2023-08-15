<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- CONTENT BLOK 4 -->
    <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
       <div class="container">
            <h3 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold w-[336px] md:w-[578px] lg:w-[606px] xl:w-[688px] mx-auto text-center"><?php the_field('titel');?></h3>
            <div class="flex flex-col md:flex-row max-w-[240px] md:max-w-[615px] lg:max-w-[834px] xl:max-w-[964px] mx-auto mt-6 xl:mt-7">
                <div class="number-item grid w-[240px] md:w-[167px] lg:w-[202px] xl:w-[226px] justify-center">
                    <div class="bg-white h-[99px] w-[99px] md:h-[88px] md:w-[88px] lg:h-[88px] lg:w-[88px] xl:h-[99px] xl:w-[99px] rounded-full flex mx-auto items-center justify-center"><span class="font-nunito font-bold text-<?php the_field('titel_kleur');?> text-44 leading-44">1</span></div>
                    <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal text-center mt-3"><?php the_field('stap_1');?></p>
                </div>
                <div class="arrow-item pt-[30.25px] xl:pt-[35.75px] mx-auto hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50.859" height="31.335" viewBox="0 0 50.859 31.335">
                        <g id="Group_339" data-name="Group 339" transform="translate(0 1.832)" opacity="0.5">
                            <g id="Group_179" data-name="Group 179" transform="matrix(0.719, 0.695, -0.695, 0.719, 35.2, 0)">
                            <path id="Path_1" data-name="Path 1" d="M0,0,19.267.721v19.23" transform="translate(0 0)" fill="none" stroke="#726a63" stroke-linecap="round" stroke-width="2.5"/>
                            </g>
                            <line id="Line_35" data-name="Line 35" x2="48.927" transform="translate(0 13.925)" fill="none" stroke="#726a63" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <div class="number-item grid w-[240px] md:w-[167px] lg:w-[202px] xl:w-[226px] justify-center mt-6 md:mt-[unset]">
                    <div class="bg-white h-[99px] w-[99px] md:h-[88px] md:w-[88px] lg:h-[88px] lg:w-[88px] xl:h-[99px] xl:w-[99px] rounded-full flex mx-auto items-center justify-center"><span class="font-nunito font-bold text-<?php the_field('titel_kleur');?> text-44 leading-44">2</span></div>
                    <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal text-center mt-3"><?php the_field('stap_2');?></p>
                </div>
                <div class="arrow-item pt-[30.25px] mx-auto hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50.859" height="31.335" viewBox="0 0 50.859 31.335">
                        <g id="Group_339" data-name="Group 339" transform="translate(0 1.832)" opacity="0.5">
                            <g id="Group_179" data-name="Group 179" transform="matrix(0.719, 0.695, -0.695, 0.719, 35.2, 0)">
                            <path id="Path_1" data-name="Path 1" d="M0,0,19.267.721v19.23" transform="translate(0 0)" fill="none" stroke="#726a63" stroke-linecap="round" stroke-width="2.5"/>
                            </g>
                            <line id="Line_35" data-name="Line 35" x2="48.927" transform="translate(0 13.925)" fill="none" stroke="#726a63" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <div class="number-item grid w-[240px] md:w-[167px] lg:w-[202px] xl:w-[226px] justify-center mt-6 md:mt-[unset]">
                    <div class="bg-white h-[99px] w-[99px] md:h-[88px] md:w-[88px] lg:h-[88px] lg:w-[88px] xl:h-[99px] xl:w-[99px] rounded-full flex mx-auto items-center justify-center"><span class="font-nunito font-bold text-<?php the_field('titel_kleur');?> text-44 leading-44">3</span></div>
                    <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal text-center mt-3"><?php the_field('stap_3');?></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>