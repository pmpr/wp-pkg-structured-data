<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281b80c82e5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\Article; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting\BlogPosting; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; use Pmpr\Module\StructuredData\Schema\CreativeWork\Course; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowTo; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\FAQPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\ProfilePage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\SearchResultsPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\WebPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebSite; use Pmpr\Module\StructuredData\Schema\Custom\Category; use Pmpr\Module\StructuredData\Schema\Custom\Tag; use Pmpr\Module\StructuredData\Schema\Intangible\Brand; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPageElement\WPFooter; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPageElement\WPHeader; class Factory extends Container { public function create(string $sqeykgyoooqysmca) { switch ($sqeykgyoooqysmca) { case "\127\x50\110\x65\141\x64\145\x72": $egkyssmuqcwaciya = new WPHeader(); goto gsygwgsiawgmqiyi; case "\127\x50\106\157\157\x74\145\x72": $egkyssmuqcwaciya = new WPFooter(); goto gsygwgsiawgmqiyi; case "\x42\x72\141\x6e\x64": $egkyssmuqcwaciya = new Brand(); goto gsygwgsiawgmqiyi; case "\x57\145\142\x50\141\x67\145": $egkyssmuqcwaciya = new WebPage(); goto gsygwgsiawgmqiyi; default: $egkyssmuqcwaciya = $this->mwcosyumkyawcmyo(); goto gsygwgsiawgmqiyi; } qsgqwyqaqiowkmco: gsygwgsiawgmqiyi: return $egkyssmuqcwaciya; } public function mwcosyumkyawcmyo(PageInfo $yyimiwcuegayoskq = null, $goiqeyeaqmicqiky = true) { if ($yyimiwcuegayoskq) { goto yqagomygmeoecwey; } $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); yqagomygmeoecwey: if (!$yyimiwcuegayoskq instanceof PageInfo) { goto agkmiayuawacakau; } if ($yyimiwcuegayoskq->is("\x66\x72\x6f\156\x74\x5f\x70\141\x67\x65")) { goto oqousikwiiqagoyw; } if ($yyimiwcuegayoskq->is("\x68\157\155\145")) { goto zayqqeqgcwkekwws; } if ($yyimiwcuegayoskq->is("\x61\165\164\150\x6f\x72")) { goto aueaceeyommgkicu; } if ($yyimiwcuegayoskq->is("\x73\x65\141\162\x63\150")) { goto mysueeoswqgccmui; } if ($yyimiwcuegayoskq->is("\164\x61\x78\x6f\156\157\x6d\x79", "\x63\x61\x74\145\x67\x6f\x72\x79")) { goto egmayaiikwsskgmy; } if ($yyimiwcuegayoskq->is("\164\x61\170\x6f\156\157\155\171", "\164\141\x67")) { goto ucuoeymyqeokgsya; } if ($yyimiwcuegayoskq->is("\x73\151\x6e\147\154\x65", "\x70\157\x73\x74")) { goto yuuyikiacmmueosu; } if ($yyimiwcuegayoskq->is("\x70\141\147\145")) { goto sguskaeaaqcagqgc; } goto sqyokemumceysegy; oqousikwiiqagoyw: $egkyssmuqcwaciya = new WebSite($goiqeyeaqmicqiky); goto sqyokemumceysegy; zayqqeqgcwkekwws: $egkyssmuqcwaciya = new Blog($goiqeyeaqmicqiky); goto sqyokemumceysegy; aueaceeyommgkicu: $egkyssmuqcwaciya = new ProfilePage($goiqeyeaqmicqiky); goto sqyokemumceysegy; mysueeoswqgccmui: $egkyssmuqcwaciya = new SearchResultsPage($goiqeyeaqmicqiky); goto sqyokemumceysegy; egmayaiikwsskgmy: $egkyssmuqcwaciya = new Category($goiqeyeaqmicqiky); goto sqyokemumceysegy; ucuoeymyqeokgsya: $egkyssmuqcwaciya = new Tag($goiqeyeaqmicqiky); goto sqyokemumceysegy; yuuyikiacmmueosu: $oskcowmogussoikm = $egkyssmuqcwaciya = new BlogPosting(ManipulatePost::get(), $goiqeyeaqmicqiky); if (!$goiqeyeaqmicqiky) { goto aiccyaswigkaycqk; } $egkyssmuqcwaciya = [$egkyssmuqcwaciya]; $cqicmuuwowywymew = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\x74\x5f\146\141\161\137\x64\141\x74\x61"), [], ManipulatePost::get()); if (!$cqicmuuwowywymew) { goto qikaewekoecykeou; } $egkyssmuqcwaciya[] = new FAQPage($cqicmuuwowywymew); qikaewekoecykeou: $omauuckqmiemgegq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\x74\137\x68\157\167\137\x74\157\x5f\x64\141\164\141"), [], ManipulatePost::get()); if (!$omauuckqmiemgegq) { goto eucqomyqykgoiuge; } $egkyssmuqcwaciya[] = new HowTo($omauuckqmiemgegq); eucqomyqykgoiuge: $qqyuqswckkcomeak = $this->sscegwueamckwmcy("\x67\x65\x74\x5f\162\141\164\x69\156\147\x5f\x69\x6e\x66\157", []); if (!ManipulateArray::get($qqyuqswckkcomeak, "\143\157\165\156\x74", 0)) { goto usymasgsyqgsuocg; } $uwaosokcmcicugmi = (new Course(false))->usuqmwksoeaayaig($oskcowmogussoikm->aakmagwggmkoiiyu())->gucwmccyimoagwcm($oskcowmogussoikm->meqceykmywmqgoym())->oaqksmcekisgaqqw($oskcowmogussoikm->eicocscgqssuowue()); $egkyssmuqcwaciya[] = (new AggregateRating($qqyuqswckkcomeak))->mwyyceoeyyyqsiou($uwaosokcmcicugmi); usymasgsyqgsuocg: aiccyaswigkaycqk: goto sqyokemumceysegy; sguskaeaaqcagqgc: $egkyssmuqcwaciya = new Article($goiqeyeaqmicqiky); sqyokemumceysegy: agkmiayuawacakau: if (isset($egkyssmuqcwaciya)) { goto syuaummumssgwwee; } $egkyssmuqcwaciya = new Thing($goiqeyeaqmicqiky); syuaummumssgwwee: return $egkyssmuqcwaciya; } }
