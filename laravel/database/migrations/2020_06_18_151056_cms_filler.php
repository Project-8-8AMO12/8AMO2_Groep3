<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CmsFiller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('cms_content')->insert(
            [
                [
                    'content_name' => 'home',
                    'title' => '',
                    'content_block_1' => '<h3 class="page-home-title">Officieel NBV vereniging</h3><p>Er is in ons land een aantal imkersverenigingen, waarvan de Nederlandse Bijenhouders Vereniging (NBV) met bijna 6000 leden, de grootste is. De Imkersvereniging Leiden en omstreken is aangesloten bij de NBV. </br>Regelmatig organiseert onze vereniging imkersavonden. Op deze bijeenkomsten worden lezingen gehouden en films vertoond. Ook zijn deze avonden het moment waarop imkers elkaar ontmoeten en ervaringen uitwisselen. Soms worden ook excursies georganiseerd. De imkersavonden vinden in principe altijd plaats op de laatste vrijdag van de maand. Ze worden gehouden in de kantine van de Tuinvereniging Cronesteijn aan het Boerenpad 1 te Leiden.</p>',
                    'content_block_2' => '<h3 class="page-home-title">Onze vele bij-zaken</h3><p>Als vereniging zijn we bezig bijtjes en organiseren veel leuke activiteiten, promoten wij onze hobby en delen we graag al onze kennis met mede-imker enthousiastelingen.</p>',
                    'content_block_3' => '<ul><li><b>Bij-eenkomsten</b><p>Het regelmatig organiseren van bijeenkomsten met lezingen, films, diavertoningen, praatavonden, en van excursies.</p></li><li><b>Imkersartikelen</b><p>Imkers binnen en buiten de Leidse regio kunnen voor de meest voorkomende imkersartikelen terecht bij de winkel van de vereniging, gelegen op het terrein van de tuinvereniging ‘Cronesteyn’.</p></li><li><b>Beginnend imker begeleiding</b><p>Beginnend imkers worden door ervaren leden met raad en daad terzijde gestaan bij het verzorgen van het eerste bijenvolk.</p></li><li><b>Standplaats</b><p>Aan leden wordt zoveel mogelijk hulp geboden bij het verkrijgen van een standplaats voor hun bijenvolk(en) en bij de aankoop van imkersartikelen.</p></li><li><b>Nieuwsbrief</b><p>Periodiek verschijnt de nieuwsbrief ‘De Stertselaar’, samengesteld door leden en bestemd voor imkers in Leiden en omgeving.</p></li></ul>',
                    'content_block_4' => '<ul><li><b>Bijenmarkt</b><p>Het jaarlijks organiseren van de bijenmarkt aan de terrein van de Museum Volkenkunde te Leiden. Zie voor informatie de <a href="http://www.deleidsebijenmarkt.nl" target="_blank">leidsebijenmarkt</a></p></li><li><b>Bijen Bibliotheek</b><p>Een eigen bibliotheek, waaruit leden boeken en tijdschriften uit binnen- en buitenland kunnen lenen. Regelmatig worden nieuwe titels aangeschaft.</p></li><li><b>Cursussen bijenteelt</b><p>Elk jaar worden cursussen bijenteelt gegeven voor beginners en bij voldoende belangstelling ook voor gevorderden. Voor de praktijklessen bijenteelt wordt gebruik gemaakt van onze bijenstal in het polderpark ‘Cronesteyn’.</p></li><li><b>Voorlichting</b><p>Aan voorlichting en publiciteit wordt veel tijd en zorg besteed. U kunt de imkers van de vereniging dan ook regelmatig op belangrijke evenementen in de Leidse regio aantreffen, zoals op jaarmarkten, tentoonstellingen, e.d.</p></li><li><b>Standplaats</b><p>Aan leden wordt zoveel mogelijk hulp geboden bij het verkrijgen van een standplaats voor hun bijenvolk(en) en bij de aankoop van imkersartikelen.</p></li></ul>',
                    'content_block_5' => '',
                    'content_block_6' => '',
                    'created_at' => DB::raw('now()'),
                    'updated_at' => DB::raw('now()')
                ],
                [
                    'content_name' => 'sidebar',
                    'title' => '',
                    'content_block_1' => '<ul class="pl-2"><li><b>Linkjes</b></li><li><a href="http://www.deleidsebijenmarkt.nl" target="_blank">Leidsebijenmarkt</a></li><li><a href="https://gemeente.leiden.nl/" target="_blank">Gemeente Leiden</a></li></ul>',
                    'content_block_2' => '',
                    'content_block_3' => '',
                    'content_block_4' => '',
                    'content_block_5' => '',
                    'content_block_6' => '',
                    'created_at' => DB::raw('now()'),
                    'updated_at' => DB::raw('now()')
                ],
                [
                    'content_name' => 'subscribeToNewsletter',
                    'title' => 'Ben jij ook een echte bij-liefhebber?',
                    'content_block_1' => '<p>Ontvang het bijenblad, doe mee aan leuke activiteiten en leer ontzettend veel!</p>',
                    'content_block_2' => '',
                    'content_block_3' => '',
                    'content_block_4' => '',
                    'content_block_5' => '',
                    'content_block_6' => '',
                    'created_at' => DB::raw('now()'),
                    'updated_at' => DB::raw('now()')
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
