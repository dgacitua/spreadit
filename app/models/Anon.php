<?php

class Anon extends BaseModel
{
    
    protected static $pokemon = ["bulbasaur","ivysaur","venusaur","charmander","charmeleon","charizard","squirtle","wartortle","blastoise","caterpie","metapod","butterfree","weedle","kakuna","beedrill","pidgey","pidgeotto","pidgeot","rattata","raticate","spearow","fearow","ekans","arbok","pikachu","raichu","sandshrew","sandslash","nidoran(f)","nidorina","nidoqueen","nidoran(m)","nidorino","nidoking","clefairy","clefable","vulpix","ninetales","jigglypuff","wigglytuff","zubat","golbat","oddish","gloom","vileplume","paras","parasect","venonat","venomoth","diglett","dugtrio","meowth","persian","psyduck","golduck","mankey","primeape","growlithe","arcanine","poliwag","poliwhirl","poliwrath","abra","kadabra","alakazam","machop","machoke","machamp","bellsprout","weepinbell","victreebel","tentacool","tentacruel","geodude","graveler","golem","ponyta","rapidash","slowpoke","slowbro","magnemite","magneton","farfetch'd","doduo","dodrio","seel","dewgong","grimer","muk<lv3","shellder","cloyster","gastly","haunter","gengar","onix","drowzee","hypno","krabby","kingler","voltorb","electrode","exeggcute","exeggutor","cubone","marowak","hitmonlee","hitmonchan","lickitung","koffing","weezing","rhyhorn","rhydon","chansey","tangela","kangaskhan","horsea","seadra","goldeen","seaking","staryu","starmie","mr.mime","scyther","jynx","electabuzz","magmar","pinsir","tauros","magikarp","gyarados","lapras","ditto","eevee","vaporeon","jolteon","flareon","porygon","omanyte","omastar","kabuto","kabutops","aerodactyl","snorlax","articuno","zapdos","moltres","dratini","dragonair","dragonite","mewtwo","mewanci","","chikorita","bayleef","meganium","cyndaquil","quilava","typhlosion","totodile","croconaw","feraligatr","sentret","furret","hoothoot","noctowl","ledyba","ledian","spinarak","ariados","crobat","chinchou","lanturn","pichu","cleffa","igglybuff","togepi","togetic","natu","xatu","mareep","flaaffy","ampharos","bellossom","marill","azumarill","sudowoodo","politoed","hoppip","skiploom","jumpluff","aipom","sunkern","sunflora","yanma","wooper","quagsire","espeon","umbreon","murkrow","slowking","misdreavus","unown","wobbuffet","girafarig","pineco","forretress","dunsparce","gligar","steelix","snubbull","granbull","qwilfish","scizor","shuckle","heracross","sneasel","teddiursa","ursaring","slugma","magcargo","swinub","piloswine","corsola","remoraid","octillery","delibird","mantine","skarmory","houndour","houndoom","kingdra","phanpy","donphan","porygon2","stantler","smeargle","tyrogue","hitmontop","smoochum","elekid","magby","miltank","blissey","raikou","entei","suicune","larvitar","pupitar","tyranitar","lugia","ho-oh","celebi","","treecko","grovyle","sceptile","torchic","combusken","blaziken","mudkip","marshtomp","swampert","poochyena","mightyena","zigzagoon","linoone","wurmple","silcoon","beautifly","cascoon","dustox","lotad","lombre","ludicolo","seedot","nuzleaf","shiftry","taillow","swellow","wingull","pelipper","ralts","kirlia","gardevoir","surskit","masquerain","shroomish","breloom","slakoth","vigoroth","slaking","nincada","ninjask","shedinja","whismur","loudred","exploud","makuhita","hariyama","azurill","nosepass","skitty","delcatty","sableye","mawile","aron","lairon","aggron","meditite","medicham","electrike","manectric","plusle","minun","volbeat","illumise","roselia","gulpin","swalot","carvanha","sharpedo","wailmer","wailord","numel","camerupt","torkoal","spoink","grumpig","spinda","trapinch","vibrava","flygon","cacnea","cacturne","swablu","altaria","zangoose","seviper","lunatone","solrock","barboach","whiscash","corphish","crawdaunt","baltoy","claydol","lileep","cradily","anorith","armaldo","feebas","milotic","castform","kecleon","shuppet","banette","duskull","dusclops","tropius","chimecho","absol","wynaut","snorunt","glalie","spheal","sealeo","walrein","clamperl","huntail","gorebyss","relicanth","luvdisc","bagon","shelgon","salamence","beldum","metang","metagross","regirock","regice","registeel","latias","latios","kyogre","groudon","rayquaza","jirachi","deoxys"];

    protected static $adjectives = ["average","big","colossal","fat","giant","gigantic","great","huge","immense","large","little","long","mammoth","massive","miniature","petite","puny","short","small","tall","tiny","boiling","breezy","broken","bumpy","chilly","cold","cool","creepy","crooked","cuddly","curly","damaged","damp","dirty","dry","dusty","filthy","flaky","fluffy","wet","broad","chubby","crooked","curved","deep","flat","high","hollow","low","narrow","round","shallow","skinny","square","steep","straight","wide","ancient","brief","early","fast","late","long","modern","old","old-fashioned","quick","rapid","short","slow","swift","young","abundant","empty","few","heavy","light","many","numerous","sound","cooing","deafening","faint","harsh","high-pitched","hissing","hushed","husky","loud","melodic","moaning","mute","noisy","purring","quiet","raspy","resonant","screeching","shrill","silent","soft","squealing","thundering","voiceless","whispering","bitter","delicious","fresh","juicy","ripe","rotten","salty","sour","spicy","stale","sticky","strong","sweet","tasteless","tasty","thirsty","fluttering","fuzzy","greasy","grubby","hard","hot","icy","loose","melted","plastic","prickly","rainy","rough","scattered","shaggy","shaky","sharp","shivering","silky","slimy","slippery","smooth","soft","solid","steady","sticky","tender","tight","uneven","weak","wet","wooden","afraid","angry","annoyed","anxious","arrogant","ashamed","awful","bad","bewildered","bored","combative","condemned","confused","creepy","cruel","dangerous","defeated","defiant","depressed","disgusted","disturbed","eerie","embarrassed","envious","evil","fierce","foolish","frantic","frightened","grieving","helpless","homeless","hungry","hurt","ill","jealous","lonely","mysterious","naughty","nervous","obnoxious","outrageous","panicky","repulsive","scary","scornful","selfish","sore","tense","terrible","thoughtless","tired","troubled","upset","uptight","weary","wicked","worried","agreeable","amused","brave","calm","charming","cheerful","comfortable","cooperative","courageous","delightful","determined","eager","elated","enchanting","encouraging","energetic","enthusiastic","excited","exuberant","fair","faithful","fantastic","fine","friendly","funny","gentle","glorious","good","happy","healthy","helpful","hilarious","jolly","joyous","kind","lively","lovely","lucky","obedient","perfect","pleasant","proud","relieved","silly","smiling","splendid","successful","thoughtful","victorious","vivacious","witty","wonderful","zealous","zany","other","good","new","old","great","high","small","different","large","local","social","important","long","young","national","british","right","early","possible","big","little","political","able","late","general","full","far","low","public","available","bad","main","sure","clear","major","economic","only","likely","real","black","particular","international","special","difficult","certain","open","whole","white","free","short","easy","strong","european","central","similar","human","common","necessary","single","personal","hard","private","poor","financial","wide","foreign","simple","recent","concerned","american","various","close","fine","english","wrong","present","royal","natural","individual","nice","french","following","current","modern","labour","legal","happy","final","red","normal","serious","previous","total","prime","significant","industrial","sorry","dead","specific","appropriate","top","soviet","basic","military","original","successful","aware","hon","popular","heavy","professional","direct","dark","cold","ready","green","useful","effective","western","traditional","scottish","german","independent","deep","interesting","considerable","involved","physical","left","hot","existing","responsible","complete","medical","blue","extra","past","male","interested","fair","essential","beautiful","civil","primary","obvious","future","environmental","positive","senior","nuclear","annual","relevant","huge","rich","commercial","safe","regional","practical","official","separate","key","chief","regular","due","additional","active","powerful","complex","standard","impossible","light","warm","middle","fresh","sexual","front","domestic","actual","united","technical","ordinary","cheap","strange","internal","excellent","quiet","soft","potential","northern","religious","quick","very","famous","cultural","proper","broad","joint","formal","limited","conservative","lovely","usual","ltd","unable","rural","initial","substantial","christian","bright","average","leading","reasonable","immediate","suitable","equal","detailed","working","overall","female","afraid","democratic","growing","sufficient","scientific","eastern","correct","inc","irish","expensive","educational","mental","dangerous","critical","increased","familiar","unlikely","double","perfect","slow","tiny","dry","historical","thin","daily","southern","increasing","wild","alone","urban","empty","married","narrow","liberal","supposed","upper","apparent","tall","busy","bloody","prepared","russian","moral","careful","clean","attractive","japanese","vital","thick","alternative","fast","ancient","elderly","rare","external","capable","brief","wonderful","grand","typical","entire","grey","constant","vast","surprised","ideal","terrible","academic","funny","minor","pleased","severe","ill","corporate","negative","permanent","weak","brown","fundamental","odd","crucial","inner","used","criminal","contemporary","sharp","sick","near","roman","massive","unique","secondary","parliamentary","african","unknown","subsequent","angry","alive","guilty","lucky","enormous","well","communist","yellow","unusual","net","long-term","tough","dear","extensive","glad","remaining","agricultural","alright","healthy","italian","principal","tired","efficient","comfortable","chinese","relative","friendly","conventional","willing","sudden","proposed","voluntary","slight","valuable","dramatic","golden","temporary","federal","keen","flat","silent","indian","video-taped","worried","pale","statutory","welsh","dependent","firm","wet","competitive","armed","radical","outside","acceptable","sensitive","living","pure","global","emotional","sad","secret","rapid","adequate","fixed","sweet","administrative","wooden","remarkable","comprehensive","surprising","solid","rough","mere","mass","brilliant","maximum","absolute","tory","electronic","visual","electric","cool","spanish","literary","continuing","supreme","chemical","genuine","exciting","written","stupid","advanced","extreme","classical","fit","favourite","socialist","widespread","confident","straight","catholic","proud","numerous","opposite","distinct","mad","helpful","given","disabled","consistent","anxious","nervous","awful","stable","constitutional","satisfied","conscious","developing","strategic","holy","smooth","dominant","remote","theoretical","outstanding","pink","pretty","clinical","minimum","honest","impressive","related","residential","extraordinary","plain","visible","accurate","distant","still","greek","complicated","musical","precise","gentle","broken","live","silly","fat","tight","monetary","round","psychological","violent","unemployed","inevitable","junior","sensible","grateful","pleasant","dirty","structural","welcome","so-called","deaf","above","continuous","blind","overseas","mean","entitled","delighted","loose","occasional","evident","desperate","fellow","universal","square","steady","classic","equivalent","intellectual","victorian","level","ultimate","creative","lost","medieval","clever","linguistic","convinced","judicial","raw","sophisticated","asleep","vulnerable","illegal","outer","revolutionary","bitter","changing","australian","native","imperial","strict","wise","informal","flexible","collective","frequent","experimental","spiritual","intense","rational","ethnic","generous","inadequate","prominent","logical","bare","historic","modest","dutch","acute","electrical","valid","weekly","gross","automatic","loud","reliable","mutual","liable","multiple","ruling","curious","arab","sole","jewish","managing","pregnant","latin","nearby","exact","underlying","identical","satisfactory","marginal","distinctive","electoral","urgent","presidential","controversial","oral","everyday","encouraging","organic","continued","expected","statistical","desirable","innocent","improved","exclusive","marked","experienced","unexpected","superb","sheer","disappointed","frightened","full-time","gastric","capitalist","romantic","naked","reluctant","magnificent","convenient","established","closed","uncertain","artificial","diplomatic","tremendous","marine","mechanical","retail","institutional","mixed","required","biological","known","functional","straightforward","superior","digital","part-time","spectacular","unhappy","confused","unfair","aggressive","spare","painful","abstract","asian","associated","legislative","monthly","intelligent","hungry","explicit","nasty","just","faint","coloured","ridiculous","amazing","comparable","successive","working-class","realistic","back","decent","unnecessary","flying","fucking","random","influential","dull","genetic","neat","marvellous","crazy","damp","giant","secure","bottom","skilled","subtle","elegant","brave","lesser","parallel","steep","intensive","casual","tropical","lonely","partial","preliminary","concrete","alleged","assistant","vertical","upset","delicate","mild","occupational","excessive","progressive","iraqi","exceptional","integrated","striking","continental","okay","harsh","combined","fierce","handsome","characteristic","chronic","compulsory","interim","objective","splendid","magic","short-term","systematic","obliged","payable","fun","horrible","primitive","fascinating","ideological","metropolitan","surrounding","estimated","peaceful","premier","operational","technological","kind","advisory","hostile","precious","gay","accessible","determined","excited","impressed","provincial","smart","endless","isolated","post-war","drunk","geographical","like","dynamic","boring","forthcoming","unfortunate","definite","super","notable","indirect","stiff","wealthy","awkward","lively","neutral","artistic","content","mature","colonial","ambitious","evil","magnetic","verbal","legitimate","sympathetic","well-known","empirical","head","shallow","vague","naval","depressed","shared","added","shocked","mid","worthwhile","qualified","missing","blank","absent","favourable","polish","israeli","developed","profound","representative","enthusiastic","dreadful","rigid","reduced","cruel","coastal","peculiar","racial","ugly","swiss","crude","extended","selected","eager","feminist","canadian","bold","relaxed","corresponding","running","planned","applicable","immense","allied","comparative","uncomfortable","conservation","productive","beneficial","bored","charming","minimal","mobile","turkish","orange","rear","passive","suspicious","overwhelming","fatal","resulting","symbolic","registered","neighbouring","calm","irrelevant","patient","compact","profitable","rival","loyal","moderate","distinguished","interior","noble","insufficient","eligible","mysterious","varying","middle-class","managerial","molecular","olympic","linear","prospective","printed","parental","diverse","elaborate","furious","fiscal","burning","useless","semantic","embarrassed","inherent","philosophical","deliberate","awake","variable","promising","unpleasant","varied","sacred","selective","inclined","tender","hidden","worthy","intermediate","sound","protective","fortunate","slim","islamic","defensive","divine","stuck","driving","invisible","misleading","circular","mathematical","inappropriate","liquid","persistent","solar","doubtful","manual","architectural","intact","incredible","devoted","prior","tragic","respectable","optimistic","convincing","unacceptable","decisive","competent","spatial","respective","binding","relieved","nursing","toxic","select","redundant","integral","then","probable","amateur","fond","passing","specified","territorial","horizontal","old-fashioned","inland","cognitive","regulatory","miserable","resident","polite","scared","marxist","gothic","civilian","instant","lengthy","adverse","korean","unconscious","anonymous","aesthetic","orthodox","static","unaware","costly","fantastic","foolish","fashionable","causal","compatible","wee","implicit","dual","ok","cheerful","subjective","forward","surviving","exotic","purple","cautious","visiting","aggregate","ethical","protestant","teenage","large-scale","dying","disastrous","delicious","confidential","underground","thorough","grim","autonomous","atomic","frozen","colourful","injured","uniform","ashamed","glorious","wicked","coherent","rising","shy","novel","balanced","delightful","arbitrary","adjacent","psychiatric","worrying","weird","unchanged","rolling","evolutionary","intimate","sporting","disciplinary","formidable","lexical","noisy","gradual","accused","homeless","supporting","coming","renewed","excess","retired","rubber","chosen","outdoor","embarrassing","preferred","bizarre","appalling","agreed","imaginative","governing","accepted","vocational","palestinian","mighty","puzzled","worldwide","handicapped","organisational","sunny","eldest","eventual","spontaneous","vivid","rude","nineteenth-century","faithful","ministerial","innovative","controlled","conceptual","unwilling","civic","meaningful","disturbing","alive","brainy","breakable","busy","careful","cautious","clever","concerned","crazy","curious","dead","different","difficult","doubtful","easy","famous","fragile","helpful","helpless","important","impossible","innocent","inquisitive","modern","open","outstanding","poor","powerful","puzzled","real","rich","shy","sleepy","stupid","super","tame","uninterested","wandering","wild","wrong","adorable","alert","average","beautiful","blonde","bloody","blushing","bright","clean","clear","cloudy","colorful","crowded","cute","dark","drab","distinct","dull","elegant","fancy","filthy","glamorous","gleaming","graceful","grotesque","homely","light","misty","motionless","muddy","plain","poised","quaint","shiny","smoggy","sparkling","spotless","stormy","strange","ugly","unsightly","unusual","bad","better","beautiful","big","black","blue","bright","clumsy","crazy","dizzy","dull","fat","frail","friendly","funny","great","green","gigantic","gorgeous","grumpy","handsome","happy","horrible","itchy","jittery","jolly","kind","long","lazy","magnificent","magenta","many","mighty","mushy","nasty","new","nice","nosy","nutty","nutritious","odd","orange","ordinary","pretty","precious","prickly","purple","quaint","quiet","quick","quickest","rainy","rare","ratty","red","roasted","robust","round","sad","scary","scrawny","short","silly","stingy","strange","striped","spotty","tart","tall","tame","tan","tender","testy","tricky","tough","ugly","ugliest","vast","watery","wasteful","wide-eyed","wonderful","yellow","yummy","zany"];

    public static function generate_name()
    {
        return self::$adjectives[rand(0, count(self::$adjectives))] . self::$pokemon[rand(0, count(self::$pokemon))] . sprintf("%04d", rand(0, 9999));
    }


    public static function make($captcha)
    {
        $block = new SuccessBlock();

        if(!Auth::check()) {
            if($block->success) {
                $rules = ['captcha' => 'required|captcha'];
                $data  = ['captcha' => $captcha];

                $validate = Validator::make($data, $rules);
                if($validate->fails()) {
                    $block->success = false;

                    foreach($validate->messages()->all() as $v) {
                        $block->errors[] = $v;
                    }
                } 
            }

            if($block->success) {
                $username = Anon::generate_name();

                User::create_anon($username);
                if(!Auth::attempt(['username' => $username, 'password' => ''])) {
                    $block->success = false;

                    Log::error("anonymous $username failed login attempt on comment post @ " . time());
                    $block->errors[] = "A general error has occurred with logging in, try <a href='/login'>instead</a> sorry!";
                }
            }
        }

        return $block;
    }
}
