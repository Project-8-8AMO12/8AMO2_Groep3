<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgendaPaginaCmsContent extends Migration
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
                'content_name' => 'agenda',
                'title' => 'Agenda',
                'content_block_1' => '<h3 class="page-agenda-title">Imkeravonden</h3><p>Regelmatig organiseert de vereniging imkeravonden. Op deze bijeenkomsten worden lezingen gehouden en films vertoond. Ook zijn deze avonden het moment waarop imkers elkaar ontmoeten en ervaringen uitwisselen. Soms worden ook excursies georganiseerd. De imkeravonden vinden in principe altijd plaats op de laatste vrijdag van de maand. Ze worden gehouden in de kantine van de Tuinvereniging Cronesteijn aan het Boerenpad 1 te Leiden. Op de imkeravonden en de Algemene Leden Vergadering is het depot vanaf 19h30 open.</p>',
                'content_block_2' => '<ul><li><b>10 januari - Imkersavond / Nieuwjaarsborrel</b><p>Vrijdag 10 januari 2020, 20.00 uur, kantine Tuinvereniging Cronesteijn</p></li><li><b>28 februari - Imkersavond</b><p>vrijdag 28 februari 2020, 20.00 uur, kantine Tuinvereniging Cronesteijn<br/>Onderwerp: Willy Bos-Slappendel houdt een lezing over biodiversiteit</p></li><li><b>27 maart - Imkersavond</b><p>vrijdag 27 maart 2020, 20.00 uur, kantine Tuinvereniging Cronesteijn<br/>Onderwerp: nog niet bekend gemaakt</p></li><li><b>17 april - Algemene Ledenvergadering</b><p>Vrijdag 17 april 2020, 20.00 uur, kantine Tuinvereniging Cronesteijn<br/>ALV, plus een loting met mooie prijzen</p></li></ul>',
                'content_block_3' => '<ul><li><b>29 mei - Imkersavond</b><p>vrijdag 29 mei 2020, 20.00 uur, kantine Tuinvereniging Cronesteijn<br/>Onderwerp: nog niet bekend gemaakt</p></li><li><b>13 juni - Bijenmarkt</b><p>zaterdag 13 juni 2020, Museum Volkenkunde<br/>Meer informatie zie <a href="https://www.deleidsebijenmarkt.nl" target="_blank">www.deleidsebijenmarkt.nl/</a></p></li><li><b>26 september - Imkersavond</b><p>vrijdag 26 september 2020, 20.00 uur, kantine Tuinvereniging Cronesteijn<br/>Onderwerp: nog niet bekend gemaakt</p></li><li><b>30 oktober - Imkersavond</b><p>vrijdag 30 oktober 2020, 20.00 uur, kantine Tuinvereniging Cronesteijn<br/>Honing keuring</p></li></ul>',
                'content_block_4' => '<h3 class="page-agenda-title">Tuinvereniging Cronesteyn</h3><p><b>Adres:</b><br/>Boerenpad 1<br/>2322 LA Leiden</p>',
                'content_block_5' => '',
                'content_block_6' => '',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()')
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
