<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
<div class="pop-up <?php the_field('actief', 'option');?>">
<div class="cookie-popup fixed top-0 bottom-0 left-0 right-0 bg-[#00000033] z-[9]">
    <div class="flex justify-center items-center pt-[100px]">
        <div class="w-full max-w-[350px] md:max-w-[350px] lg:max-w-[393px] xl:max-w-[393px] bg-white max-h-[calc(100dvh-130px)] overflow-scroll rounded-[10px]">
            <div class="form-header flex justify-end w-full aspect-[16/10] relative bg-[#DBDBDB]">
                <?php
                $image = get_field('popup_afbeelding', 'option');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-w-full min-h-full object-cover object-center z-[98]">
                <button class="cookie-popup-actions absolute right-3 top-3 z-[9999]">
                    <svg width="20.4400722px" height="20.4405565px" viewBox="0 0 20.4400722 20.4405565" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle_7" transform="translate(10.2203, 10.2198) rotate(45) translate(-10.2203, -10.2198)" x="-2.54024215" y="8.52731431" width="25.521" height="3.385" rx="1.6925"></rect>
                                <rect id="Rectangle_7-2" transform="translate(10.2198, 10.2207) rotate(-45) translate(-10.2198, -10.2207)" x="-2.54068569" y="8.52824215" width="25.521" height="3.385" rx="1.6925"></rect>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="w-full max-w-[252px] md:max-w-[252px] lg:max-w-[252px] xl:max-w-[252px] mx-auto py-[30px] overflow-y-auto">
                <div class="grid gap-3">
                    <?php if (get_field('popup_titel', 'option')): ?>   
                    <h2 class="text-25 leading-30 font-satoshi text-[#332E2A] font-semibold"><?php the_field('popup_titel', 'option');?></h2>
                    <?php endif; ?>
                    <?php if (get_field('popup_tekst', 'option')): ?>   
                    <p class="text-18 leading-30 font-nunito text-black font-normal"><?php the_field('popup_tekst', 'option');?></p>
                    <?php endif; ?>
                    <?php
                    $link = get_field('popup_link', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                    <?php if (get_field('popup_link', 'option')): ?>   
                    <a href="<?php echo $link_url; ?>" class="text-12 leading-27 font-satoshi text-[#332E2A] font-semibold uppercase" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  /* common fuctions */
  function el(selector) { return document.querySelector(selector) }
  function els(selector) { return document.querySelectorAll(selector) }
  function on(selector, event, action) { els(selector).forEach(e => e.addEventListener(event, action)) }
  function cookie(name) { 
    let c = document.cookie.split('; ').find(cookie => cookie && cookie.startsWith(name+'='))
    return c ? c.split('=')[1] : false; 
  }
  
  /* popup button hanler */
  on('.cookie-popup button', 'click', () => {
    el('.cookie-popup').classList.add('cookie-popup--accepted');
    document.cookie = `cookie-accepted=true`
  });
  
  /* popup init hanler */
  if (cookie('cookie-accepted') !== "true") {
    el('.cookie-popup').classList.add('cookie-popup--not-accepted');
  }
  
  
  /* page buttons handlers */
  
  function _reset() {
    document.cookie = 'cookie-accepted=false'; 
    document.location.reload();
  }
  
  function _switchMode(cssClass) {
    el('.cookie-popup').classList.toggle(cssClass);
  }
</script>
</div>

    <!-- HEADER 1 -->
    <section class="h-[421px] max-h-[unset] md:max-h-[768px] lg:max-h-[unset] md:h-screen md:min-h-[530px] lg:min-h-[633px] bg-center bg-cover bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>" style="background-image: url('<?php the_field('achtergrond_afbeelding');?>');">
        <div class="container flex h-full items-center pt-[41px] md:pt-[35.5px] lg:pt-[34px]">
            <?php if (get_field('mockup_afbeelding')): ?>    
            <img src="<?php the_field('mockup_afbeelding');?>" alt="<?php the_title();?>" class="max-w-[89px] md:max-w-[196px] lg:max-w-[247px] xl:max-w-[273px] ml-[20px] mr-[30px] md:ml-[55px] md:mr-[65px] lg:ml-[116px] lg:mr-[85px] xl:ml-[132px] xl:mr-[75px]">
            <?php endif; ?>
            <h1 class="text-22 leading-30 max-w-[206px] md:text-40 md:leading-46 md:max-w-[373px] lg:text-55 lg:leading-65 lg:max-w-[569px] xl:text-60 xl:leading-70 xl:max-w-[653px] font-satoshi text-<?php the_field('titel_kleur');?> font-semibold"><?php the_field('titel');?></h1>
        </div>
    </section>
<?php endif; ?>