<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ZwermgezienCMSFiller extends Migration
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
                'content_name' => 'zwerm-gezien',
                'title' => 'Zwerm gezien?',
                'content_block_1' => '<h3 class="page-zwermgezien__title">Bijenzwerm opruimen</h3><p>Heeft u een bijenzwerm? Geen paniek. Een zwerm is niet gevaarlijk. Blijf rustig en houd afstand. Neem contact met ons op. Een imker komt graag langs om de zwerm op te halen. Om onnodige meldingen te voorkomen, lees s.v.p. onderstaande informatie door voor u de melding doet. Mocht u zeker weten dat u een bijenzwerm hebt, onderaan staan de contactgegevens voor het melden van een zwerm.</p>',
                'content_block_2' => '<h3 class="page-zwermgezien__title">Kenmerken voor een bijenzwerm</h3><p>Een bijenzwerm is een grote “bal of tros” met duizenden (tot wel 20.000) honingbijen die aan een voorwerp, bijvoorbeeld een tak, dakgoot of fiets, hangt. Imkers kunnen een bijenzwerm “scheppen” met behulp van een korf of bak. Het is belangrijk dat wij er bij kunnen, eventueel met een ladder (graag zelf voor zorgen, kunnen wij niet meenemen). Als een zwerm onbereikbaar is, dan kunnen we niet “scheppen”.<br/>Soms kruipt een zwerm in spouwmuren, schoorstenen en tussen de muren of aftimmering. Dan kunnen we niet bij de zwerm en kunnen we helaas niets doen.</p>',
                'content_block_3' => '<h3 class="page-zwermgezien__title">Hommels</h3><p>Hommels zijn wilde bijen en vaak wat “dikker” en “hariger” dan honingbijen. Hommels nestelen onder andere in vogelhuisjes, voegen en onder de grond. Hommelnesten kunnen niet verplaatst of geschept worden zoals bij zwermen honingbijen. Als imkers kunnen we u daar niet bij helpen. Handig om te weten:</p><ul><li><p>Hommels steken zelden mits ze met rust worden gelaten. Loop niet vlak voor de vliegopening langs – bij botsing kunnen hommels ook wel eens steken.</p></li><li><p>Hommelnesten sterven vanzelf uit in de herfst, vroege winter, ze verdwijnen vanzelf – u hoeft niets te doen.</p></li><li><p>Hommels nestelen graag in “niet schoongemaakte” nestkastjes – maak in de winter nestkastjes schoon als je geen hommels wilt</p></li><li><p>Om te voorkomen dat hommels het volgend jaar op een plek terugkomen om een nest te bouwen, kunt u in de winter voegen of andere gaten dichtstoppen – bijvoorbeeld met een bijenbekje (houdt bijen, wespen en muizen tegen met behoud van ventilatie).</p></li></ul><p>Zoek op het internet eventueel een plaatje van een honingbij en hommels (er zijn veel verschillende soorten hommels).</p>',
                'content_block_4' => '<h3 class="page-zwermgezien__title">Wespen</h3><p>Wespen hebben gele streepjes en zijn meestal dunner dan honingbijen. Wespen zwermen niet. Wespen hangen niet in een tros (zonder nest) in bijvoorbeeld een boom zoals een zwerm bijen. Wespen worden meestal in juli/ augustus waargenomen. Ze nestelen graag in hoekjes, lege ruimtes en holtes. Als imkers kunnen wij niets aan wespen doen. Handig om te weten:</p><ul><li><p>Wespen zijn zeer nuttige beesten en eten insecten zoals muggen – als je er geen of weinig last van hebt, laat wespen dan zitten.</p></li><li><p>Wespennesten sterven vanzelf uit in de herfst, vroege winter, ze verdwijnen vanzelf – u hoeft niets te doen.</p></li><li><p>Om te voorkomen dat wespen het volgend jaar op een plek terugkomen om een nest te bouwen, kunt u in de winter voegen of andere gaten dichtstoppen – bijvoorbeeld met een bijenbekje (houdt bijen, wespen en muizen tegen met behoud van ventilatie).</p></li></ul><p>Zoek op het internet eventueel een plaatje van een honingbij en wespen.</p>',
                'content_block_5' => '<h3 class="page-zwermgezien__title-black">Melden van een bijenzwerm</h3><p>Je kunt een bijenzwerm melden door een appje met naam en adres plus foto van de zwerm te appen naar onderstaande nummer. Geef s.v.p. ook aan hoe hoog de zwerm zit en of er een trap aanwezig is indien nodig. Wij sturen uw appje door naar een groepje imkers die zwermen scheppen. Eén van hen belt u terug om een afspraak te maken. Meestal kunnen wij dezelfde dag of de dag erna de zwerm door één van onze imkers laten scheppen:</p><p>06 12696855 – Roland Koster<br/>Bij geen reactie na 2 uur, stuur dezelfde app s.v.p. naar:<br/>06 3709 0821 – Steven Kluft<br/>Mocht u vragen hebben, dan kunt u altijd even bellen.</p>',
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
