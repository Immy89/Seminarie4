<?php

use Illuminate\Database\Seeder;
use App\Recipe;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::create([
            'name' => 'Gräddkokta viltköttbullar och rårörda lingon med pepparrot',
            'image' => 'images/Köttbullar_med_mos.jpg',
            'ingredients' => '<h3>Ingredienser:</h3>
            <h4 class="header4">Köttbullar:</h4>
            <ul>
                <li>300 g älgfärs</li>
                <li>100 g fläskfärs</li>
                <li>1 dl rivet vitt dygnsgammalt bröd</li>
                <li>2 dl mjölk</li>
                <li>2 msk riven gul lök</li>
                <li>smör till stekning</li>
                <li>1 tsk salt</li>
                <li>1 ägg</li>
                <li>1 krm quatre épices (nejlika, muskot, ingefära, peppar)</li>
                <li>3 dl grädde</li>
            </ul>
            <h4 class="header4">Rårörda Lingon:</h4>
            <ul>
                <li>2 dl lingon</li>
                <li>0,5 dl socker</li>
                <li>1 bit pepparrot, fint riven</li>
            </ul>',
            'description' => '<h3>Så här gör du:</h3>
            <p>Blanda vitt bröd och mjölk, låt svälla i 5 minuter.</p>
            <p>Stek löken i lite smör och låt den svalna.</p>
            <p>Blanda färs och salt. Tillsätt mjölken med brödet, stekt lök, ägg och kryddor. Blanda allt till en jämn smet.</p>
            <p>Rulla köttbullar och stek dem i smör, bara precis så att de får en gyllenbrun färg. Låt dem gå färdigt i ugn,
                200-225 grader i 10-20 minuter, beroende på storlek.</p>
            <p>Lägg köttbullarna i en kastrull och täck med grädde, sjud 5 minuter så att grädden kokar in något.</p>
            <p>Rör lingonen med socker så att sockret löser sig, krydda med pepparrot.</p>',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Recipe::create([
            'name' => 'Veganska Bananpannkakor',
            'image' => 'images/Veganska_Bananpankakor.jpg',
            'ingredients' => '<h3>Ingredienser:</h3>
            <h4 class="header4">Pannkakor:</h4>
            <ul>
                <li>4 mogna bananer</li>
                <li>6 dl havregryn</li>
                <li>1 msk kokosolja</li>
                <li>3 tsk bakpulver</li>
                <li>2 dl havremjölk</li>
                <li>lite kardemumma</li>
                <li>1 krm vaniljpulver</li>
                <li>en nypa havssalt</li>
            </ul>
            <h4 class="header4">Kakaokräm:</h4>
            <ul>
                <li>Kakao</li>
                <li>Agave</li>
                <li>Kokosolja</li>
            </ul>
            <h4 class="header4">Topping:</h4>
            <ul>
                <li>Kakaokräm</li>
                <li>Blåbär</li>
                <li>Hallon</li>
                <li>Skivade Bananer</li>
            </ul>',
            'description' => '<h3>Så här gör du:</h3>
            <p>Mixa havregrynen till ett mjöl i en matberedare.</p>
            <p>Lägg sedan ner resten och mixa ihop till en smet.</p>
            <p>Låt det stå i ca 10 min och stek sedan i kokosolja.</p>
            <p>Blanda ihop ingredienserna för kakaokrämen och avnjut sedan med toppingen.</p>',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Recipe::create([
            'name' => 'Vietnamesiska Pannkakor',
            'image' => 'images/Vietnamesiska_Pannkakor.jpg',
            'ingredients' => '<h3>Ingredienser:</h3>
            <h4 class="header4">Pannkakor:</h4>
            <ul>
                <li>2,2 dl mjölk (3 %)</li>
                <li>1 ägg</li>
                <li>2 msk ljus soja (japansk)</li>
                <li>110 g rismjöl</li>
                <li>2 salladslök, strimlad</li>
                <li>jordnötsolja att steka i</li>
            </ul>
            <h4 class="header4">Fyllning:</h4>
            <ul>
                <li>ca 400 g handskalade räkor</li>
                <li>1 dl hackad holy basil eller thaibasilika</li>
                <li>1 dl hackad mynta</li>
                <li>1 dl hackad koriander</li>
                <li>3 dl färska mungbönsgroddar (ej konserv)</li>
                <li>0,5 gurka</li>
                <li>3-4 salladslökar</li>
                <li>ca 0,33 chili, urkärnad och finhackad</li>
                <li>0,5-1 msk rörsocker</li>
                <li>1 msk fisksås</li>
                <li>2,5 lime, saft från, (0,5 dl)</li>
            </ul>
            <h4 class="header4">Tillbehör:</h4>
            <ul>
                <li>friterad vitlök (finns i asiatiska butiker) eller rostad lök</li>
            </ul>',
            'description' => '<h3>Så här gör du:</h3>
            <p>Börja med pannkakorna. Vispa samman ägg, mjölk och soja i en skål. Tillsätt rismjölet allt eftersom och slutligen
                finstrimlad salladslök.</p>
            <p>Hetta upp en stekpanna med lite jordnötsolja och häll i ca 2 msk av smeten. Vinkla pannan åt olika håll så att
                smeten rinner ut i en jämn och hyfsat rund liten pannkaka (storleksmässigt som en blandning mellan pannkaka
                och plättar).</p>
            <p>Grädda i ca 1-2 minuter eller tills pannkakan börjar få lite lätt färg på undersidan, vänd då på den och grädda
                den i ytterligare 1-2 minuter. Tänk på att pannkakan ska gräddas försiktigt så den inte får för mycket färg
                och blir ”krispig” för då kan man inte rulla den när man äter den sedan.</p>
            <p>Upprepa med resterande smet. Packa in färdiggräddade pannkakor i folie så de håller värmen och lägg dem åt sidan.</p>
            <p>Rör samman limesaft, finhackad chili, socker och fisksås tills sockret löst sig. Strimla vårlöken. Dela gurkan
                på längden och kärna ur den. Skär den sedan i fina strimlor. Sväng samman gurka, mungbönor, salladslök, örter
                och räkor med dressingen.</p>
            <p>Servera de varma pannkakorna med salladen och friterad vitlök på toppen. Vill du kan du även servera med örter
                att toppa med (mynta, holy basil och koriander).</p>',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
