<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             655dff0e064a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\StructuredData\Interfaces\CommonInterface; use Pmpr\Module\StructuredData\MetaBox\MetaBox; use Pmpr\Module\StructuredData\Schema\CreativeWork\Course; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Setting\Setting; use Pmpr\Module\StructuredData\Setting\Tabs; use Pmpr\Module\StructuredData\Traits\CommonTrait; class StructuredData extends ComponentInitiator implements CommonInterface { use CommonTrait; protected array $sections = []; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\x74\162\x75\143\x74\165\162\145\144\x20\x44\141\164\x61", PR__MDL__STRUCTURED_DATA); }, self::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto eeqesooyqagwawae; } Setting::symcgieuakksimmu(); eeqesooyqagwawae: $this->mgisqyswkkuceisu(["\102\x72\x61\156\x64", "\x57\145\142\120\x61\x67\145"]); if (!$this->sscegwueamckwmcy("\150\x61\x73\137\x68\145\141\x64\145\162", true)) { goto oqugqwcyomiaaoqu; } $this->kwkugmqouisgkqig("\127\120\x48\x65\x61\144\x65\x72"); oqugqwcyomiaaoqu: if (!$this->sscegwueamckwmcy("\150\141\x73\x5f\146\157\x6f\164\145\162", true)) { goto foeeqckqsyockkak; } $this->kwkugmqouisgkqig("\127\120\106\x6f\157\164\145\162"); foeeqckqsyockkak: Tabs::symcgieuakksimmu(); MetaBox::symcgieuakksimmu(); } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig($awcmekyiwwkeyisq) : self { if (in_array($awcmekyiwwkeyisq, $this->suuogccckocgseyg())) { goto iekumemscwieugqw; } $this->sections[] = $awcmekyiwwkeyisq; iekumemscwieugqw: return $this; } public function mgisqyswkkuceisu(array $mgiqqesweuqmsymo) : self { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { $this->kwkugmqouisgkqig($awcmekyiwwkeyisq); kymkucucyeoeikim: } hoeeyiowekaeemko: return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\141\x64\x64\x5f\x73\x63\150\145\x6d\141", [$this, "\143\x71\165\x6f\153\155\x65\x6d\145\x6b\161\x71\x79\167\147\x69"])->qcsmikeggeemccuu("\x77\160\137\146\x6f\x6f\x74\x65\x72", [$this, "\x63\x71\165\x6f\153\x6d\x65\155\145\x6b\161\161\x79\167\147\x69"], 9999)->qcsmikeggeemccuu("\x70\154\x75\x67\x69\x6e\x73\137\154\x6f\x61\144\145\x64", [$this, "\x69\x63\x77\x63\x67\155\143\157\x69\155\161\145\x69\x67\171\145"])->qcsmikeggeemccuu("\x77\160", [$this, "\151\155\x79\x71\x77\x79\171\x61\163\165\x67\x71\153\x77\145\x79"], 10, 1)->qcsmikeggeemccuu("\x61\144\x64\x5f\163\x63\150\x65\155\141\137\x62\x79\137\164\171\x70\x65", [$this, "\x63\143\163\x63\171\x67\155\171\x6d\161\x73\143\x63\155\x73\x73"], 10, 2)->qcsmikeggeemccuu("\167\160\x5f\x68\x65\x61\144", [$this, "\143\147\x71\x61\x71\163\145\161\155\161\143\165\153\x73\157\163"], 100)->qcsmikeggeemccuu("\x74\x65\x6d\160\154\x61\x74\x65\x5f\x72\x65\x64\151\162\145\143\x74", [$this, "\x67\167\145\x69\171\155\153\x73\x69\155\x77\153\167\165\x77\153"], 0)->qcsmikeggeemccuu("\141\x6d\160\137\x70\157\x73\164\x5f\x74\145\155\160\x6c\141\164\145\137\150\x65\x61\144", [$this, "\x63\165\x77\147\155\143\151\147\x6f\167\x69\145\x61\167\x63\161"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\141\155\x70\137\x73\x63\x68\145\x6d\141\157\162\x67\x5f\155\145\164\141\144\141\164\x61", "\137\137\x72\145\x74\x75\x72\156\x5f\146\141\x6c\163\145", 100)->cecaguuoecmccuse("\x61\x6d\160\137\160\x6f\163\x74\x5f\x74\x65\x6d\160\x6c\x61\164\x65\137\155\145\x74\x61\144\x61\x74\x61", "\x5f\137\162\145\164\x75\x72\x6e\137\146\141\154\163\145", 100)->cecaguuoecmccuse("\x77\x70\x73\145\157\137\152\x73\157\156\137\154\x64\137\157\165\x74\x70\x75\x74", "\137\x5f\162\145\x74\x75\x72\156\137\x65\x6d\160\x74\x79\137\x61\162\x72\141\171", 10, 1); parent::kgquecmsgcouyaya(); } public function init() { $this->waueiywackcqekak(); } public function ccscygmymqsccmss(?string $sqeykgyoooqysmca, ?array $ywmkwiwkosakssii = []) { $sqeykgyoooqysmca = ManipulateString::kwuyaykukcmaqggg($sqeykgyoooqysmca); $post = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x6f\x73\x74"); $aaqqkgyougeiueyq = null; $migiiksoiymissge = null; if (!($post && $this->ocksiywmkyaqseou("\143\x61\x6e\x5f\x61\144\x64", true))) { goto gaomwagkcciesyqy; } switch ($sqeykgyoooqysmca) { case "\141\147\x67\x72\145\x67\141\x74\x65\137\x72\141\x74\x69\x6e\147": $qqyuqswckkcomeak = ManipulateArray::get($ywmkwiwkosakssii, "\x72\141\164\151\156\x67", []); if (!ManipulateArray::get($qqyuqswckkcomeak, "\143\157\165\156\x74", 0)) { goto uguigkcmukuouway; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $uwaosokcmcicugmi = (new Course(false))->usuqmwksoeaayaig(ManipulatePost::qcgakseyaikigqco($post))->gucwmccyimoagwcm(ManipulatePost::masoymaamekuykso($post))->oaqksmcekisgaqqw(new Organization()); $uwaosokcmcicugmi->iaqckqwoiseyqaku($uwaosokcmcicugmi->cyamgsaeyiqasmcc()->qmueseocuuekommo($migiiksoiymissge)); $aaqqkgyougeiueyq = (new AggregateRating($qqyuqswckkcomeak))->mwyyceoeyyyqsiou($uwaosokcmcicugmi); uguigkcmukuouway: goto usquiuuyiyqaeyiu; } qicwaskssogcokgm: usquiuuyiyqaeyiu: if (!$aaqqkgyougeiueyq) { goto esuiysskoweawsue; } if (!$migiiksoiymissge) { goto uqqaiagaeqgqgaiy; } $aaqqkgyougeiueyq->iaqckqwoiseyqaku($aaqqkgyougeiueyq->cyamgsaeyiqasmcc()->qmueseocuuekommo($migiiksoiymissge)); uqqaiagaeqgqgaiy: $this->yuaukuikuewwqumk($aaqqkgyougeiueyq); esuiysskoweawsue: gaomwagkcciesyqy: } public function icwcgmcoimqeigye() { if (!($wpSeo = $this->caokeucsksukesyo()->owgcciayoweymuws()->cmaecekuqkwmemms("\127\120\123\x45\x4f\137\x56\105\122\123\x49\117\x4e"))) { goto soaccwqimeksgwiw; } if (version_compare($wpSeo, "\61\61\x2e\60", "\x3c")) { goto aegysmeecgcgayyw; } $this->cecaguuoecmccuse("\x77\x70\163\145\x6f\137\163\x63\x68\x65\x6d\x61\x5f\147\x72\x61\x70\150\x5f\x70\151\145\x63\145\163", [$this, "\161\145\161\161\x61\147\x67\155\145\155\143\165\x69\145\x79\161"], 10, 2); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $this->cecaguuoecmccuse("\167\160\x73\145\157\x5f\152\163\157\x6e\137\x6c\x64\x5f\157\x75\164\x70\165\x74", [$this, "\x75\x69\143\x67\145\167\143\x6b\151\141\141\141\x6f\165\143\x77"], 10, 2)->cecaguuoecmccuse("\167\160\x73\145\157\x5f\152\163\x6f\156\x5f\154\x64\x5f\157\x75\x74\x70\165\x74", [$this, "\167\x77\165\147\x73\x73\x79\x71\161\147\x61\x73\141\x73\x61\x61"], 10, 2); suqkuqygkkgwyaie: soaccwqimeksgwiw: } public function waueiywackcqekak() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $auqoykcmsiauccao = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\125\x52\x4c"); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\101\x63\164\x69\157\156"); if (!($auqoykcmsiauccao && $aiamqeawckcsuaou === "\110\123\104\x65\x6c\145\164\145\115\x61\x72\153\165\160\103\x61\x63\150\x65")) { goto wiysogeqqwgioyka; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->cqgekgeqacmqquas("\110\165\156\x63\x68\123\143\150\145\155\141\x2d\x4d\141\162\x6b\165\x70\x2d" . md5($auqoykcmsiauccao)); header("\110\124\x54\120\57\61\56\60\x20\62\60\x32\x20\x41\143\x63\x65\160\164\145\x64", true, 202); exit; wiysogeqqwgioyka: } public function cquokmemekqqywgi($qscuacuysiqsossk = false) { global $post; if (!($post && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x61\x6e\x5f\x61\x64\144"), true))) { goto scisgsyemmsekgos; } $myikwgwgeaymgysa = is_singular() ? ManipulatePost::igawqaomowicuayw("\137\x48\165\156\143\x68\123\143\150\x65\155\141\x44\151\x73\x61\142\154\145\x4d\141\x72\x6b\x75\160", $post, true) : false; if ($myikwgwgeaymgysa) { goto egyyiccaeeiooaua; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post); $this->kwkugmqouisgkqig($sqeykgyoooqysmca); foreach ($this->suuogccckocgseyg() as $awcmekyiwwkeyisq) { $ycemioygiseosgqi = Factory::symcgieuakksimmu()->create($awcmekyiwwkeyisq); $ugugagoguiycqeys = ManipulatePost::igawqaomowicuayw("\137\x48\x75\156\143\150\x53\x63\150\145\155\x61\115\141\162\153\x75\x70", $post); if ($ugugagoguiycqeys) { goto gkyawqqcmigqgaiq; } if (!$ycemioygiseosgqi) { goto wmywuusgukmmaams; } if (is_array($ycemioygiseosgqi)) { goto ewymsmkkiksgwysk; } $this->yuaukuikuewwqumk($ycemioygiseosgqi, $qscuacuysiqsossk); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: foreach ($ycemioygiseosgqi as $cckmquusswcwquse) { $this->yuaukuikuewwqumk($cckmquusswcwquse, $qscuacuysiqsossk); giaacoqqqsekcayy: } syiqkaasoueowwui: cmegwsegsosyqcai: wmywuusgukmmaams: goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $this->yuaukuikuewwqumk($ugugagoguiycqeys, $qscuacuysiqsossk); ooeausyowguqicuo: cgiscsqwwgqqaeqi: } skkamseieeusycye: egyyiccaeeiooaua: scisgsyemmsekgos: } public function imyqwyyasugqkwey($wp) { $iwceggomkwsaekmg = ManipulateServer::gmsemuiwicucmcok("\x41\143\143\x65\160\164"); $saqmwwmqiwmkiwaa = ManipulateServer::get("\146\x6f\162\155\x61\164"); if (!($saqmwwmqiwmkiwaa === "\x61\160\x70\154\151\x63\141\x74\151\x6f\156\x2f\154\144\x20\x6a\163\x6f\156" || $iwceggomkwsaekmg === self::amgecouwceeaomww)) { goto cewmoqyysgsmuiya; } $this->cquokmemekqqywgi(true); exit; cewmoqyysgsmuiya: } public function cgqaqseqmqcuksos() { ManipulateHTML::awwqwouuoioauoaw("\x6c\151\156\153", ["\x72\145\154" => "\141\x6c\164\145\x72\156\x61\x74\145", "\x74\171\x70\x65" => self::amgecouwceeaomww, "\150\162\145\x66" => DecoratorQuery::yqymaqmqiqmmmsoo([self::yqemseykugmsyeqa => self::amgecouwceeaomww], $this->ycqquoiyyuesegsy()), "\x74\x69\x74\x6c\145" => __("\x53\x74\x72\x75\x63\164\x75\162\x65\x64\x20\x44\145\x73\x63\x72\x69\x70\x74\157\x72\40\104\157\143\165\155\x65\156\164\x20\x28\112\123\117\116\55\114\104\x20\x66\157\x72\155\141\x74\51", PR__MDL__STRUCTURED_DATA)]); } public function gweiymksimwkwuwk() { ob_start([$this, "\155\143\161\147\x71\141\157\x6d\171\x63\155\x65\157\x6d\x79\x79"]); } public function mcqgqaomycmeomyy($gqykqygqmiosgqmg) { $gqykqygqmiosgqmg = preg_replace("\57\133\x5c\163\x5c\x6e\x5d\x2a\x3c\50\x6c\x69\x6e\153\174\155\x65\x74\141\51\x28\134\x73\174\133\x5e\x3e\135\x2b\x5c\x73\x29\x69\x74\145\x6d\160\x72\x6f\160\75\x5b\47\42\x5d\133\x5e\x27\42\135\x2a\x5b\x27\42\135\x5b\x5e\x3e\135\x2a\76\133\x5c\x73\134\x6e\135\52\x2f\151\x6d\x53", '', $gqykqygqmiosgqmg); $fmwiggygsiguaaec = 1; ugqaaewwmkocwwgy: if (!($fmwiggygsiguaaec <= 6)) { goto igooksugieceoege; } $gqykqygqmiosgqmg = preg_replace("\x2f\x28\74\133\x5e\76\x5d\52\x29\x5c\163\151\164\x65\x6d\50\x73\143\157\x70\x65\x7c\164\x79\x70\x65\x7c\160\162\x6f\x70\51\50\75\133\x27\x22\x5d\133\x5e\47\42\x5d\52\133\x27\42\x5d\51\77\x28\x5b\136\x3e\135\52\76\51\57\x69\x6d\123", "\x24\x31\44\x34", $gqykqygqmiosgqmg); omqiayeucoioqoao: $fmwiggygsiguaaec++; goto ugqaaewwmkocwwgy; igooksugieceoege: return $gqykqygqmiosgqmg; } public function uicgewckiaaaoucw($icwicymcioeyeyek, $mgkceomocowocqyo) { if (!in_array($mgkceomocowocqyo, ["\167\145\142\163\x69\x74\x65", "\x63\x6f\x6d\160\141\x6e\171", "\160\x65\162\163\157\156", "\x62\x72\x65\x61\144\x63\162\165\155\x62"])) { goto wgewmqieuamsoayy; } return []; wgewmqieuamsoayy: return $icwicymcioeyeyek; } public function wwugssyqqgasasaa($icwicymcioeyeyek, $mgkceomocowocqyo) { if (!($mgkceomocowocqyo === "\x62\x72\145\141\x64\143\x72\x75\155\142")) { goto kqgcyoscsusgoaqi; } return []; kqgcyoscsusgoaqi: return $icwicymcioeyeyek; } public function qeqqaggmemcuieyq($aocwauauqiooioeq, $mgkceomocowocqyo) { $aocwauauqiooioeq = []; return $aocwauauqiooioeq; } public function cuwgmcigowieawcq($qqscaoyqikuyeoaw) { $this->cquokmemekqqywgi(); } }
