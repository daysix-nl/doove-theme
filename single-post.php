<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header(); ?>
<main>
    <section class="xl:mt-11 xl:mb-3 lg:mb-[25px] md:mb-5 mb-4 mt-10">
        <div class="container h-full flex flex-col justify-center">
            <p class="text-12 leading-20 md:text-12 md:leading-14 lg:text-12 lg:leading-18 xl:text-12 xl:leading-22 text-[#726A63]/[0.35] font-nunito font-semibold space-x-[15px] hidden md:flex">
                <a href="/">Home</a>
                <span  class="block">></span>
                <a href="">Nieuws</a>
                <span  class="block">></span>
                <span class="block"><?php the_title() ?></span>
            </p>
        </div>
    </section>
    <section class="xl:pb-[47px] lg:pb-[37px] md:pb-[37px] pb-[25px]">
        <div class="container">
            <div class="object-cover xl:w-[590px] xl:h-[340px] lg:w-[524px] lg:h-[302px] md:w-[524px] md:h-[302px] w-full h-auto aspect-video bg-[#F4F4F4]"></div>
        </div>
    </section>
    <section class="xl:pb-[93px] lg:pb-[81px] md:pb-[54px] pb-5" >
        <div class="container">
            <div class="w-full xl:max-w-[893px] lg:max-w-[747]">
                <h1 class="text-[#ED701F] font-satoshi font-bold xl:text-25 xl:leading-33  lg:text-22 lg:leading-29 md:text-21 md:leading-28 text-25 leading-33 xl:pb-2 lg:pb-2 md:pb-2 pb-3">Webinar Speciale bedden voor zorginstellingen</h1>
                <p class="text-[#332E2A]/[0.5] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-15 leading-30 xl:pb-3 lg:pb-[27px] md:pb-[22px] pb-2.5"><?php echo get_the_date('F Y'); ?></p>
                <div class="xl:space-y-4 lg:space-y-[35px] md:space-y-[35px] space-y-[45px]">
                    <p class="text-[#332E2A] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-18 leading-30 ">
                        Voor een cliënt in een zorginstelling is een passend verpleegbed belangrijk, zeker als hij/zij er een groot 
                        gedeelte van de dag in ligt. In een goed verpleegbed voelt de cliënt zich comfortabel en veilig. 
                        Daarnaast draagt een goed bed bij aan het vergroten van de zelfstandigheid, mobiliteit en zelfredzaamheid van 
                        de cliënt en aan het beperken van de fysieke belasting van de zorgverlener.
                    </p>
                    <p class="text-[#332E2A] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-18 leading-30 ">
                        Specifieke of veranderende zorgbehoeften van een cliënt kunnen er toe leiden dat een standaard zorgbed niet 
                        (meer) voldoet en er een speciaal bed ingezet moet worden. Denk aan bedden voor cliënten met obesitas, 
                        vloerbedden voor cliënten met een valrisico of een tentbed voor cliënten die behoefte hebben aan een kleinere 
                        ruimte met minder prikkels van buitenaf.
                    </p>
                    <p class="text-[#332E2A] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-18 leading-30 ">
                        Op <span class="font-bold">donderdag 30 maart om 11:00 uur</span> presenteren wij een live webinar waarin we dieper ingaan op de 
                        diverse soorten speciale bedden die op de markt verkrijgbaar zijn. Daarnaast bespreken wij de verschillende 
                        financieringsmogelijkheden voor (kortdurende) inzet van een speciaal bed, geven wij advies hoe deze bedden 
                        optimaal ingezet kunnen worden binnen de zorginstelling en leggen wij uit wat depotbeheer hierin kan 
                        betekenen.
                    </p>
                    <div>
                        <h3 class="text-[#332E2A] font-nunito font-bold xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-18 leading-30 ">Mogen wij u ook online verwelkomen?</h3>
                        <p class="text-[#332E2A] font-nunito font-normal xl:text-18 xl:leading-30 lg:text-15 lg:leading-25 md:text-14 md:leading-24 text-18 leading-30 ">
                            Het webinar duurt circa 45 minuten en deelname is gratis. Via de chatfunctie heeft u tijdens het live webinar de 
                            mogelijkheid om vragen te stellen en uw kennis te delen. Het webinar wordt opgenomen en na afloop aan de 
                            inschrijvers toegestuurd. Op verzoek sturen wij na afloop een bewijs van deelname toe.
                        </p>
                    </div>
                </div>
                <button class="md:w-[348px] lg:w-[348px] lg:px-2 px-[12px] xl:h-[39px] lg:h-[35px] bg-[#FF7922] hover:bg-[#FF7922]/[0.75] transition-all font-nunito xl:text-18 xl:leading-22 lg:text-15 lg:leading-18 md:h-[42px] md:text-15 md:leading-22 font-bold text-white h-5 text-18 leading-22 w-full xl-[391px] xl:mt-[48px] lg:mt-[43px] md:mt-[69px] mt-[47px]">Ik wil me graag inschrijven</button>
            </div>
        </div>
    </section>
    <section class="bg-[#F8F8F8] xl:h-[301px] lg:h-[287px] md:h-[287px] h-[337px] flex">
            <div class="mx-auto my-auto xl:space-y-[44px] lg:space-y-[45px] md:space-y-[51px] space-y-[32px]">
                <h4 class="w-full md:w-[258px] lg:w-[272px] xl:w-[308px]  xl:text-[25px] xl:leading-33 lg:text-22 lg:leading-29 md:text-21 md:leading-28 text-22 leading-30 text-center text-[#332E2A] font-bold font-satoshi ">Wil je updates van Doove Academie ontvangen?</h4>
            </div>
    </section>
 </main>
<?php get_footer(); ?>
