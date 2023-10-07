<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: 
 $steps = [
    [
        "id" => 1,
        "text" => "Wij weten precies hoeveel zorghulpmiddelen er in onze instelling aanwezig zijn en waar ze zich bevinden.",


    ],
    [
        "id" => 2,
        "text" => "Alle zorghulpmiddelen werken naar behoren en zijn direct inzetbaar voor veilige patiëntenzorg."
    ],
    [
        "id" => 3,
        "text" => "Alle zorghulpmiddelen zijn gekeurd volgens de laatste normen en wetgeving."
    ],
    [
        "id" => 4,
        "text" => "Er is bij iedereen bekend wie gebeld/gemaild moet worden in geval van reparatie."
    ],
    [
        "id" => 5,
        "text" => "Wij weten precies wanneer we zorghulpmiddelen moeten vervangen en reserveren op tijd budget hiervoor."
    ],
    [
        "id" => 6,
        "text" => "Alle informatie rondom mijn zorghulpmiddelen en het beheer hiervan is digitaal en mobiel toegankelijk via een portal en App."
    ],     
    [
        "id" => 7,
        "text" => ""
    ]
];


?>
    <!-- CONTENT BLOK 4 -->
    <div id="gf_1"></div>
    <section id="hulpmiddelentest" class="hulpmiddelentest bg-<?php the_field('achtergrond_kleur');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container flex flex-col lg:flex-row lg:items-start">
            <div class="lg:w-[504px] xl:w-[563px] grid gap-[25px] md:gap-3 lg:gap-4 pt-[15px]">
                <h3 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-<?php the_field('titel_kleur');?> font-semibold md:max-w-[654px] lg:max-w-[347px] xl:max-w-[395px]"><?php the_field('titel');?></h3>
                <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal md:max-w-[579px] lg:max-w-[282px] xl:max-w-[339px]"><?php the_field('tekst');?></p>
            </div>
            <div id="slider" class="lg:w-[626px] xl:w-[709px] mt-4 md:mt-[35px] lg:mt-[unset]">
                <?php foreach ($steps as $outerStep) { ?>
                    <div class=" step" data-step-id="<?= $outerStep['id']; ?>">
                        <div class="flex space-x-1 md:space-x-[15px] max-w-[480px]">
                            <?php foreach ($steps as $innerStep) { ?>
                                <?php if ($innerStep['id'] !== 7 && $outerStep['id'] !== 7) { ?>
                                    <div class="flex flex-col w-full xl:max-w-[66px] lg:max-w-[59px] md:max-w-[57px] max-w-[48px]">
                                        <span class="text-14 leading-30 md:text-11 md:leading-24 lg:text-12 lg:leading-26 font-normal font-nunito"><?= $innerStep['id']; ?>/6</span>
                                        <span class="h-[14px] <?= $innerStep['id'] === $outerStep['id'] ? "bg-oranje" : "bg-[#f4f4f5]"; ?> flex-grow w-full  max-w-[56px]"></span>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <?php if ($outerStep['id'] === 7) { ?>
                            <p id="advice-text" class="mb-3 text-16  leading-30 md:text-14 md:leading-24 lg:text-17 lg:leading-26 xl:text-20 xl:leading-30 font-nunito text-black font-normal  max-w-[408px] lg:max-w-[495px] xl:max-w-[640px]"></p>
                        <?php } ?>
                        <?php if ($outerStep['id'] !== 7) { ?>
                            <p  class="my-3 text-16  leading-30 md:text-14 md:leading-24 lg:text-17 lg:leading-26 xl:text-20 xl:leading-30 font-nunito text-black font-normal max-w-[408px] lg:max-w-[495px] xl:max-w-[640px]"><?= $outerStep['text']; ?></p>
                            <div class="my-3 space-x-[25px] flex flex-row justify-between md:justify-start">
                                <label class="btn-label">
                                    <input type="radio" name="choice" value="Ja" class="hidden" />
                                    <span class="btn uppercase text-orange font-nunito bg-[#FABF74]/[0.33] w-10 h-5 md:w-7 md:h-4 lg:w-8 lg:h-5 text-25 leading-35 md:text-20 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 flex justify-center items-center font-bold hover:bg-[#ED701F] hover:text-white hover:transition-all">Ja</span>
                                </label>
                                <label class="btn-label">
                                    <input type="radio" name="choice" value="Eh" class="hidden" />
                                    <span class="btn uppercase text-orange font-nunito bg-[#FABF74]/[0.33] w-10 h-5 md:w-7 md:h-4 lg:w-8 lg:h-5 text-25 leading-35 md:text-20 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 flex justify-center items-center font-bold hover:bg-[#ED701F] hover:text-white hover:transition-all">Eh...</span>
                                </label>
                                <label class="btn-label">
                                    <input type="radio" name="choice" value="Nee" class="hidden" />
                                    <span class="btn uppercase text-orange font-nunito bg-[#FABF74]/[0.33] w-10 h-5 md:w-7 md:h-4 lg:w-8 lg:h-5 text-25 leading-35 md:text-20 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 flex justify-center items-center font-bold hover:bg-[#ED701F] hover:text-white hover:transition-all">Nee</span>
                                </label>
                            </div>
                            <div class="space-x-2 flex">
                                <?php if ($outerStep['id'] > 1) { ?>
                                    <button class="navigate font-nunito px-3 h-5 flex justify-center items-center text-oranje bg-white border-[1px] border-oranje text-18 leading-28 hover:transition-all hover:bg-oranje hover:text-white opacity-60" data-direction="-1">Vorige</button>
                                <?php } ?>
                                <?php if ($outerStep['id'] < count($steps)) { ?>
                                    <button class="navigate font-nunito px-3 h-5 flex justify-center items-center text-oranje bg-white border-[1px] border-oranje text-18 leading-28 hover:transition-all hover:bg-oranje hover:text-white" data-direction="1">Volgende</button>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php if ($outerStep['id'] === 7) { ?>
                            <button id="proefaanvragen" onclick="location.href='#'" type="button" class="md:w-fit lg:px-2 px-[12px] xl:h-4 lg:h-[35px] bg-[#FF7922] font-nunito xl:text-18 xl:leading-22 lg:text-15 lg:leading-18 md:h-[42px] md:text-15 md:leading-22 font-bold text-white h-5 text-18 leading-22 w-full">Ik wil graag een afspraak maken</button>
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
<?php endif; ?>