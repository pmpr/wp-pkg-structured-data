<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663336d97ac3c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\StructuredData\Interfaces\CommonInterface; use Pmpr\Module\StructuredData\MetaBox\MetaBox; use Pmpr\Module\StructuredData\Schema\CreativeWork\Course; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Setting\Setting; use Pmpr\Module\StructuredData\Setting\Tabs; use Pmpr\Module\StructuredData\Traits\CommonTrait; class StructuredData extends ComponentInitiator implements CommonInterface { use CommonTrait; protected array $sections = []; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\164\162\x75\x63\x74\165\x72\145\x64\40\104\x61\x74\141", PR__MDL__STRUCTURED_DATA); }, self::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto ousiuuwgwkiyikyq; } Setting::symcgieuakksimmu(); ousiuuwgwkiyikyq: $this->mgisqyswkkuceisu(["\x42\x72\141\x6e\x64", "\x57\x65\x62\x50\x61\147\145"]); if (!$this->sscegwueamckwmcy("\150\x61\x73\137\150\145\141\x64\x65\162", true)) { goto ogsaaqsaogcqiouy; } $this->kwkugmqouisgkqig("\127\120\x48\x65\x61\x64\145\x72"); ogsaaqsaogcqiouy: if (!$this->sscegwueamckwmcy("\150\x61\x73\137\x66\157\x6f\x74\145\x72", true)) { goto iwekmyyccgiyuecc; } $this->kwkugmqouisgkqig("\x57\x50\x46\157\x6f\x74\x65\x72"); iwekmyyccgiyuecc: Tabs::symcgieuakksimmu(); MetaBox::symcgieuakksimmu(); } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig($awcmekyiwwkeyisq) : self { if (in_array($awcmekyiwwkeyisq, $this->suuogccckocgseyg())) { goto ikqqskkqqwmwssoo; } $this->sections[] = $awcmekyiwwkeyisq; ikqqskkqqwmwssoo: return $this; } public function mgisqyswkkuceisu(array $mgiqqesweuqmsymo) : self { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { $this->kwkugmqouisgkqig($awcmekyiwwkeyisq); cwwmimggaaecmucw: } aomysykcgikegiau: return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x69\156\x69\x74"])->qcsmikeggeemccuu("\141\144\x64\x5f\x73\143\150\145\x6d\x61", [$this, "\x63\x71\x75\157\x6b\x6d\x65\155\145\x6b\x71\161\x79\x77\147\x69"])->qcsmikeggeemccuu("\x77\160\x5f\x66\x6f\x6f\164\x65\162", [$this, "\x63\161\x75\157\x6b\155\x65\155\145\153\161\161\171\167\147\x69"], 9999)->qcsmikeggeemccuu("\160\x6c\165\147\x69\x6e\163\x5f\154\x6f\x61\x64\145\144", [$this, "\151\x63\167\x63\x67\x6d\x63\157\151\155\161\x65\x69\147\x79\x65"])->qcsmikeggeemccuu("\x77\x70", [$this, "\x69\x6d\x79\161\167\x79\x79\141\x73\x75\147\161\x6b\x77\145\171"], 10, 1)->qcsmikeggeemccuu("\141\x64\x64\137\163\x63\x68\x65\x6d\141\137\x62\x79\137\164\171\x70\x65", [$this, "\x63\143\x73\x63\171\147\155\171\x6d\161\x73\143\x63\x6d\x73\x73"], 10, 2)->qcsmikeggeemccuu("\x77\160\137\150\x65\141\x64", [$this, "\x63\x67\161\141\x71\163\145\161\155\x71\143\165\x6b\163\157\x73"], 100)->qcsmikeggeemccuu("\164\145\155\x70\154\141\164\145\x5f\x72\x65\x64\x69\162\x65\x63\x74", [$this, "\147\167\x65\151\171\x6d\x6b\163\x69\155\x77\153\167\x75\x77\153"], 0)->qcsmikeggeemccuu("\x61\155\x70\137\160\157\x73\x74\137\x74\145\x6d\x70\154\x61\x74\x65\137\x68\x65\x61\144", [$this, "\143\165\x77\147\x6d\x63\x69\x67\157\167\151\x65\x61\x77\143\x71"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x61\x6d\x70\137\163\x63\x68\x65\x6d\141\x6f\162\147\x5f\155\x65\164\x61\144\141\x74\141", "\137\x5f\162\145\164\165\x72\156\137\x66\x61\154\163\x65", 100)->cecaguuoecmccuse("\x61\x6d\160\137\160\157\x73\x74\x5f\x74\145\155\x70\154\x61\164\145\137\155\x65\164\141\x64\x61\164\x61", "\x5f\x5f\162\x65\x74\x75\162\156\x5f\x66\141\154\163\145", 100)->cecaguuoecmccuse("\167\x70\x73\x65\157\x5f\x6a\x73\x6f\156\137\154\144\x5f\x6f\165\x74\x70\x75\x74", "\x5f\137\162\x65\164\x75\x72\156\x5f\x65\155\160\x74\171\137\141\162\162\141\171", 10, 1); parent::kgquecmsgcouyaya(); } public function init() { $this->waueiywackcqekak(); } public function ccscygmymqsccmss(?string $sqeykgyoooqysmca, ?array $ywmkwiwkosakssii = []) { $sqeykgyoooqysmca = ManipulateString::kwuyaykukcmaqggg($sqeykgyoooqysmca); $post = ManipulateArray::get($ywmkwiwkosakssii, "\160\x6f\163\x74"); $aaqqkgyougeiueyq = null; $migiiksoiymissge = null; if (!($post && $this->ocksiywmkyaqseou("\143\141\156\x5f\x61\x64\x64", true))) { goto gicyayswqyuoekcq; } switch ($sqeykgyoooqysmca) { case "\141\x67\147\162\x65\x67\x61\x74\145\137\162\x61\164\x69\x6e\147": $qqyuqswckkcomeak = ManipulateArray::get($ywmkwiwkosakssii, "\162\x61\x74\151\156\147", []); if (!ManipulateArray::get($qqyuqswckkcomeak, "\x63\x6f\165\156\164", 0)) { goto ykomgumacooyomsk; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $uwaosokcmcicugmi = (new Course(false))->usuqmwksoeaayaig(ManipulatePost::qcgakseyaikigqco($post))->gucwmccyimoagwcm(ManipulatePost::masoymaamekuykso($post))->oaqksmcekisgaqqw(new Organization()); $uwaosokcmcicugmi->iaqckqwoiseyqaku($uwaosokcmcicugmi->cyamgsaeyiqasmcc()->qmueseocuuekommo($migiiksoiymissge)); $aaqqkgyougeiueyq = (new AggregateRating($qqyuqswckkcomeak))->mwyyceoeyyyqsiou($uwaosokcmcicugmi); ykomgumacooyomsk: goto awoaooyoeoyeeqee; } ogqmesokykywseys: awoaooyoeoyeeqee: if (!$aaqqkgyougeiueyq) { goto kosaqwikueyksqmw; } if (!$migiiksoiymissge) { goto mqkmcysgoiaouiwm; } $aaqqkgyougeiueyq->iaqckqwoiseyqaku($aaqqkgyougeiueyq->cyamgsaeyiqasmcc()->qmueseocuuekommo($migiiksoiymissge)); mqkmcysgoiaouiwm: $this->yuaukuikuewwqumk($aaqqkgyougeiueyq); kosaqwikueyksqmw: gicyayswqyuoekcq: } public function icwcgmcoimqeigye() { if (!($wpSeo = $this->caokeucsksukesyo()->owgcciayoweymuws()->cmaecekuqkwmemms("\127\120\123\105\x4f\137\x56\105\x52\123\111\x4f\116"))) { goto cuumeogeomowqisc; } if (version_compare($wpSeo, "\x31\61\56\60", "\74")) { goto iikiiioqiyegyaak; } $this->cecaguuoecmccuse("\x77\x70\163\x65\x6f\x5f\163\x63\x68\145\x6d\141\137\x67\162\x61\x70\150\137\x70\151\x65\143\145\x73", [$this, "\161\145\161\x71\141\147\x67\x6d\x65\155\x63\x75\151\145\171\161"], 10, 2); goto uiosisocuwokwkie; iikiiioqiyegyaak: $this->cecaguuoecmccuse("\167\x70\163\x65\157\137\152\163\x6f\156\x5f\154\144\x5f\x6f\165\164\x70\165\164", [$this, "\x75\151\x63\x67\145\167\143\153\151\x61\x61\x61\x6f\x75\143\167"], 10, 2)->cecaguuoecmccuse("\x77\x70\163\145\157\x5f\152\163\x6f\156\137\x6c\144\x5f\x6f\165\x74\160\165\x74", [$this, "\x77\167\x75\x67\x73\x73\171\x71\161\x67\x61\163\x61\163\x61\x61"], 10, 2); uiosisocuwokwkie: cuumeogeomowqisc: } public function waueiywackcqekak() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $auqoykcmsiauccao = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\125\x52\x4c"); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\101\x63\x74\x69\x6f\156"); if (!($auqoykcmsiauccao && $aiamqeawckcsuaou === "\110\x53\x44\145\154\145\164\145\x4d\x61\162\153\x75\x70\x43\x61\x63\x68\145")) { goto gcckqucukawcasgk; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->cqgekgeqacmqquas("\x48\x75\x6e\x63\x68\x53\x63\x68\145\x6d\141\55\115\141\x72\153\165\x70\x2d" . md5($auqoykcmsiauccao)); header("\110\124\124\x50\57\x31\x2e\x30\40\x32\60\62\40\x41\143\x63\145\160\x74\145\x64", true, 202); exit; gcckqucukawcasgk: } public function cquokmemekqqywgi($qscuacuysiqsossk = false) { global $post; if (!($post && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\141\x6e\x5f\141\144\x64"), true))) { goto uaqackioaiqwcocy; } $myikwgwgeaymgysa = is_singular() ? ManipulatePost::igawqaomowicuayw("\137\110\165\x6e\143\x68\x53\x63\150\x65\x6d\141\104\x69\x73\x61\142\154\x65\x4d\141\162\x6b\x75\160", $post, true) : false; if ($myikwgwgeaymgysa) { goto mkwkkmkgiqiamacc; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post); $this->kwkugmqouisgkqig($sqeykgyoooqysmca); foreach ($this->suuogccckocgseyg() as $awcmekyiwwkeyisq) { $ycemioygiseosgqi = Factory::symcgieuakksimmu()->create($awcmekyiwwkeyisq); $ugugagoguiycqeys = ManipulatePost::igawqaomowicuayw("\x5f\110\x75\156\143\x68\x53\x63\x68\x65\x6d\x61\115\x61\x72\x6b\x75\160", $post); if ($ugugagoguiycqeys) { goto uaukmuiwskcemcsw; } if (!$ycemioygiseosgqi) { goto ugqwuugsweqgmywk; } if (is_array($ycemioygiseosgqi)) { goto cogywoqcqummsyus; } $this->yuaukuikuewwqumk($ycemioygiseosgqi, $qscuacuysiqsossk); goto gmwykkouysyaqwqm; cogywoqcqummsyus: foreach ($ycemioygiseosgqi as $cckmquusswcwquse) { $this->yuaukuikuewwqumk($cckmquusswcwquse, $qscuacuysiqsossk); eekcoeikaeaaeyii: } ocaguquugeamqckq: gmwykkouysyaqwqm: ugqwuugsweqgmywk: goto sockeswygwcskeuq; uaukmuiwskcemcsw: $this->yuaukuikuewwqumk($ugugagoguiycqeys, $qscuacuysiqsossk); sockeswygwcskeuq: csammceowmqwaamq: } qmkaeeomgkwggoyo: mkwkkmkgiqiamacc: uaqackioaiqwcocy: } public function imyqwyyasugqkwey($wp) { $iwceggomkwsaekmg = ManipulateServer::gmsemuiwicucmcok("\x41\143\x63\x65\160\164"); $saqmwwmqiwmkiwaa = ManipulateServer::get("\146\x6f\x72\155\x61\x74"); if (!($saqmwwmqiwmkiwaa === "\141\x70\160\154\151\143\x61\x74\151\157\x6e\57\x6c\x64\40\152\x73\x6f\x6e" || $iwceggomkwsaekmg === self::amgecouwceeaomww)) { goto cscusseysqygsoiy; } $this->cquokmemekqqywgi(true); exit; cscusseysqygsoiy: } public function cgqaqseqmqcuksos() { ManipulateHTML::awwqwouuoioauoaw("\154\151\156\153", ["\162\145\x6c" => "\x61\x6c\164\x65\x72\x6e\x61\x74\145", "\x74\171\x70\x65" => self::amgecouwceeaomww, "\150\162\x65\146" => DecoratorQuery::yqymaqmqiqmmmsoo([self::yqemseykugmsyeqa => self::amgecouwceeaomww], $this->ycqquoiyyuesegsy()), "\x74\x69\x74\154\145" => __("\x53\x74\x72\x75\x63\x74\x75\x72\145\x64\40\x44\x65\163\x63\162\x69\160\164\x6f\x72\40\104\157\143\165\x6d\x65\x6e\164\40\50\x4a\123\117\116\x2d\114\x44\40\146\x6f\162\x6d\x61\x74\x29", PR__MDL__STRUCTURED_DATA)]); } public function gweiymksimwkwuwk() { ob_start([$this, "\x6d\x63\161\x67\161\141\x6f\x6d\171\143\155\x65\157\x6d\x79\x79"]); } public function mcqgqaomycmeomyy($gqykqygqmiosgqmg) { $gqykqygqmiosgqmg = preg_replace("\x2f\x5b\x5c\163\134\156\135\52\x3c\x28\154\151\156\x6b\174\155\x65\x74\x61\51\50\134\x73\174\133\136\x3e\x5d\53\x5c\x73\51\151\164\x65\x6d\x70\x72\x6f\x70\75\133\x27\42\135\133\136\x27\42\x5d\52\x5b\x27\42\x5d\133\136\x3e\x5d\52\x3e\x5b\134\163\x5c\x6e\135\52\57\151\x6d\x53", '', $gqykqygqmiosgqmg); $fmwiggygsiguaaec = 1; uegouoiuyoqkcscg: if (!($fmwiggygsiguaaec <= 6)) { goto isgwkwacoyimiauk; } $gqykqygqmiosgqmg = preg_replace("\x2f\50\x3c\133\136\x3e\135\52\x29\134\163\x69\x74\x65\155\x28\x73\x63\157\x70\145\x7c\164\171\160\x65\x7c\160\162\157\160\51\50\x3d\x5b\x27\x22\x5d\x5b\x5e\47\42\x5d\x2a\133\47\x22\x5d\51\x3f\50\x5b\x5e\x3e\135\x2a\x3e\x29\x2f\x69\155\123", "\x24\61\x24\x34", $gqykqygqmiosgqmg); mggeqkcksyaymcsa: $fmwiggygsiguaaec++; goto uegouoiuyoqkcscg; isgwkwacoyimiauk: return $gqykqygqmiosgqmg; } public function uicgewckiaaaoucw($icwicymcioeyeyek, $mgkceomocowocqyo) { if (!in_array($mgkceomocowocqyo, ["\167\145\142\x73\x69\164\145", "\x63\x6f\x6d\160\x61\156\171", "\x70\x65\x72\163\157\156", "\142\162\x65\x61\144\143\x72\165\155\142"])) { goto cgyakcqgugqgkqiw; } return []; cgyakcqgugqgkqiw: return $icwicymcioeyeyek; } public function wwugssyqqgasasaa($icwicymcioeyeyek, $mgkceomocowocqyo) { if (!($mgkceomocowocqyo === "\142\162\145\141\x64\143\162\165\155\142")) { goto eeyyskqsmquyquqw; } return []; eeyyskqsmquyquqw: return $icwicymcioeyeyek; } public function qeqqaggmemcuieyq($aocwauauqiooioeq, $mgkceomocowocqyo) { $aocwauauqiooioeq = []; return $aocwauauqiooioeq; } public function cuwgmcigowieawcq($qqscaoyqikuyeoaw) { $this->cquokmemekqqywgi(); } }
