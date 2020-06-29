<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class activiteitenCmsFiller extends Migration
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
                'content_name' => 'activiteiten',
                'title' => 'Activiteiten',
                'content_block_1' => ' <div class="col-md-6 col-xs-6"><h1 class="page-activiteiten__title">Koniginneteelt</h1><p>Het imkeren in Nederland en meer specifiek in de stad vraagt om een type bij dat zachtaardig is: je wilt geen ruzie met de buren omdat ze last hebben van je bijen. We hebben een werkgroep die aan koninginnenteelt doet en ieder jaar naar Ameland gaat. We komen bij elkaar voor de start van de teelt en bespreken de aanpak van het teeltseizoen. We helpen elkaar met kennis, en als er iets fout gaat helpen we om toch moeren te kunnen zenden naar het bevruchtingsstation. Wij gebruiken Buckfast-moeren als startpunt, waar we larven en eitjes van verzamelen om verder te telen. De moeren zijn allen P-moeren, dus bevrucht door zuivere Buckfast darren. Ieder jaar is het weer een uitdaging om mooie moeren te kweken, het enthousiasme is groot en we leren er iedere keer veel van. De kosten die hiermee gemoeid zijn worden omgeslagen over het aantal moeren waarmee men wil deelnemen en bedragen rond de 25 euro per moer. Je zorgt wel voor eigen kastjes om naar Ameland te gaan.</p></div>',
                'content_block_2' => '<h1 class="page-activiteiten__whiteTitle text-center">Wil je ook de wereld van de bijenteelt leren kennen?</h1><h3 class="text-center text-white">Meld u aan door te mailen naar <a href="mailto:leidsebijen@live.nl">leidsebijen@live.nl</a> tav Roland Koster</h3>',
                'content_block_3' => '',
                'content_block_4' => '',
                'content_block_5' => '',
                'content_block_6' => '',
                'content_block_7' => '',
                'content_block_8' => '',
                'content_block_9' => '',
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

    }
}
