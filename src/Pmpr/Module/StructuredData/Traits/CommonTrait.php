<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654ad689b7d5b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Traits; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\StructuredData\Schema\Thing; trait CommonTrait { public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) : string { if ($sycgeiyakseiumqy) { goto kocqqoyymosmuksu; } if ($yyimiwcuegayoskq) { goto iuuuususuuuaieem; } $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); iuuuususuuuaieem: $migiiksoiymissge = $yyimiwcuegayoskq->ycqquoiyyuesegsy(); goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy(); uqokiksoqcwwqgio: return (string) $this->ocksiywmkyaqseou("\x6d\x61\162\x6b\x75\x70\x5f\x70\145\x72\x6d\x61\154\151\x6e\x6b", $migiiksoiymissge); } public function yuaukuikuewwqumk($aaqqkgyougeiueyq, $qscuacuysiqsossk = false) { if (!$aaqqkgyougeiueyq instanceof Thing) { goto qukocuwgakemmyga; } $sqeykgyoooqysmca = strtolower($aaqqkgyougeiueyq->gueasuouwqysmomu()); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(self::ocmiuacywmgycowk . "\142\145\146\157\x72\145\137\162\x65\x6e\x64\x65\162\x5f\163\x63\x68\x65\x6d\x61", $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(self::ocmiuacywmgycowk . "\x62\x65\x66\157\x72\145\137\162\x65\156\144\x65\162\x5f{$sqeykgyoooqysmca}\x5f\163\x63\150\145\155\141", $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $aaqqkgyougeiueyq->kmykkqwsssqqmwmg([], $this->kwauqaweosgcsimi()); qukocuwgakemmyga: if (!('' !== $aaqqkgyougeiueyq && !is_null($aaqqkgyougeiueyq))) { goto ieqesiiageaauiuw; } if ($qscuacuysiqsossk) { goto sioekkmekwygemyc; } ManipulateHTML::awwqwouuoioauoaw("\x73\x63\x72\151\160\x74", [self::squoamkioomemiyi => self::amgecouwceeaomww], true, "{$aaqqkgyougeiueyq}\xa"); goto yiowgigkkwsoqcci; sioekkmekwygemyc: $mymggmkssycumueo[] = ManipulateString::queuakuqucciemcc($aaqqkgyougeiueyq); yiowgigkkwsoqcci: ieqesiiageaauiuw: if (!($qscuacuysiqsossk && !empty($mymggmkssycumueo))) { goto iesekaeqeomeuaui; } if (!(1 === count($mymggmkssycumueo))) { goto gamqcwuwkikwqoay; } $mymggmkssycumueo = reset($mymggmkssycumueo); gamqcwuwkikwqoay: if (ManipulateSetting::esoowymaimwcuecq()) { goto mscyggqcesgqqksu; } $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES; goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT; oyeyomcgkmgymogq: print ManipulateString::wegeuqkaeuusoike($mymggmkssycumueo, $qiouiwasaauyaaue); iesekaeqeomeuaui: } }
