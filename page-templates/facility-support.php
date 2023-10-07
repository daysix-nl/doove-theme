<?php
/**
 * Template name: Facility Support
 */


 get_header(); 

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
    ]
];


 ?>
 
<main>
    <!-- HEADER 2 -->
    <section class="h-[180px] md:h-[279px] lg:h-[367px] xl:h-[413px] mt-[82px] md:mt-[71px] lg:mt-[68px] bg-bottom bg-cover relative" style="background-image: url('/wp-content/themes/doove-theme/img/local/bg-facility-support-top.jpeg');">
        <div class="h-4 md:h-6 lg:h-8 xl:h-9 absolute bottom-0 left-0 right-0 bg-top bg-cover" style="background-image: url('/wp-content/themes/doove-theme/img/local/bg-facility-support-bottom.jpeg');"></div>
        <div class="container flex h-full items-center relative">
            <h1 class="hidden md:block md:text-30 md:leading-40 lg:text-31 lg:leading-41 xl:text-35 xl:leading-45 font-satoshi text-[#ED701F] font-semibold">Facility Support</h1>
            <div class="absolute left-0 md:left-[unset] right-0 md:right-[-25px] lg:right-0 bottom-0 top-0 h-[180px] md:h-[279px] lg:h-[367px] xl:h-[413px] flex items-center w-[350px] md:w-[unset] mx-auto md:mx-[unset] justify-center">
                <img class="h-[180px] md:h-[279px] lg:h-[367px] xl:h-[413px]" src="/wp-content/themes/doove-theme/img/local/Doove_header_boven.png" alt="">
            </div>
        </div>
    </section>
    <section class="block md:hidden">
        <div class="container pt-3">
            <h1 class="text-25 leading-30 font-satoshi text-[#726A63] font-semibold">Facility Support</h1>
        </div>
    </section>


    <!-- TEXT - IMAGE -->
    <section>
        <div class="container grid grid-cols-1 lg:grid-cols-2 items-center pt-5 pb-[35px] md:pt-4 md:pb-4 lg:pt-[85px] lg:pb-[85px] xl:pt-9 xl:pb-9">
            <div class="col-span-1 grid gap-[25px] md:gap-3 lg:gap-4">
                <h2 class="text-22 leading-33 md:text-21 md:leading-28 lg:text-22 lg:leading-29 xl:text-25 xl:leading-33 font-satoshi text-[#ED701F] font-semibold lg:max-w-[439px] xl:max-w-[527px]">Een unieke combinatie van logistieke en digitale oplossingen</h2>
                <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal lg:max-w-[439px] xl:max-w-[527px]">Zorghulpmiddelenbeheer gebaseerd op jarenlange ervaring, slimme automatisering en gezond verstand. Beheer gaat namelijk verder dan alleen preventief onderhoud en reparaties, maar gaat ook over zaken als patiëntveiligheid, hygiëne en keuringen. <br><br> Over inspelen op pieken en dalen door middel van huur en depotbeheer. Over investeren in hulpmiddelen op het juiste moment. En vooral over 24/7 informatie waar u echt wat aan heeft. Van u wordt namelijk verwacht dat u “in control” bent. En dat is in deze snel veranderende wereld lastig genoeg.</p>                
            </div>
            <div class="col-span-1 block md:hidden lg:block pt-5 md:pt-0">
                <iframe class="aspect-video w-full lg:pl-2" src="https://www.youtube-nocookie.com/embed/10PzKOd8aZs?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" allowfullscreen></iframe>
            </div>
        </div>
        <div class="hidden md:block lg:hidden">
            <iframe class="aspect-video w-full" src="https://www.youtube-nocookie.com/embed/10PzKOd8aZs?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" allowfullscreen></iframe>
        </div>
    </section>







    <section class="bg-[#F4F4F5]">
        <div class="container flex flex-col lg:flex-row lg:items-center py-5 md:py-6 lg:py-7 xl:py-8">
            <div class="lg:w-[504px] xl:w-[563px]">
                <h3 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-[#332E2A] font-semibold md:max-w-[654px] lg:max-w-[347px] xl:max-w-[395px]">“Hulpmiddelen moeten niet worden gezien als kostenpost, maar als belangrijke besparings- of kostenpreventiemogelijkheid”.</h3>
                <a class="hidden md:flex text-18 leading-30 md:text-15 md:leading-25 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 md:mt-[45px] lg:mt-[184px] xl:mt-[212px] text-orange font-nunito font-bold w-fit justify-center items-center hover:opacity-[0.7] duration-300" href="/">Ik wil graag een afspraak maken <span class="arrow-orange h-[8.94px] md:h-[7.14px] lg:h-[7.96px] xl:h-[8.94px]"><?php include get_template_directory() . '/img/icons/arrow-orange.php'; ?></span></a>
            </div>
            <div class="lg:w-[626px] xl:w-[709px] grid md:grid-cols-2 gap-y-[65px] md:gap-x-[100px] md:gap-y-[70px] lg:gap-x-[79px] lg:gap-y-[65px] pt-[65px] md:mt-6 lg:mt-[unset]">
                <div class="col-span-1 w-full">
                    <div class="h-[148px] md:h-[142px] lg:h-[131px] xl:h-[148px] flex items-start">
                        <img src="/wp-content/themes/doove-theme/img/local/image68.jpg" alt="" class="max-h-[148px] md:max-h-[142px] lg:max-h-[131px] xl:max-h-[148px] mix-blend-darken">
                    </div>
                    <p class="text-14 leading-22 md:text-12 md:leading-19 lg:text-12 lg:leading-19 xl:text-14 xl:leading-22 font-nunito text-black font-normal">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam </p>
                </div>
                <div class="col-span-1 w-full">
                    <div class="h-[148px] md:h-[142px] lg:h-[131px] xl:h-[148px] flex items-start">
                        <img src="/wp-content/themes/doove-theme/img/local/image70.jpg" alt="" class="max-h-[148px] md:max-h-[142px] lg:max-h-[131px] xl:max-h-[148px] mix-blend-darken">
                    </div>
                    <p class="text-14 leading-22 md:text-12 md:leading-19 lg:text-12 lg:leading-19 xl:text-14 xl:leading-22 font-nunito text-black font-normal">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam </p>
                </div>
                <div class="col-span-1 w-full">
                    <div class="h-[148px] md:h-[142px] lg:h-[131px] xl:h-[148px] flex items-start">
                        <img src="/wp-content/themes/doove-theme/img/local/image69.jpg" alt="" class="max-h-[148px] md:max-h-[142px] lg:max-h-[131px] xl:max-h-[148px] mix-blend-darken">
                    </div>
                    <p class="text-14 leading-22 md:text-12 md:leading-19 lg:text-12 lg:leading-19 xl:text-14 xl:leading-22 font-nunito text-black font-normal">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam </p>
                </div>
                <div class="col-span-1 w-full">
                    <div class="h-[148px] md:h-[142px] lg:h-[131px] xl:h-[148px] flex items-start">
                        <img src="/wp-content/themes/doove-theme/img/local/image71.png" alt="" class="max-h-[148px] md:max-h-[142px] lg:max-h-[131px] xl:max-h-[148px] mix-blend-darken">
                    </div>
                    <p class="text-14 leading-22 md:text-12 md:leading-19 lg:text-12 lg:leading-19 xl:text-14 xl:leading-22 font-nunito text-black font-normal">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam </p>
                </div>
            </div>
            <a class="flex md:hidden text-18 leading-30 mt-[45px] text-orange font-nunito font-bold w-fit justify-center items-center hover:opacity-[0.7] duration-300" href="/">Ik wil graag een afspraak maken <span class="arrow-orange h-[8.94px] md:h-[7.14px] lg:h-[7.96px] xl:h-[8.94px]"><?php include get_template_directory() . '/img/icons/arrow-orange.php'; ?></span></a>
        </div>
    </section>



    <!-- QUIZ -->
    <section class="hulpmiddelentest">
        <div class="container flex flex-col lg:flex-row lg:items-start py-5 md:py-6 lg:py-7 xl:py-8">
            <div class="lg:w-[504px] xl:w-[563px] grid gap-[25px] md:gap-3 lg:gap-4 pt-[15px]">
                <h3 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-[#ED701F] font-semibold md:max-w-[654px] lg:max-w-[347px] xl:max-w-[395px]">Doe  de hulpmiddelentest</h3>
                <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal md:max-w-[579px] lg:max-w-[282px] xl:max-w-[339px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr. Sed diam nonumy eirmod tempor invidunt ut labore.</p>
            </div>
            <div id="form-list" class="lg:w-[626px] xl:w-[709px] mt-4 md:mt-[35px] lg:mt-[unset]">
                <?php foreach ($steps as $step) { ?>
                    <?php foreach ($steps as $step) { ?>
                        <div>
                            <span><?= $step['id']; ?>/<?= count($steps); ?></span>
                            <span></span>
                        </div>
                    <?php } ?>
                    <p id="advice-text"><?= $step['text']; ?></p>
                    <div>
                        <button>Ja</button>
                        <button>Eh..</button>
                        <button>Nee</button>
                    </div>
                    <div>
                        <?php if ($step['id'] > 1) { ?>
                            <button>Vorige</button>
                        <?php } ?>
                        <?php if ($step['id'] < count($steps)) { ?>
                            <button>Volgende</button>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- 3 STAPPEN -->
    <section class="bg-[#F4F4F5]">
        <div class="container py-[95px] md:py-9 lg:py-9 xl:py-10">
            <h3 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-[#ED701F] font-semibold w-[336px] md:w-[578px] lg:w-[606px] xl:w-[688px] mx-auto text-center">Doove Care Groep Reverse Thinking in 3 simpele stappen</h3>
            <div class="flex flex-col md:flex-row max-w-[240px] md:max-w-[615px] lg:max-w-[834px] xl:max-w-[964px] mx-auto mt-6 xl:mt-7">
                <div class="number-item grid w-[240px] md:w-[167px] lg:w-[202px] xl:w-[226px] justify-center">
                    <div class="bg-white h-[99px] w-[99px] md:h-[88px] md:w-[88px] lg:h-[88px] lg:w-[88px] xl:h-[99px] xl:w-[99px] rounded-full flex mx-auto items-center justify-center"><span class="font-nunito font-bold text-orange text-44 leading-44">1</span></div>
                    <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal text-center mt-3">Vertel ons welk probleem u heeft</p>
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
                    <div class="bg-white h-[99px] w-[99px] md:h-[88px] md:w-[88px] lg:h-[88px] lg:w-[88px] xl:h-[99px] xl:w-[99px] rounded-full flex mx-auto items-center justify-center"><span class="font-nunito font-bold text-orange text-44 leading-44">2</span></div>
                    <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal text-center mt-3">Wij organiseren een werkwijze op maat</p>
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
                    <div class="bg-white h-[99px] w-[99px] md:h-[88px] md:w-[88px] lg:h-[88px] lg:w-[88px] xl:h-[99px] xl:w-[99px] rounded-full flex mx-auto items-center justify-center"><span class="font-nunito font-bold text-orange text-44 leading-44">3</span></div>
                    <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal text-center mt-3">En helpen u deze werkwijze te implementeren</p>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ -->
    <section>
        <div class="container pt-6 pb-6 md:pt-[45px] md:pb-[85px] lg:pt-[100px] xl:pt-[100px] lg:pb-[150px] xl:pb-[155px]">
            <h3 class="text-25 leading-35 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-[#ED701F] font-semibold">Doove Facility Support bestaat onder andere uit</h3>
            <div class="grid lg:grid-cols-2 gap-[15px] mt-[45px] md:mt-7 lg:mt-5 xl:mt-6">
     
                <!-- ACCORDION ITEM -->
                <div class="accordion-div col-span-1 bg-[#F4F4F5] h-fit">
                     <!-- ACCORDION HEADER -->
                    <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4">
                        <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left">Desinfecteren</h4>
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
                    <div class="panel bg-[#F4F4F5]  w-full">
                        <div class="h-12"></div>
                    </div>
                </div>

                 <!-- ACCORDION ITEM -->
                <div class="accordion-div col-span-1 bg-[#F4F4F5] h-fit">
                     <!-- ACCORDION HEADER -->
                    <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4">
                        <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left">Desinfecteren</h4>
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
                    <div class="panel bg-[#F4F4F5]  w-full">
                        <div class="h-12"></div>
                    </div>
                </div>

                 <!-- ACCORDION ITEM -->
                <div class="accordion-div col-span-1 bg-[#F4F4F5] h-fit">
                     <!-- ACCORDION HEADER -->
                    <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4">
                        <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left">Desinfecteren</h4>
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
                    <div class="panel bg-[#F4F4F5]  w-full">
                        <div class="h-12"></div>
                    </div>
                </div>

                 <!-- ACCORDION ITEM -->
                <div class="accordion-div col-span-1 bg-[#F4F4F5] h-fit">
                     <!-- ACCORDION HEADER -->
                    <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4">
                        <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left">Desinfecteren</h4>
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
                    <div class="panel bg-[#F4F4F5]  w-full">
                        <div class="h-12"></div>
                    </div>
                </div>

                 <!-- ACCORDION ITEM -->
                <div class="accordion-div col-span-1 bg-[#F4F4F5] h-fit">
                     <!-- ACCORDION HEADER -->
                    <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4">
                        <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left">Desinfecteren</h4>
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
                    <div class="panel bg-[#F4F4F5]  w-full">
                        <div class="h-12"></div>
                    </div>
                </div>

                 <!-- ACCORDION ITEM -->
                <div class="accordion-div col-span-1 bg-[#F4F4F5] h-fit">
                     <!-- ACCORDION HEADER -->
                    <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4">
                        <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left">Desinfecteren</h4>
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
                    <div class="panel bg-[#F4F4F5]  w-full">
                        <div class="h-12"></div>
                    </div>
                </div>

                 <!-- ACCORDION ITEM -->
                <div class="accordion-div col-span-1 bg-[#F4F4F5] h-fit">
                     <!-- ACCORDION HEADER -->
                    <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4">
                        <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left">Desinfecteren</h4>
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
                    <div class="panel bg-[#F4F4F5]  w-full">
                        <div class="h-12"></div>
                    </div>
                </div>

                 <!-- ACCORDION ITEM -->
                <div class="accordion-div col-span-1 bg-[#F4F4F5] h-fit">
                     <!-- ACCORDION HEADER -->
                    <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[72px] xl:min-h-[82px] flex items-center px-[15px] lg:px-3 xl:px-4">
                        <h4 class="font-satoshi font-semibold text-black text-18 leading-25 md:text-18 md:leading-25 lg:text-19 lg:leading-26 xl:text-22 xl:leading-30 w-[296px] md:w-[634px] lg:w-[482px] xl:w-[533px] text-left">Desinfecteren</h4>
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
                    <div class="panel bg-[#F4F4F5]  w-full">
                        <div class="h-12"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>


<style>
    html {
    scroll-behavior: auto;
}

html {
  scroll-padding-top: 200px;
}
</style>

<?php wp_footer(''); ?>



