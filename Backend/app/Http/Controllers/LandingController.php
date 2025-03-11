<?php

namespace App\Http\Controllers;

use App\Http\Resources\NutritionResourceCollection;
use App\Models\Country;
use App\Models\Crop;
use App\Models\EcoRegion;
use App\Models\Nutrition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LandingController extends Controller
{

    public function special(){
        //            $this->loadLocationData();
//        $this->loadNutritionData();
//        return;
//        $locations = [
//            ['Mumbai', 19.0760,72.8777],
//            ['Pune', 18.5204,73.8567],
//            ['Bhopal ', 23.2599,77.4126],
//            ['Agra', 27.1767,78.0081],
//            ['Delhi', 28.7041,77.1025],
//            ['Rajkot', 22.2734719,70.7512559],
//        ];
//        $this->loadNutritionSummary();
        echo "Done";
    }
    public function explore(){
        $locations = [
            ["1","GR2AX","Ghana","Ashanti","Adagya","6.9468405","-1.7589658","Corn","None","White","Mar","2022","Maize ","No","None","Yes","Poultry manure","Broadcast","Sep","2022","No","Yes","NAN","NAN","NAN"],
            ["2","GR5BX","Ghana","Brong Ahafo","Anikroma","6.811968","-1.7556054","Okra","None","Short","May","2022","Okro ","Yes","NPK 15-15-15","Yes","Poultry manure","NAN","Jul","2022","No","Yes","Monocropping","Yes","NAN"],
            ["3","GR5AO","Ghana","Brong Ahafo","Anikroma","6.805401","-1.7461643","Okra","None","Long","Jul","2022","Vegetable","Yes","NPK 15-15-15","Yes","Poultry manure","NAN","Nov","2022","No","Yes","Mixed","Yes","NAN"],
            ["4","GR5AX","Ghana","Brong Ahafo","Anikroma","6.811968","-1.7556054","Okra","None","Long","Feb","2022","Okro","Yes","NPK 15-15-15","No","None","NAN","Sep","2022","No","Yes","Monocropping","Yes","NAN"],
            ["5","GR5BO","Ghana","Brong Ahafo","Anikroma","6.805401","-1.7461643","Okra","None","Short","Jul","2022","Vegetable","Yes","NPK 15-15-15","Yes","Poultry manure","Band","Nov","2022","No","Yes","Mixed","Yes","NAN"],
            ["6","GS2AX","Ghana","Brong Ahafo","Atebubu","7.499237","-1.6668735","Corn","None","White","Apr","2022","Maize","Yes","NPK 23-10-5","No","None","Split","Aug","2022","Yes","Yes","NAN","NAN","NAN"],
            ["7","GS4BX","Ghana","Ashanti","Ayerede","7.4127278","-1.3899878","Rice","None","Short grain","Jun","2022","Rice","No","None","No","None","None","Nov","2022","No","Yes","NAN","NAN","NAN"],
            ["8","GS4AO","Ghana","Ashanti","Ayerede","7.440052","-1.4615776","Rice","None","Long grain","May","2022","Rice","No","None","No","None","None","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["9","GS4AX","Ghana","Ashanti","Ayerede","7.4423499","-1.5070263","Rice","None","Long grain","May","2022","Rice","No","None","No","None","None","Nov","2022","No","Yes","NAN","NAN","NAN"],
            ["10","GS2BX","Ghana","Brong Ahafo","Dandwa","7.5407475","-1.902752","Corn","None","Yellow","Apr","2022","Cowpea","Yes","NPK and Urea","No","None","Point placement","Jul","2022","No","Yes","NAN","NAN","NAN"],
            ["11","GS2AO","Ghana","Brong Ahafo","Dandwa","7.5551791","-1.7521507","Corn","None","White","Aug","2022","Maize","Yes","NPK 23-10-5","No","None","Point placement","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["12","GS2BO","Ghana","Brong Ahafo","Dandwa-Dromakese","7.5153871","-1.67478","Corn","None","Yellow","Apr","2022","Groundnut","Yes","NPK 15-15-15","No","None","Point placement and split","Aug","2022","Yes","Yes","NAN","NAN","NAN"],
            ["13","GS5BX","Ghana","Brong Ahafo","Donkeronkwanta","7.4070043","-1.6095769","Okra","None","Short","Oct","2022","Maize","Yes","NPK 23-10-5","No","None","NAN","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["14","GS1AX","Ghana","Brong Ahafo","Ejura","7.553385","-1.6958072","Cassava","None","Low cyanide","Apr","2022","Groundnut - mixed farm with cassava","No","None","No","None","None","Nov","2022","No","Yes","Mixed","NAN","NAN"],
            ["15","GS4BO","Ghana","Brong Ahafo","Ejura - Ayerede","7.4808335","-1.6441924","Rice","None","Short grain","Jul","2022","Rice","No","None","No","None","None","Nov","2022","No","Yes","NAN","NAN","NAN"],
            ["16","GS1BX","Ghana","Brong Ahafo","Fiaso - Dandwa","7.51603","-1.6824625","Cassava","None","High cyanide","Sep","2022","Cassava","No","None","No","None","None","Oct","2022","No","No","NAN","NAN","NAN"],
            ["17","GS3BO","Ghana","Brong Ahafo","Grumakrom","7.4919802","-1.6601036","Cowpea","None","Brown","Aug","2022","Cowpea","No","None","No","None","None","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["18","GS3BX","Ghana","Brong Ahafo","Grumakrom","7.3805545","-1.3499457","Cowpea","None","Brown","Jul","2022","Maize","No","None","No","None","None","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["19","GS3AO","Ghana","Brong Ahafo","Grumakrom","7.5407116","-1.1986524","Cowpea","None","White","Jul","2022","Maize","No","None","No","None","None","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["20","GS3AX","Ghana","Brong Ahafo","Grumakrom - Atebubu","7.5923748","-1.1682063","Cowpea","None","White","Aug","2022","Maize","No","None","No","None","None","Nov","2022","No","Yes","NAN","NAN","NAN"],
            ["21","GS5AX","Ghana","Brong Ahafo","Kintampo","8.0249452","-1.7279642","Okra","Ladies finger","Long","Aug","2022","Maize","Yes","NPK 23-10-5","No","None","NAN","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["22","GS5AO","Ghana","Brong Ahafo","Kintampo","8.0808141","-1.7147674","Okra","None","Long","Aug","2022","Okro","Yes","NPK 23-10-5","No","None","NAN","Oct","2022","Yes","No","NAN","NAN","NAN"],
            ["23","GS5BO","Ghana","Brong Ahafo","Kranka","7.682405","-1.815188","Okra","None","Short","Aug","2022","Okro","Yes","NPK 23-10-5","No","None","NAN","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["24","GS1AO","Ghana","Brong Ahafo","Nkoranza","7.636541","-1.7224023","Cassava","None","Low cyanide","Apr","2022","Groundnut","No","None","No","None","None","Nov","2022","No","No","Mixed","NAN","NAN"],
            ["25","GS1BO","Ghana","Brong Ahafo","Nkoranza - Jema","7.9080849","-1.7593092","Cassava","None","High cyanide","Apr","2022","Maize","No","None","No","None","None","Oct","2022","Yes","No","NAN","NAN","NAN"],
            ["26","GR2AO","Ghana","Ashanti","Old Offinso","6.9051929","-1.6601479","Corn","None","White","Apr","2022","Plantain","No","None","No","None","None","Aug","2022","No","No","Mixed","NAN","Yes"],
            ["29","GR1BO","Ghana","Ashanti","Sakamukrom","6.995575","-1.696536","Cassava","None","High cyanide","Apr","2022","Maize","No","None","Yes","Poultry manure","Broadcast","Oct","2022","No","Yes","NAN","NAN","NAN"],
            ["31","GR1AX","Ghana","Ashanti","Sakamukrom","6.8325168","-1.7307094","Cassava","None","Low cyanide","Apr","2022","Maize","No","None","No","None","None","Sep","2022","Yes","No","NAN","NAN","NAN"],
            ["32","GR1AO","Ghana","Ashanti","Sakamukrom","6.9476945","-1.7039085","Cassava","None","Low cyanide","Aug","2021","Plantain and Cocoa","No","None","No","None","None","Nov","2022","No","No","Mixed","NAN","NAN"],
            ["37","GR1BX","Ghana","Ashanti","Sakamukrom","6.9004305","-1.6655707","Cassava","None","High cyanide","Apr","2022","Cassava","No","None","No","None","None","Nov","2022","Yes","No","NAN","NAN","NAN"],
            ["27","GR2BX","Ghana","Ashanti","Sakamukrom","6.9227131","-1.6983499","Corn","None","Yellow","Apr","2022","Forest","No","None","Yes","Poultry manure","NAN","Aug","2022","No","Yes","Mixed","NAN","Yes"],
            ["28","GR2BO","Ghana","Ashanti","Sakamukrom","6.9079721","-1.7344186","Corn","None","Yellow","Apr","2022","Forest","No","None","Yes","Poultry manure","Broadcast","Aug","2022","No","Yes","Mixed","NAN","Yes"],
            ["30","GR3BX","Ghana","Ashanti","Sakamukrom","6.8716626","-1.74115204","Cowpea","None","Brown","Jul","2022","Maize","No","None","No","None","None","Aug","2022","No","No","NAN","NAN","NAN"],
            ["33","GR4AO","Ghana","Ashanti","Sakamukrom","6.8231497","-1.7317354","Rice","None","Low land","Mar","2022","Rice","No","None","Yes","Poultry manure","None","Jul","2022","No","Yes","NAN","NAN","NAN"],
            ["34","GR4AX","Ghana","Ashanti","Sakamukrom","6.8193296","-1.7563333","Rice","None","Low land","Mar","2022","Rice","No","None","Yes","Poultry manure","None","Jul","2022","No","Yes","NAN","NAN","NAN"],
            ["35","GR4BO","Ghana","Ashanti","Sakamukrom","6.8250099","-1.7358308","Rice","None","Upland","Mar","2022","Vegetable","Yes","NPK 15-15-15 and Urea","No","None","None","Aug","2022","No","Yes","NAN","NAN","NAN"],
            ["36","GR4BX","Ghana","Ashanti","Sakamukrom","6.822516","-1.7315688","Rice","None","Upland","Mar","2022","Rice","Yes","NPK 15-15-15","Yes","Poultry manure","Broadcast","Aug","2022","No","Yes","NAN","NAN","NAN"],
            ["38","GR3AX","Ghana","Ashanti","Sakamukrom-Adagya","6.992257","-1.804498","Cowpea","None","White","Jul","2022","Maize","No","None","No","None","None","Sep","2022","No","Yes","NAN","NAN","NAN"],
            ["39","GR3AO","Ghana","Ashanti","Sakamukrom-Adagya","6.9453372","-1.7550424","Cowpea","None","White","Jul","2022","Cowpea","No","None","No","None","None","Sep","2022","No","Yes","NAN","NAN","NAN"],
            ["40","GR3BO","Ghana","Ashanti","Sakamukrom-Bonsua","6.9478676","-1.7242081","Cowpea","None","Brown","Jul","2022","Maize","No","None","No","None","None","Sep","2022","No","No","NAN","NAN","NAN"],
            ["49","NR5AO","Nigeria","Edo","Iguomo","6.477384","5.459805","Amaranth","Green","Viridis","Oct","2022","Amaranth","Yes","Super-gro","No","None","NAN","Nov","2022","Yes","Yes","NAN","Yes","Yes"],
            ["50","NR5AX","Nigeria","Edo","Iguoriakhi","6.481305","5.464032","Amaranth","Green","Viridis","Oct","2022","Amaranth","Yes","Super-gro","No","None","NAN","Nov","2022","No","Yes","NAN","Yes","Yes"],
            ["51","NR5BO","Nigeria","Edo","New Benin","6.351316","5.628919","Amaranth","Yoruba red amaranth","Cruentus","Oct","2022","Amaranth","Yes","Urea","No","None","NAN","Nov","2022","Yes","Yes","NAN","Yes","Yes"],
            ["52","NR5BX","Nigeria","Edo","Isihor","6.406791","5.608706","Amaranth","Red vegetable","Cruentus","Oct","2022","Maize","Yes","Urea","No","None","NAN","Nov","2022","Yes","Yes","NAN","Yes","Yes"],
            ["41","NR1AO","Nigeria","Edo","Iguoriakhi","6.481574","5.46505","Cassava","None","Low cyanide","May","2021","Cassava and Maize","No","None","No","None","None","Dec","2022","No","Yes","NAN","NAN","Yes"],
            ["42","NR1AX","Nigeria","Edo","Iguoriakhi","6.480773","5.463799","Cassava","None","Low cyanide","Oct","2021","Cassava","No","None","No","None","None","Nov","2022","No","Yes","NAN","NAN","Yes"],
            ["43","NR1BO","Nigeria","Edo","Iqwosula","6.535118","5.638982","Cassava","Give me chance","High cyanide","Nov","2021","Maize","No","None","No","None","None","Nov","2022","Yes","Yes","NAN","NAN","Yes"],
            ["44","NR1BX","Nigeria","Edo","Iguoriakhi","6.517189","5.440676","Cassava","Give me chance","High cyanide","May","2022","Maize","No","None","No","None","None","Jul","2022","No","Yes","Cover","NAN","Yes"],
            ["45","NR2AO","Nigeria","Edo","Iguosula","6.53506","5.638529","Corn","White maize","White","Apr","2021","Maize","No","None","No","None","None","Aug","2022","Yes","Yes","NAN","NAN","NAN"],
            ["46","NR2AX","Nigeria","Edo","Iguoriakhi","6.481448","5.464577","Corn","White maize","White","Jul","2022","Cassava and Maize","Yes","NPK 15-15-15","No","None","NAN","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["47","NR2BO","Nigeria","Edo","Iguoriakhi","6.479421","5.460355","Corn","Yellow maize","Yellow","Jul","2022","Maize","Yes","Super-gro","No","None","NAN","Nov","2022","No","Yes","NAN","NAN","Yes"],
            ["48","NR2BX","Nigeria","Edo","Iguoriakhi","6.48113","5.464502","Corn","Yellow maize","Yellow","Jul","2022","Cassava and Maize","No","None","No","None","None","Nov","2022","No","Yes","NAN","NAN","Yes"],
            ["57","NR3AO","Nigeria","Edo","Iguomo","6.481905","5.464563","Cowpea","White beans","White","Aug","2022","Maize","No","No","No","None","None","Sep","2022","Yes","Yes","NAN","NAN","Yes"],
            ["58","NR3BX","Nigeria","Edo","Iguomo","6.481535","5.464513","Cowpea","None","Brown","Jul","2022","Maize","No","No","No","None","None","Sep","2022","Yes","Yes","NAN","NAN","Yes"],
            ["59","NR3BO","Nigeria","Edo","Ogheghe","6.423214","5.546859","Cowpea","Red beans","Brown","May","2022","Cassava and Maize","No","No","No","None","None","Jul","2022","Yes","Yes","NAN","NAN","Yes"],
            ["60","NR3AX","Nigeria","Edo","Okhunmeum","6.417788","5.56802","Cowpea","White beans","White","Aug","2022","Cassava and Maize","No","No","No","None","None","Sep","2022","Yes","Yes","NAN","NAN","NAN"],
            ["53","NR4AO","Nigeria","Edo","Iguomo","6.474405","5.458579","Rice","Local rice","Short grain","Aug","2022","Rice","No","No","No","None","None","Dec","2022","No","Yes","NAN","NAN","Yes"],
            ["54","NR4AX","Nigeria","Edo","Iguoriakhi","6.4804","5.464931","Rice","Local rice","Short grain","Aug","2022","Maize","No","No","No","None","None","Dec","2022","No","Yes","NAN","NAN","Yes"],
            ["55","NR4BO","Nigeria","Edo","Iguoriakhi","6.481401","5.463593","Rice","Nigerian foreign rice","Long grain","Jul","2022","Maize","No","No","No","None","None","Nov","2022","Yes","Yes","NAN","Yes","NAN"],
            ["56","NR4BX","Nigeria","Edo","Iguoriakhi","6.481212","5.464016","Rice","Local rice","Long grain","Jul","2022","Maize","No","No","No","None","None","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["69","NV5AO","Nigeria","Kwara","Kereaje","8.183531","4.702261","Amaranth","Tete green","Viridis","Oct","2022","Vegetable","No","None","No","None","None","Oct","2022","Yes","No","NAN","Yes","Yes"],
            ["70","NV5AX","Nigeria","Kwara","Offa ","8.183646","4.702449","Amaranth","Green","Viridis","Oct","2022","Vegetable","No","None","Yes","Ash","None","Oct","2022","Yes","No","NAN","Yes","Yes"],
            ["71","NV5BO","Nigeria","Kwara","Afro ","8.466165","4.568366","Amaranth","Tete","Cruentus","Sep","2022","Pepper","Yes","Super-gro","No","None","NAN","Oct","2022","Yes","Yes","NAN","Yes","Yes"],
            ["76","NV5BX","Nigeria","Kwara","Ajase","8.263608","4.836093","Amaranth","Tete pupa","Cruentus","Oct","2022","Maize","Yes","NAN","No","None","Broadcast","Oct","2022","Yes","Yes","NAN","Yes","NAN"],
            ["61","NV1AO","Nigeria","Kwara","Ita Akinbiade","8.337486","4.544078","Cassava","Ege atu","Low cyanide","Oct","2021","Cassava and Maize","No","None","No","None","None","Oct","2022","Yes","No","Cover","NAN","Yes"],
            ["62","NV1AX","Nigeria","Kwara","Afon ","8.338048","4.543065","Cassava","Atu","Low cyanide","Oct","2021","Cassava and Maize","No","None","No","None","None","Nov","2022","Yes","No","Mixed","NAN","Yes"],
            ["63","NV1BO","Nigeria","Kwara","Afon","8.336718","4.542976","Cassava","Oko Iyawo","High cyanide","Oct","2021","Maize","No","None","No","None","None","Oct","2022","Yes","No","Cover","NAN","Yes"],
            ["64","NV1BX","Nigeria","Kwara","Ajase","8.248657","4.808821","Cassava","Oko Iyawo","High cyanide","Oct","2021","Cassava","No","None","No","None","None","Oct","2022","No","No","Cover","NAN","Yes"],
            ["65","NV2AO","Nigeria","Kwara","Odore","8.558607","4.680938","Corn","White maize","White","Jun","2021","Maize","Yes","NPK 27-13-13","Yes","Poultry manure","NAN","Nov","2021","Yes","Yes","NAN","NAN","NAN"],
            ["66","NV2AX","Nigeria","Kwara","Oja Oba","8.55859","4.675496","Corn","White maize","White","May","2022","Cassava","Yes","NPK 15-15-15","Yes","Poultry manure","NAN","A","2022","Yes","Yes","NAN","NAN","NAN"],
            ["67","NV2BO","Nigeria","Kwara","Odore","8.503792","4.578467","Corn","Yellow maize","Yellow","Jun","2022","Maize","Yes","NPK 20-10-10","Yes","Poultry manure","NAN","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["68","NV2BX","Nigeria","Kwara","Odore","8.55955","4.680378","Corn","Agbado yellow","Yellow","Aug","2021","Cassava and Maize","Yes","NPK 15-15-15","No","None","NAN","Nov","2021","Yes","Yes","NAN","NAN","NAN"],
            ["72","NV3AO","Nigeria","Kwara","Odore","8.555227","4.672887","Cowpea","ewa olojududu","White","Sep","2022","Yam","No","None","No","None","None","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["73","NV3AX","Nigeria","Kwara","Agbeyangi","8.550279","4.661456","Cowpea","Ewa funfun","White","Aug","2022","Maize","No","None","No","None","None","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["74","NV3BO","Nigeria","Kwara","Odore","8.556702","4.67327","Cowpea","Ewa pupa","Brown","Aug","2022","Maize","No","None","No","None","None","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["75","NV3BX","Nigeria","Kwara","Gbapo","8.554527","4.671801","Cowpea","Ewa pupa","Brown","Aug","2022","Cowpea","No","None","No","None","None","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["77","NV4BO","Nigeria","Kwara","Offa ","8.196069","4.742643","Rice","None","Long grain","Jul","2022","Rice","Yes","Super-gro","No","None","NAN","Dec","2022","Yes","Yes","NAN","NAN","NAN"],
            ["78","NV4BX","Nigeria","Kwara","Offa ","8.161099","4.726503","Rice","Rice","Long grain","Jul","2021","Rice","Yes","Super-gro","No","None","NAN","Nov","2021","Yes","Yes","NAN","NAN","NAN"],
            ["79","NV4AO","Nigeria","Kwara","Igberi","8.350566","4.732179","Rice","Tiwantiwa-Varo 44","Short grain","Jun","2022","Rice","Yes","NPK 15-15-15","Yes","Poultry manure","NAN","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["80","NV4AX","Nigeria","Kwara","Omupo","8.297323","4.77468","Rice","Rice","Short grain","Sep","2022","Rice","Yes","Super-gro","No","None","NAN","Dec","2022","Yes","Yes","NAN","NAN","Yes"],
            ["97","NS5AO","Nigeria","Oyo","Moyara","7.811504","3.884488","Amaranth","Tete green","Viridis","Sep","2022","Vegetable","Yes","Urea","Yes","Goat dung","NAN","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["98","NS5AX","Nigeria","Oyo","Moyara","7.811512","3.884202","Amaranth","Tete pupa","Viridis","Sep","2022","Egusi Melon","Yes","Urea","Yes","Goat dung","NAN","Oct","2022","Yes","No","NAN","Yes","NAN"],
            ["99","NS5BO","Nigeria","Oyo","Moyara","7.811371","3.884768","Amaranth","Tete pupa","Cruentus","Sep","2022","Egusi Melon","Yes","Urea","No","None","NAN","Jul","2022","Yes","Yes","NAN","Yes","NAN"],
            ["100","NS5BX","Nigeria","Oyo","Moyara","7.812119","3.884171","Amaranth","Red tete","Cruentus","Sep","2022","Maize","Yes","Urea","No","None","NAN","Oct","2022","Yes","Yes","NAN","Yes","NAN"],
            ["81","NS1AO","Nigeria","Oyo","Ilora","7.796692","3.82069","Cassava","Ege isu","Low cyanide","Nov","2021","Maize","No","None","No","None","None","Oct","2022","Yes","Yes","Cover","NAN","NAN"],
            ["82","NS1AX","Nigeria","Oyo","Ilora","7.797987","3.819618","Cassava","Ege isu","Low cyanide","Oct","2021","Maize","No","None","No","None","None","Oct","2022","Yes","Yes","Cover","NAN","NAN"],
            ["83","NS1BO","Nigeria","Oyo","Ilora","7.796097","3.818971","Cassava","Gari","High cyanide","Oct","2021","Maize","No","None","No","None","None","Oct","2022","Yes","Yes","Cover","NAN","NAN"],
            ["84","NS1BX","Nigeria","Oyo","Aba Dijo","7.797111","3.819393","Cassava","Ege gari","High cyanide","Oct","2021","Maize","No","None","No","None","None","Oct","2022","Yes","Yes","Cover","NAN","NAN"],
            ["85","NS2AO","Nigeria","Oyo","Oke chain","7.795308","3.818782","Corn","Ogi","White","Jul","2022","Cassava","Yes","NPK 15-15-15","No","None","NAN","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["86","NS2AX","Nigeria","Oyo","Seke ","7.804574","3.852103","Corn","Ogi","White","Aug","2022","Cassava","Yes","NPK 15-15-15","No","None","NAN","Nov","2022","Yes","Yes","Mixed","NAN","NAN"],
            ["87","NS2BO","Nigeria","Oyo","Bawoo","7.77723","3.795928","Corn","Agbado yellow","Yellow","Aug","2022","Maize","Yes","NPK 15-15-15","No","None","NAN","Oct","2022","Yes","Yes","Mixed","NAN","NAN"],
            ["88","NS2BX","Nigeria","Oyo","Seke ","7.808096","3.862098","Corn","Agbado yellow","Yellow","Oct","2021","Maize","Yes","Super-gro","No","None","NAN","Nov","2021","Yes","Yes","NAN","NAN","NAN"],
            ["89","NS3AO","Nigeria","Oyo","Oke chain ","7.79705","3.820873","Cowpea","Kawoleri","White","Aug","2021","Maize","No","None","No","None","None","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["90","NS3AX","Nigeria","Oyo","Danun","7.786187","3.806389","Cowpea","Kawoleri","White","Aug","2022","Cowpea","Yes","Super-gro","No","None","NAN","Jan","2022","Yes","Yes","NAN","NAN","NAN"],
            ["91","NS3BO","Nigeria","Oyo","Boundary","7.635527","3.544855","Cowpea","Ewa oloyin","Brown","Dec","2022","Maize","No","None","No","None","None","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["92","NS3BX","Nigeria","Oyo","Boundary ","7.795796","3.821301","Cowpea","Ewa oloyin","Brown","Aug","2022","Cassava and Maize","No","None","No","None","None","Nov","2022","Yes","Yes","NAN","NAN","NAN"],
            ["93","NS4AO","Nigeria","Oyo","Ilora","7.77766","3.795615","Rice","Rice","Short grain","Sep","2022","Maize","Yes","Super-gro","No","None","NAN","Dec","2022","Yes","Yes","NAN","NAN","NAN"],
            ["94","NS4AX","Nigeria","Oyo","Kajede","7.804975","3.847892","Rice","Rice","Short grain","Sep","2022","Maize","Yes","Super-gro","No","None","NAN","Oct","2022","Yes","Yes","NAN","NAN","NAN"],
            ["95","NS4BO","Nigeria","Oyo","Kajede","7.785303","3.806079","Rice","Rice","Long grain","Nov","2021","Rice","Yes","NPK 27-13-13","No","None","NAN","Apr","2022","Yes","Yes","NAN","NAN","NAN"],
            ["96","NS4BX","Nigeria","Oyo","Kajede","7.804895","3.846633","Rice","Rice","Long grain","Oct","2021","Cassava","Yes","Super-gro","No","None","NAN","Mar","2022","Yes","Yes","NAN","NAN","Yes"],
        ];

        /*
        $key = [SampleNo	SampleID	Country	State	Location	Latitude	Longitude	Crop	Local_name	Variety	Planting_month
        Planting_year	Previous_crop	Fertilizer	Fertilizer_type	Manure	Manure_type	Application_method	Harvest_month	Harvest_year
        Tillage	Herbicide_or_pesticide	Cropping_type	Irrigation	Burning];
        */
//        $locations = [
//            ['Oyo', 9.0579,7.4951],
//            ['Ghana', 5.5502,-0.2174],
//            ['Ghana', 6.6175,-1.7129],
//            ['Kwara ', 9.0579,7.4951],
//            ['Edo', 4.7731,7.0085],
//        ];

        return view('explore', compact('locations'));
    }

    public function dataCentre(){
        $countries = Country::all();
        $crops = Crop::all();

        return view('datacentre', compact('countries','crops'));
    }

    public function about(){
        return view('about');
    }

    public function gallery(){
        return view('gallery');
    }

    public function fetchState(Request $request){
        $data = EcoRegion::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchNutritionData(Request $request){


        $data = Nutrition::where("country_id",$request->country)->where("eco_region_id",$request->eco_region)
            ->where("crop_id",$request->crop)->get();

        $values = [];
        $categories = [];
        foreach($data as $d){
            $categories[] = $d->category;
            $vals = [
              $d->fibre ?? 0,
                $d->protein ?? 0,
                $d->fat ?? 0,
                $d->iron ?? 0,
                $d->carbohydrate ?? 0,
                $d->description ?? '',
                $d->summary ?? '',
            ];
            $values[] = $vals;
        }

        return response()->json([
            "categories" => $categories,
            "values" => $values
        ]);
    }

    public function fetchNutritionDataApi(Request $request){

        $validator = Validator::make($request->all(), [
            'country_id' => 'required | exists:countries,id',
            'eco_region_id' => 'required | exists:eco_regions,id',
            'crop_id' => 'required | exists:crops,id',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
                'data' => null,
            ],400);
        }

        $data = Nutrition::where("country_id",$request->country_id)->where("eco_region_id",$request->eco_region_id)
            ->where("crop_id",$request->crop_id)->get();


        return response()->json([
            "message" => "Request Successful",
            "data" => new NutritionResourceCollection($data)
        ],200);
    }

    private function loadNutritionData()
    {
        if (($open = fopen(storage_path() . "/nutrition.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $description = $data[0];
                $country = Country::where('name',$data[1])->first();
                $state = EcoRegion::firstOrCreate([
                    "name" => $data[2],
                ]);
                $crop = Crop::firstOrCreate([
                    "name" => $data[3],
                    "country_id" => $country->id
                ]);

                Nutrition::create([
                   'country_id' => $country->id,
                   'eco_region_id' => $state->id,
                   'crop_id' => $crop->id,
                   'category' => $data[4],
                   'description' => $description,
                   'fibre' => $data[5],
                   'protein' => $data[6],
                   'fat' => $data[7],
                   'iron' => $data[8],
                   'carbohydrate' => $data[9],
                ]);
            }

            fclose($open);
        }
    }

    private function loadNutritionSummary()
    {
        $datas = [
            ["val0"=>"CASSAVA (Gari variety) collected in FIELD 1 &2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Cassava","val4"=>"Gari","val5"=>"1.92","val6"=>"2.41","val7"=>"0.06","val8"=>"17.65","val9"=>"92.9","val10"=>"Dietry fibre is impotant for gut health and cassava has a high fibre diet in its class and especially when combined with vegetables"],["val0"=>"CASSAVA (Gari variety) collected in FIELD 1&2 of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Cassava","val4"=>"Gari","val5"=>"1.66","val6"=>"2.08","val7"=>"1.315","val8"=>"22.325","val9"=>"91.355","val10"=>"The low protein content in cassava is typical of tubers and should be supplemented with vegetables with high protein content"],["val0"=>"CASSAVA (Gari variety) collected in FIELD 1&2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Cassava","val4"=>"Gari","val5"=>"1.335","val6"=>"2.19","val7"=>"0.105","val8"=>"22.89","val9"=>"94.045","val10"=>"Tubers are generally low in fat content, energy produced is mainly form carbohydrates"],["val0"=>"CASSAVA (Low cyanide variety) collected in FIELD 1& 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Cassava","val4"=>"Gari","val5"=>"1.655","val6"=>"1.47","val7"=>"0.85","val8"=>"16.14","val9"=>"93.08","val10"=>" Iron content is relatively low in all cassva varieties but important as an input to daily recommended intake"],["val0"=>"CASSAVA (Low cyanide variety) collected in FIELD 1& 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Cassava","val4"=>"Gari","val5"=>"1.525","val6"=>"1.86","val7"=>"0.74","val8"=>"23.05","val9"=>"92.725","val10"=>"Cassava is a tuber, it is  high in complex carbohydrate which is important for production of energy, and especially because of the low glycemic index. "],["val0"=>"CASSAVA (Flour variety) collected in FIELD 1 &2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Cassava","val4"=>"Flour","val5"=>"2.74","val6"=>"1.45","val7"=>"0.31","val8"=>"18.21","val9"=>"94.17","val10"=>"Cassava is a staple in a lot of West African diets and a composite for wheat flour Nigeria.  "],["val0"=>"CASSAVA (Flour variety) collected in FIELD 1 &2of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Cassava","val4"=>"Flour","val5"=>"1.695","val6"=>"1.075","val7"=>"0.33","val8"=>"30.015","val9"=>"95.15","val10"=>""],["val0"=>"CASSAVA (Flour variety) collected in FIELD 1 &2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Cassava","val4"=>"Flour","val5"=>"1.705","val6"=>"1.425","val7"=>"0.145","val8"=>"22.435","val9"=>"95.385","val10"=>""],["val0"=>"CASSAVA (High cyanide variety) collected in FIELD 1 & 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Cassava","val4"=>"Flour","val5"=>"1.62","val6"=>"1.515","val7"=>"0.615","val8"=>"20.79","val9"=>"93.275","val10"=>""],["val0"=>"CASSAVA (High cyanide variety) collected in FIELD 1& 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Cassava","val4"=>"Flour","val5"=>"1.87","val6"=>"1.7","val7"=>"0.84","val8"=>"22.195","val9"=>"93.04","val10"=>""],["val0"=>"CORN (White variety) collected in FIELD 1&2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Corn","val4"=>"White","val5"=>"2.155","val6"=>"9.605","val7"=>"4.415","val8"=>"61.45","val9"=>"81.825","val10"=>"Corn is high in complex carbohydrate "],["val0"=>"CORN (White variety) collected in FIELD 1&2 of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Corn","val4"=>"White","val5"=>"1.755","val6"=>"9.225","val7"=>"4.96","val8"=>"44.585","val9"=>"81.855","val10"=>"Corn is a staple in most African meals, consumed at breakfast, lunch and dinner"],["val0"=>"CORN (White variety) collected in FIELD 1 & 2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Corn","val4"=>"White","val5"=>"2.06","val6"=>"9.12","val7"=>"4.82","val8"=>"41.4","val9"=>"81.895","val10"=>"Corn has a higher protein content than most tubers that are cateorized as main meals in African diets"],["val0"=>"CORN (White variety) collected in FIELD 1& 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Corn","val4"=>"White","val5"=>"1.835","val6"=>"10.66","val7"=>"4.92","val8"=>"26.395","val9"=>"80.395","val10"=>"Corn is also consumed in its fermented forms, which increases its B complex vitamin"],["val0"=>"CORN (White variety) collected in FIELD 1 & 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Corn","val4"=>"White","val5"=>"2.33","val6"=>"11.325","val7"=>"5.035","val8"=>"21.345","val9"=>"79.34","val10"=>"A balanced nutrition is obatined by combining  corn with vegetables and proteins"],["val0"=>"CORN (Yellow variety) collected in FIELD 1&2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Corn","val4"=>"Yellow","val5"=>"2.495","val6"=>"9.07","val7"=>"4.635","val8"=>"22.205","val9"=>"81.015","val10"=>""],["val0"=>"CORN (Yellow variety) collected in FIELD 1&2 of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Corn","val4"=>"Yellow","val5"=>"1.47","val6"=>"8.805","val7"=>"4.745","val8"=>"33.04","val9"=>"82.895","val10"=>""],["val0"=>"CORN (Yellow variety) collected in FIELD 1& 2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Corn","val4"=>"Yellow","val5"=>"1.945","val6"=>"9.48","val7"=>"3.365","val8"=>"20.61","val9"=>"82.96","val10"=>""],["val0"=>"CORN (Yellow variety) collected in FIELD 1& 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Corn","val4"=>"Yellow","val5"=>"1.96","val6"=>"10.825","val7"=>"4.915","val8"=>"33.85","val9"=>"80.15","val10"=>""],["val0"=>"CORN (Yellow variety) collected in FIELD 1& 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Corn","val4"=>"Yellow","val5"=>"2.46","val6"=>"10.325","val7"=>"5.025","val8"=>"45.515","val9"=>"80.175","val10"=>""],["val0"=>"COWPEA (White variety) collected in FIELD 1&2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Cowpea","val4"=>"White","val5"=>"2.4","val6"=>"24.505","val7"=>"1.015","val8"=>"58","val9"=>"68.055","val10"=>"Cowpeas, has a high protein content with a balanced fibre content"],["val0"=>"COWPEA (White variety) collected in FIELD 1&2 of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Cowpea","val4"=>"White","val5"=>"2.065","val6"=>"23.515","val7"=>"1.52","val8"=>"78.27","val9"=>"68.425","val10"=>"One of the major constraints for consumption of cowpea is the high fatulence factors. However, soaking before cooking can reduce this effect"],["val0"=>"COWPEA (White variety) collected in FIELD 1& 2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Cowpea","val4"=>"White","val5"=>"2.02","val6"=>"24.02","val7"=>"1.505","val8"=>"64.305","val9"=>"68","val10"=>"The high iron content is a good contribution to help meet the recommended daily allowance of iron"],["val0"=>"COWPEA (White variety) collected in FIELD 1& 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Cowpea","val4"=>"White","val5"=>"3.08","val6"=>"25.87","val7"=>"2.11","val8"=>"116.685","val9"=>"64.49","val10"=>"The complex carbohydrate and high protein content, makes it suitable for diabetic patients"],["val0"=>"COWPEA (White variety) collected in FIELD 1& 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Cowpea","val4"=>"White","val5"=>"3.26","val6"=>"25.415","val7"=>"2.1","val8"=>"58.35","val9"=>"65.005","val10"=>"The balanced micro and macro nutient in cowpeas helps it regulate blood sugar "],["val0"=>"COWPEA (Brown variety) collected in FIELD 1&2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Cowpea","val4"=>"Brown","val5"=>"2.255","val6"=>"24.05","val7"=>"0.945","val8"=>"55","val9"=>"68.635","val10"=>""],["val0"=>"COWPEA (Brown variety) collected in FIELD 1&2 of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Cowpea","val4"=>"Brown","val5"=>"1.82","val6"=>"23.71","val7"=>"1.6","val8"=>"106.875","val9"=>"68.515","val10"=>""],["val0"=>"COWPEA (Brown variety) collected in FIELD 1& 2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Cowpea","val4"=>"Brown","val5"=>"1.605","val6"=>"23.645","val7"=>"1.59","val8"=>"58.35","val9"=>"68.565","val10"=>""],["val0"=>"COWPEA (Brown variety) collected in FIELD 1& 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Cowpea","val4"=>"Brown","val5"=>"6.085","val6"=>"28.15","val7"=>"1.565","val8"=>"66.92","val9"=>"59.58","val10"=>""],["val0"=>"COWPEA (Brown variety) collected in FIELD 1& 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Cowpea","val4"=>"Brown","val5"=>"5.705","val6"=>"28.14","val7"=>"1.855","val8"=>"62.03","val9"=>"59.525","val10"=>""],["val0"=>"RICE (Variety 1) collected in FIELD 1&2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Rice","val4"=>"Long Grain","val5"=>"0.01","val6"=>"9.1","val7"=>"0.01","val8"=>"14.24","val9"=>"89.145","val10"=>"West Africa has one of the highest per capita consumption of rice in the world "],["val0"=>"RICE (Variety 1) collected in FIELD 1 &2of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Rice","val4"=>"Long Grain","val5"=>"0.03","val6"=>"8.91","val7"=>"0.8","val8"=>"48.91","val9"=>"88.62","val10"=>"Rice is a major source of energy, due to the high carbohydrate content"],["val0"=>"RICE (Variety 1) collected in FIELD 1& 2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Rice","val4"=>"Long Grain","val5"=>"0.02","val6"=>"9.64","val7"=>"0.48","val8"=>"52.455","val9"=>"88.2","val10"=>"Rice processing mostly involves removing the bran, which makes the fibre content lower than most cereal "],["val0"=>"RICE (Long grain variety) collected in FIELD 1& 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Rice","val4"=>"Long Grain","val5"=>"0","val6"=>"8.46","val7"=>"0.685","val8"=>"11.98","val9"=>"89.565","val10"=>"Rice does not have a high iron content, therefore combining it  with pulses that have higher iron content can help provide an iron nutrient balance"],["val0"=>"RICE (Long grain variety) collected in FIELD 1& 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Rice","val4"=>"Long Grain","val5"=>"0.01","val6"=>"7.6","val7"=>"0.78","val8"=>"54.555","val9"=>"89.995","val10"=>"Rice is not a reasonable source of Protein, so it should be combined with other sources of protein "],["val0"=>"RICE (Variety 2) collected in FIELD 1&2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Rice","val4"=>"Short Grain","val5"=>"0.005","val6"=>"7.775","val7"=>"0.155","val8"=>"21.735","val9"=>"90.23","val10"=>""],["val0"=>"RICE (Variety 2) collected in FIELD 1&2 of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Rice","val4"=>"Short Grain","val5"=>"0","val6"=>"8.355","val7"=>"0.735","val8"=>"38.31","val9"=>"89.46","val10"=>""],["val0"=>"RICE (Variety 2) collected in FIELD 1& 2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Rice","val4"=>"Short Grain","val5"=>"0.01","val6"=>"8.985","val7"=>"0.635","val8"=>"25.545","val9"=>"88.7","val10"=>""],["val0"=>"RICE (Short grain variety) collected in FIELD 1& 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Rice","val4"=>"Short Grain","val5"=>"0.045","val6"=>"8.935","val7"=>"0.585","val8"=>"22.435","val9"=>"89.155","val10"=>""],["val0"=>"RICE (Short grain variety) collected in FIELD 1& 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Rice","val4"=>"Short Grain","val5"=>"0.065","val6"=>"7.945","val7"=>"0.69","val8"=>"21.605","val9"=>"89.795","val10"=>""],["val0"=>"AMARANTH (Variety 1) collected in FIELD 1&2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Amaranth","val4"=>"V1","val5"=>"10.165","val6"=>"34.305","val7"=>"2.565","val8"=>"762.09","val9"=>"34.85","val10"=>"Amaranth leafs commonly called spinach is consumed as a side dish to most staple that are high in carbohydrates but low in fibre"],["val0"=>"AMARANTH (Variety 1) collected in FIELD 1 &2of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Amaranth","val4"=>"V1","val5"=>"13.425","val6"=>"31.345","val7"=>"2.69","val8"=>"336.655","val9"=>"34.63","val10"=>"Amaranth It is a vey rich source of iron "],["val0"=>"AMARANTH (Variety 1) collected in FIELD 1& 2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Amaranth","val4"=>"V1","val5"=>"8.935","val6"=>"26.645","val7"=>"2.505","val8"=>"322.535","val9"=>"43.755","val10"=>"Amaranth is high in fibre and therefore important for gut health"],["val0"=>"OKRO (Long Variety) collected in FIELD 1& 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Okro","val4"=>"Long","val5"=>"31.69","val6"=>"21.365","val7"=>"14.71","val8"=>"48.175","val9"=>"26.1","val10"=>"The protein conent in combination to the high mineral content in amaranth greens is essential for its antioxidant properties"],["val0"=>"OKRO (Long Variety) collected in FIELD 1& 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Okro","val4"=>"Long","val5"=>"33.17","val6"=>"22.46","val7"=>"16.205","val8"=>"44.465","val9"=>"22.05","val10"=>"Amaranth should be steamed to prevent nutrient loss"],["val0"=>"AMARANTH (Variety 2) collected in FIELD 1&2 of EDO STATE","val1"=>"Nigeria","val2"=>"Edo","val3"=>"Amaranth","val4"=>"V2","val5"=>"12.745","val6"=>"28.065","val7"=>"2.3","val8"=>"582.89","val9"=>"37.655","val10"=>""],["val0"=>"AMARANTH (Variety 2) collected in FIELD 1&2 of KWARA STATE","val1"=>"Nigeria","val2"=>"Kwara","val3"=>"Amaranth","val4"=>"V2","val5"=>"12.685","val6"=>"31.29","val7"=>"1.685","val8"=>"882.27","val9"=>"33.915","val10"=>"Okro is a vegetable used as a side dish for staples high in carbohydrates"],["val0"=>"AMARANTH (Variety 2) collected in FIELD 1 & 2 of OYO STATE","val1"=>"Nigeria","val2"=>"Oyo","val3"=>"Amaranth","val4"=>"V2","val5"=>"11.985","val6"=>"23.41","val7"=>"2.095","val8"=>"593.37","val9"=>"42.235","val10"=>"Okro is mostly combined with other vegetables and proteins to make it a balanced meal"],["val0"=>"OKRO (Short Variety) collected in FIELD 1& 2 of ASHANTI REGION","val1"=>"Ghana","val2"=>"Ashanti","val3"=>"Okro","val4"=>"Short","val5"=>"31.82","val6"=>"22.825","val7"=>"15.84","val8"=>"43.05","val9"=>"23.295","val10"=>"Okro has a rich source of vitmains A and C"],["val0"=>"OKRO (Short Variety) collected in FIELD 1& 2 of BRONG-AHAFO REGION","val1"=>"Ghana","val2"=>"Brong-Ahafo","val3"=>"Okro","val4"=>"Short","val5"=>"29.625","val6"=>"26.56","val7"=>"17.675","val8"=>"76.36","val9"=>"19.785","val10"=>"The high fibre and protein content  provides a good balance for its carbohydrate content and makes it beneficial for diabetic patients"]
        ];

        foreach($datas as $data){
                $summary = strip_tags($data["val10"]);
                $summary = filter_var($summary, FILTER_SANITIZE_STRING);
                $country = Country::where('name',$data["val1"])->first();
                $state = EcoRegion::where("name",$data["val2"])->first();
                $crop = Crop::where("name",$data["val3"])->first();
                $category = $data["val4"];

                DB::table('nutrition')
                    ->where('country_id',$country->id)
                    ->where('eco_region_id',$state->id)
                    ->where('crop_id',$crop->id)
                    ->where('category',$category)
                    ->update(['summary' => $summary]);
        }
    }

    private function loadLocationData()
    {
        $csvArray = array_map('str_getcsv', file(storage_path() . "/location.csv"));
        echo '<pre>';
        print_r($csvArray);
        echo '</pre>';
    }
}
