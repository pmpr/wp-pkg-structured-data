<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11c1e8366             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PropertyValue; use WP_Term; use WP_User; class ImageObject extends MediaObject { protected $caption = null; protected $exifData = null; protected ?ImageObject $thumbnail = null; public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto miyqyeiwquwsacsm; } if ($ccamueccusigaaio instanceof WP_User) { goto qqewoyookaskiuek; } if ($ccamueccusigaaio instanceof WP_Term) { goto mosqsmqimqgqoase; } if ($this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qecqsmowoqmwgagu($ccamueccusigaaio)) { goto yqykqysmiquwoasu; } $aiooqyausygaasqm = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->usieywkaugusugwm($ccamueccusigaaio); goto ayyweymyuuiauamo; yqykqysmiquwoasu: $aiooqyausygaasqm = $ccamueccusigaaio; ayyweymyuuiauamo: goto omugkkesagcyagmk; mosqsmqimqgqoase: $aiooqyausygaasqm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->usieywkaugusugwm($ccamueccusigaaio); omugkkesagcyagmk: if ($aiooqyausygaasqm) { goto kqksuugcgsyeoayy; } if ($ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($ccamueccusigaaio)) { goto iggyqogweyosuikc; } goto ygcsmkuycoagwyou; kqksuugcgsyeoayy: $this->omsioukysssesasy($aiooqyausygaasqm); goto ygcsmkuycoagwyou; iggyqogweyosuikc: $wwgucssaecqekuek = $this->caokeucsksukesyo()->gkksucgseqqemesc()->ccekeuwwqqoiwuwy($ewgwqamkygiqaawc, "\151\155\147"); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->omsioukysssesasy([$gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\163\x72\x63"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\x77\151\x64\x74\x68"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\x68\x65\x69\147\150\x74")]); ygcsmkuycoagwyou: goto ssoucoucsgccekwe; qqewoyookaskiuek: $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $oiegiwogmwmawkeo = 96; $ogomymegcoacqisg = $ewgmommeawggyaek->aeymcyaqkmmukomc($ewgmommeawggyaek->igawqaomowicuayw(Constants::akoagooquksouwka, $ccamueccusigaaio), [Constants::waguuiqqgsysuukq => $oiegiwogmwmawkeo]); $aiooqyausygaasqm = [$ogomymegcoacqisg, $oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; ssoucoucsgccekwe: if ($this->suegwaomueaiseeo()) { goto qkcyqocqqwmqgqww; } $aiooqyausygaasqm = $this->ocksiywmkyaqseou("\147\145\x74\x5f\151\155\141\147\145\137\x70\x6c\x61\143\145\150\x6f\x6c\144\145\x72\x5f\x69\x64", ''); $this->omsioukysssesasy($aiooqyausygaasqm); qkcyqocqqwmqgqww: $this->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($aiooqyausygaasqm)->qmueseocuuekommo($this->suegwaomueaiseeo())); miyqyeiwquwsacsm: parent::__construct($goiqeyeaqmicqiky); } protected function omsioukysssesasy($aiooqyausygaasqm) { $eeamcawaiqocomwy = ''; $qeswwaqqsyymqawg = 100; $cswemwoyesycwkuq = 100; if (!$aiooqyausygaasqm) { goto acaqummmoyiemqss; } if (!is_array($aiooqyausygaasqm)) { goto ywqgcegomwaiuquc; } $mcqieaigyeeyaksm = $aiooqyausygaasqm; goto wmmggowmigekyoso; ywqgcegomwaiuquc: $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($aiooqyausygaasqm, "\146\165\154\x6c"); if ($mcqieaigyeeyaksm) { goto eegqyykygiccaoeo; } $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($this->ocksiywmkyaqseou("\147\x65\164\x5f\x69\155\x61\x67\145\x5f\x70\154\141\143\145\x68\x6f\154\144\145\162\137\x69\144", 0), "\146\165\154\154"); eegqyykygiccaoeo: wmmggowmigekyoso: if (!($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm))) { goto soqqemyioggmoakg; } $eeamcawaiqocomwy = $mcqieaigyeeyaksm[0]; $qeswwaqqsyymqawg = $mcqieaigyeeyaksm[1]; $cswemwoyesycwkuq = $mcqieaigyeeyaksm[2]; soqqemyioggmoakg: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiooqyausygaasqm = $seumokooiykcomco->get($aiooqyausygaasqm); $this->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm)); acaqummmoyiemqss: $this->esyyaomkkeccysos($qeswwaqqsyymqawg)->seiwcgsykwcukmsc($cswemwoyesycwkuq)->eyqkogeiqauioamw($eeamcawaiqocomwy); } public function cqcsquysckuaewym() { return $this->caption; } public function skcuoiemgyoacmus($oeceqaaausgeosyu) { $this->caption = $oeceqaaausgeosyu; return $this; } public function symiamcqqasoqewe() { return $this->exifData; } public function qymmgmuqsieomcsm($umgeyqqiekcuqiky) { $this->exifData = $umgeyqqiekcuqiky; return $this; } public function smwweookeqkiiygs() : ImageObject { return $this->thumbnail; } public function oscqyoeskqmekcyo(ImageObject $uickqscmwgggsmgy) : ImageObject { $this->thumbnail = $uickqscmwgggsmgy; return $this; } }
