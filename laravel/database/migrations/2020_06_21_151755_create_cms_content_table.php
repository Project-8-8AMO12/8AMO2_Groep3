<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsContentTable extends Migration
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
                'content_name' => 'vereniging',
                'title' => 'De vereniging',
                'content_block_1' => 'De vereniging heeft vier officiele bijenstallen, in het Heempark, Noordwijkerhout, Merenwijk en Polderpark Cronesteijn. Zoekt u een plaats voor uw bijenvolken of weet u een plek voor een ander? Neem dan contact met ons op',
                'content_block_2' => '<b>Bijenhouden als hobby</b><br/> De tijd van de romantische bijenteelt in strokorven is voorbij. Tegenwoordig worden bijen hoofdzakelijk gehouden in meerdelige houten of kunstof kasten. Het voordeel van kasten is dat de imker zijn volken gemakkelijker kan controleren. De raampjes kunnen er worden uitgehaald om de honing te oogsten, en om ziekten en plagen van de bijen te bestrijden. Het is in Nederland niet mogelijk van de bijenteelt te leven, maar als de imker het goed doet, kan het imkeren een aardige hoeveelheid honing opleveren, en hoeft de hobby weinig geld te kosten.',
                'content_block_3' => '<b>Het nut van de bijen</b><br/>Honingbijen leveren o.a. was en honing, maar ook bijengif, propolis en dienen als bestuivers van gewassen. Dat is het directe nut van bijen. Bij het verzamelen van nectar en stuifmeel vliegt de bij van bloem naar bloem. Een deel van het stuifmeel blijft hierbij aan het behaarde lichaam en de pootjes kleven en zorgt voor de bestuiving van een volgende bloem. Doordat bijen bloemvast zijn, (ze vliegen op de bloemen van één plantensoort zolang daar voedsel te halen is) zijn ze uitermate geschikt voor de bestuiving van appel, peer, pruim en kers, maar ook voor bramen, aardbeien en bessen. Weet u wel dat 80% van de gewassen worden bestoven door honingbijen? Vooral in kassen moeten bijen ingezet worden voor de bestuiving van paprika en tomaten en bij de zaadteelt. De economische waarde ­‐ geschat op 730 mln Euro ­‐ van de honingbij ligt in de bestuivingsfunktie. De honing opbrengst bedraagt echter slechts 5% van de Nederlandse consumptie. Bijenwas werd in het verleden gebruikt voor verlichting als kaarsen, heden wordt was gebruikt in de cosmetica­‐industrie en als glansmiddel bij veel soorten snoep en drop.',
                'content_block_4' => '',
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
        Schema::dropIfExists('cms_content');
    }
}
