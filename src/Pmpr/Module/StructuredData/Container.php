<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d10c7a6cd74             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\Setting\Setting; abstract class Container extends BaseClass { const amgecouwceeaomww = "\141\160\160\154\151\x63\141\x74\x69\157\156\x2f\x6c\x64\53\152\163\157\156"; const ocmiuacywmgycowk = "\163\164\162\165\143\x74\x75\x72\145\144\x5f\144\x61\164\141\x5f"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) : string { if ($sycgeiyakseiumqy) { goto eucqomyqykgoiuge; } if ($yyimiwcuegayoskq) { goto qikaewekoecykeou; } $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); qikaewekoecykeou: $migiiksoiymissge = $yyimiwcuegayoskq->ycqquoiyyuesegsy(); goto usymasgsyqgsuocg; eucqomyqykgoiuge: $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy(); usymasgsyqgsuocg: return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\x61\x72\x6b\x75\160\137\x70\x65\162\155\141\x6c\x69\156\153"), $migiiksoiymissge); } public function yuaukuikuewwqumk($aaqqkgyougeiueyq, $qscuacuysiqsossk = false) { if (!$aaqqkgyougeiueyq instanceof Thing) { goto aiccyaswigkaycqk; } $sqeykgyoooqysmca = strtolower($aaqqkgyougeiueyq->gueasuouwqysmomu()); $aaqqkgyougeiueyq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ocmiuacywmgycowk . "\142\x65\146\x6f\162\145\x5f\x72\145\x6e\x64\x65\x72\x5f\163\143\150\x65\155\141"), $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ocmiuacywmgycowk . "\x62\145\146\x6f\162\145\x5f\162\x65\156\x64\145\x72\x5f{$sqeykgyoooqysmca}\x5f\163\x63\150\145\x6d\x61"), $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $aaqqkgyougeiueyq->kmykkqwsssqqmwmg([], $this->kwauqaweosgcsimi()); aiccyaswigkaycqk: if (!('' !== $aaqqkgyougeiueyq && !is_null($aaqqkgyougeiueyq))) { goto zayqqeqgcwkekwws; } if ($qscuacuysiqsossk) { goto sqyokemumceysegy; } ManipulateHTML::awwqwouuoioauoaw("\163\x63\x72\x69\x70\164", [self::squoamkioomemiyi => self::amgecouwceeaomww], true, "{$aaqqkgyougeiueyq}\xa"); goto oqousikwiiqagoyw; sqyokemumceysegy: $mymggmkssycumueo[] = ManipulateString::queuakuqucciemcc($aaqqkgyougeiueyq); oqousikwiiqagoyw: zayqqeqgcwkekwws: if (!($qscuacuysiqsossk && !empty($mymggmkssycumueo))) { goto ucuoeymyqeokgsya; } if (!(1 === count($mymggmkssycumueo))) { goto aueaceeyommgkicu; } $mymggmkssycumueo = reset($mymggmkssycumueo); aueaceeyommgkicu: if (ManipulateSetting::esoowymaimwcuecq()) { goto mysueeoswqgccmui; } $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES; goto egmayaiikwsskgmy; mysueeoswqgccmui: $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT; egmayaiikwsskgmy: print ManipulateString::wegeuqkaeuusoike($mymggmkssycumueo, $qiouiwasaauyaaue); ucuoeymyqeokgsya: } }
