<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- FAQ -->
     <section class="bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container">
            <h3 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold"><?php the_field('titel');?></h3>
            <div class="grid lg:grid-cols-2 gap-[15px] mt-[45px] md:mt-7 lg:mt-5 xl:mt-6 items-start">
                <div class="col-span-1 grid gap-[15px]">
                <?php
                    if( have_rows('faq_kolom_1_repeater') ):
                        while( have_rows('faq_kolom_1_repeater') ) : the_row(); ?>

        
                        <!-- ACCORDION HEADER -->
                        <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4 bg-[#F4F4F5]">
                            <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left"><?php the_sub_field('titel');?></h4>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.529" height="11.61" viewBox="0 0 11.529 11.61">
                                    <g id="Group_221" data-name="Group 221" transform="translate(1 1)">
                                        <line id="Line_15" data-name="Line 15" y2="9.61" transform="translate(4.765)" fill="none" stroke="#ed701f" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_16" data-name="Line 16" y2="9.529" transform="translate(9.529 4.805) rotate(90)" fill="none" stroke="#ed701f" stroke-linecap="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </div>
                        </button>
                        <!-- ACCORDION BODY -->
                        <div class="panel bg-[#F4F4F5] w-full">
                            <div class="px-[15px] lg:px-3 xl:px-4 pb-[15px] lg:pb-3 xl:pb-4">
                               <div class="text-[#332E2A] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-18 leading-30 text-editor"><?php the_sub_field('tekst');?></div>
                            </div>
                        </div>
            

                     <?php
                        endwhile;
                    else :
                    endif;
                ?>

               

                
                </div>
                <div class="col-span-1 grid gap-[15px]">
                
                    <?php
                    if( have_rows('faq_kolom_2_repeater') ):
                        while( have_rows('faq_kolom_2_repeater') ) : the_row(); ?>

                    <!-- ACCORDION ITEM -->
                    <div class="accordion-div col-span-1 bg-[#F4F4F5] h-fit">
                        <!-- ACCORDION HEADER -->
                        <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4">
                            <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left"><?php the_sub_field('titel');?></h4>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.529" height="11.61" viewBox="0 0 11.529 11.61">
                                    <g id="Group_221" data-name="Group 221" transform="translate(1 1)">
                                        <line id="Line_15" data-name="Line 15" y2="9.61" transform="translate(4.765)" fill="none" stroke="#ed701f" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_16" data-name="Line 16" y2="9.529" transform="translate(9.529 4.805) rotate(90)" fill="none" stroke="#ed701f" stroke-linecap="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </div>
                        </button>
                        <!-- ACCORDION BODY -->
                        <div class="panel bg-[#F4F4F5] w-full">
                            <div class="px-[15px] lg:px-3 xl:px-4 pb-[15px] lg:pb-3 xl:pb-4">
                               <div class="text-[#332E2A] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-18 leading-30 text-editor"><?php the_sub_field('tekst');?></div>
                            </div>
                        </div>
                    </div>

                     <?php
                        endwhile;
                    else :
                    endif;
                ?>
                </div>

               

            </div>
        </div>
    </section>

    <script>
try {
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.height === panel.scrollHeight + "px") {
        panel.style.height = "0";
      } else {
        panel.style.height = panel.scrollHeight + "px";
        for (let j = 0; j < acc.length; j++) {
          if (this.classList != acc[j].classList) {
            acc[j].classList.remove("active");
            acc[j].nextElementSibling.style.height = "0";
          }
        }
      }
    });
  }
} catch (error) { }
    </script>
<?php endif; ?>