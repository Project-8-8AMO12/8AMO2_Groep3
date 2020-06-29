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
                'content_block_1' => ' <div class="col-md-6 col-xs-6"><h2 class="page-vereniging__subtitle">Standplaatsen</h2><h1 class="page-vereniging__title">Vinden en delen</h1><p>De vereniging heeft vier officiele bijenstallen, in het Heempark, Noordwijkerhout, Merenwijk en Polderpark Cronesteijn. Zoekt u een plaats voor uw bijenvolken of weet u een plek voor een ander? Neem dan contact met ons op</p></div>',
                'content_block_2' => ' <div class="col-md-6 col-xs-6 text-right"><h2 class="page-vereniging__subtitle">Waarom doen we het?</h2><h1 class="page-vereniging__title">Het nut van bijenhouden</h1><p><b>Bijenhouden als hobby</b><br/> De tijd van de romantische bijenteelt in strokorven is voorbij. Tegenwoordig worden bijen hoofdzakelijk gehouden in meerdelige houten of kunstof kasten. Het voordeel van kasten is dat de imker zijn volken gemakkelijker kan controleren. De raampjes kunnen er worden uitgehaald om de honing te oogsten, en om ziekten en plagen van de bijen te bestrijden. Het is in Nederland niet mogelijk van de bijenteelt te leven, maar als de imker het goed doet, kan het imkeren een aardige hoeveelheid honing opleveren, en hoeft de hobby weinig geld te kosten.</p></div>',
                'content_block_3' => '<b>Het nut van de bijen</b><br/>Honingbijen leveren o.a. was en honing, maar ook bijengif, propolis en dienen als bestuivers van gewassen. Dat is het directe nut van bijen. Bij het verzamelen van nectar en stuifmeel vliegt de bij van bloem naar bloem. Een deel van het stuifmeel blijft hierbij aan het behaarde lichaam en de pootjes kleven en zorgt voor de bestuiving van een volgende bloem. Doordat bijen bloemvast zijn, (ze vliegen op de bloemen van één plantensoort zolang daar voedsel te halen is) zijn ze uitermate geschikt voor de bestuiving van appel, peer, pruim en kers, maar ook voor bramen, aardbeien en bessen. Weet u wel dat 80% van de gewassen worden bestoven door honingbijen? Vooral in kassen moeten bijen ingezet worden voor de bestuiving van paprika en tomaten en bij de zaadteelt. De economische waarde ­‐ geschat op 730 mln Euro ­‐ van de honingbij ligt in de bestuivingsfunktie. De honing opbrengst bedraagt echter slechts 5% van de Nederlandse consumptie. Bijenwas werd in het verleden gebruikt voor verlichting als kaarsen, heden wordt was gebruikt in de cosmetica­‐industrie en als glansmiddel bij veel soorten snoep en drop.',
                'content_block_4' => '<b>Natuur en milieu</b><br/>Bijenhouden is een echte natuurhobby: voor het imkeren bent u afhankelijk van het weer voor een goede honingoogst. Door het gebruik van chemische gewasbeschermingsmiddelen en het voorkomen van monocultures in de landbouw, zijn veel andere bestuivende insekten uit ons milieu verdwenen. Hun taak wordt nu overgenomen door de honingbij, zodat bijvoorbeeld heesters in plantsoenen dankzij de bijen ‘s winters bessen dragen, en er op die manier voor zorgen dat veel vogelsoorten in onze steden en dorpen kunnen overwinteren. Op hun manier dragen honingbijen dus bij aan de instandhouding van de flora en fauna.',
                'content_block_5' => '<b>Tips voor toekomstige bijenhouders</b><br/>Heeft u het plan opgevat om bijen te gaan houden? Dan is het van belang dat u zich aanmeldt bij een plaatselijke imkersvereniging: deze staat u bij met raad en daad, en helpt u vaak aan uw eerste volkje. Als lid van een plaatselijke afdeling bent u tevens lid van de NVB, en ontvangt u een maandblad. Bovendien is het goed een cursus te volgen voor beginnend of gevorderd imker. Wie een cursus voor beginners heeft gevolgd is in staat zelfstandig en met succes bijen te houden.Tips voor toekomstige bijenhouders Heeft u het plan opgevat om bijen te gaan houden? Dan is het van belang dat u zich aanmeldt bij een plaatselijke imkersvereniging: deze staat u bij met raad en daad, en helpt u vaak aan uw eerste volkje. Als lid van een plaatselijke afdeling bent u tevens lid van de NVB, en ontvangt u een maandblad. Bovendien is het goed een cursus te volgen voor beginnend of gevorderd imker. Wie een cursus voor beginners heeft gevolgd is in staat zelfstandig en met succes bijen te houden.',
                'content_block_6' => '<b>Tips voor de niet-­bijenhouders</b><br/>Ook als u niet van plan bent bijen te gaan houden, kunt u de bijen van dienst zijn, door bijvoorbeeld planten en struiken in uw tuin te zetten die nectar en stuifmeel leveren. Voor u levert dat dan een prachtig schouwspel van nijvere bijen en fleurige vlinders op, en de imkers in de buurt zullen u dankbaar zijn. Ook kunt u ervoor zorgen de bijen gezond te houden, door geen insecten­‐ of onkruidbestrijdingsmiddelen in de tuin te gebruiken, en wellicht uw buren en uw gemeente vragen hetzelfde te doen. Ook al houdt u geen bijen, u kunt toch genieten van echte Nederlandse honing uit de buurt. Bijna elk dorp of elke stad kent wel een aantal imkers die aan huis hun honing verkopen, die, wie weet, gehaald is in uw eigen tuin.',
                'content_block_7' => 'De contributie voor leden bedraagt voor 2020 € 77,50 per jaar.<br/>Leden van de imkersvereniging Leiden en omstreken zijn tevens lid van de NBV. De bijenvolken van de leden zijn verzekerd. Leden ontvangen het maandblad ‘Bijen’ en ‘De Stertselaar’. De donatie voor belangstellenden bedraagt ten minste € 15,- per jaar. Donateurs ontvangen ‘De Stertselaar’.',
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
        //
    }
}
