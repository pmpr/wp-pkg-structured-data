<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663336d97ac3c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PropertyValue; use WP_Term; use WP_User; class ImageObject extends MediaObject { protected $caption = null; protected $exifData = null; protected ?ImageObject $thumbnail = null; public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto yowsmsiyimmimemc; } if ($ccamueccusigaaio instanceof WP_User) { goto sciwggaeogcoesiu; } if ($ccamueccusigaaio instanceof WP_Term) { goto asmecuqiyyswueqe; } if ($this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qecqsmowoqmwgagu($ccamueccusigaaio)) { goto qwigomakwmyiwkgo; } $aiooqyausygaasqm = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->usieywkaugusugwm($ccamueccusigaaio); goto myoicgcuugciueis; qwigomakwmyiwkgo: $aiooqyausygaasqm = $ccamueccusigaaio; myoicgcuugciueis: goto csscmcacoikwsecs; asmecuqiyyswueqe: $aiooqyausygaasqm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->usieywkaugusugwm($ccamueccusigaaio); csscmcacoikwsecs: if ($aiooqyausygaasqm) { goto kuicqywysciceggs; } if ($ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($ccamueccusigaaio)) { goto mkwskuycuyguqqok; } goto cuykwgmswkskqkyi; kuicqywysciceggs: $this->omsioukysssesasy($aiooqyausygaasqm); goto cuykwgmswkskqkyi; mkwskuycuyguqqok: $wwgucssaecqekuek = $this->caokeucsksukesyo()->gkksucgseqqemesc()->ccekeuwwqqoiwuwy($ewgwqamkygiqaawc, "\x69\x6d\147"); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->omsioukysssesasy([$gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\x73\162\x63"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\167\151\x64\x74\x68"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\x68\x65\151\147\150\164")]); cuykwgmswkskqkyi: goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $oiegiwogmwmawkeo = 96; $ogomymegcoacqisg = $ewgmommeawggyaek->aeymcyaqkmmukomc($ewgmommeawggyaek->igawqaomowicuayw(self::akoagooquksouwka, $ccamueccusigaaio), [self::waguuiqqgsysuukq => $oiegiwogmwmawkeo]); $aiooqyausygaasqm = [$ogomymegcoacqisg, $oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; eqkauqciwewmgeoi: if ($this->suegwaomueaiseeo()) { goto kwagwqyusyiyoaqs; } $aiooqyausygaasqm = $this->ocksiywmkyaqseou("\147\x65\x74\x5f\x69\155\141\x67\145\137\x70\154\141\x63\x65\150\157\x6c\x64\145\x72\137\151\144", ''); $this->omsioukysssesasy($aiooqyausygaasqm); kwagwqyusyiyoaqs: $this->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($aiooqyausygaasqm)->qmueseocuuekommo($this->suegwaomueaiseeo())); yowsmsiyimmimemc: parent::__construct($goiqeyeaqmicqiky); } protected function omsioukysssesasy($aiooqyausygaasqm) { $eeamcawaiqocomwy = ''; $qeswwaqqsyymqawg = 100; $cswemwoyesycwkuq = 100; if (!$aiooqyausygaasqm) { goto uukumskkeggaowck; } if (!is_array($aiooqyausygaasqm)) { goto iomcaiwewsawiamu; } $mcqieaigyeeyaksm = $aiooqyausygaasqm; goto sqiciiuwmykocycc; iomcaiwewsawiamu: $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($aiooqyausygaasqm, "\x66\x75\154\x6c"); if ($mcqieaigyeeyaksm) { goto kiqogmwcgcamwiig; } $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($this->ocksiywmkyaqseou("\147\145\x74\x5f\x69\155\141\147\145\137\160\x6c\x61\143\x65\150\x6f\x6c\x64\145\162\137\x69\144", 0), "\x66\x75\x6c\x6c"); kiqogmwcgcamwiig: sqiciiuwmykocycc: if (!($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm))) { goto eequksumcoogyoem; } $eeamcawaiqocomwy = $mcqieaigyeeyaksm[0]; $qeswwaqqsyymqawg = $mcqieaigyeeyaksm[1]; $cswemwoyesycwkuq = $mcqieaigyeeyaksm[2]; eequksumcoogyoem: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiooqyausygaasqm = $seumokooiykcomco->get($aiooqyausygaasqm); $this->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm)); uukumskkeggaowck: $this->esyyaomkkeccysos($qeswwaqqsyymqawg)->seiwcgsykwcukmsc($cswemwoyesycwkuq)->eyqkogeiqauioamw($eeamcawaiqocomwy); } public function cqcsquysckuaewym() { return $this->caption; } public function skcuoiemgyoacmus($oeceqaaausgeosyu) { $this->caption = $oeceqaaausgeosyu; return $this; } public function symiamcqqasoqewe() { return $this->exifData; } public function qymmgmuqsieomcsm($umgeyqqiekcuqiky) { $this->exifData = $umgeyqqiekcuqiky; return $this; } public function smwweookeqkiiygs() : ImageObject { return $this->thumbnail; } public function oscqyoeskqmekcyo(ImageObject $uickqscmwgggsmgy) : ImageObject { $this->thumbnail = $uickqscmwgggsmgy; return $this; } }
