<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d10c7a6cd74             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToStep; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToSupply; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToTool; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\MonetaryAmount; use Pmpr\Module\StructuredData\Setting\Setting; class HowTo extends CreativeWork { protected $step = null; protected $tool = null; protected $supply = null; protected $estimatedCost = null; protected ?string $totalTime = null; public function __construct($omauuckqmiemgegq = [], $goiqeyeaqmicqiky = true) { if (!$omauuckqmiemgegq) { goto csammceowmqwaamq; } $this->usuqmwksoeaayaig(ManipulateArray::get($omauuckqmiemgegq, self::qescuiwgsyuikume))->gucwmccyimoagwcm(ManipulateArray::get($omauuckqmiemgegq, self::eqkeooqcsscoggia)); if (!($mcqieaigyeeyaksm = ManipulateArray::get($omauuckqmiemgegq, self::mkousmkiawwousws))) { goto ousiuuwgwkiyikyq; } $this->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); ousiuuwgwkiyikyq: $imeywacwecgemcco = ManipulateArray::get($omauuckqmiemgegq, "\143\157\163\164"); $wwigiesyquoeawog = ManipulateArray::get($omauuckqmiemgegq, "\143\165\162\162\x65\156\x63\171"); if (!($wwigiesyquoeawog && $imeywacwecgemcco)) { goto ogsaaqsaogcqiouy; } $this->ecqgemyswuaswooa((new MonetaryAmount())->iygyugseyaqwywyg($imeywacwecgemcco)->yakomucykaieeiqq($wwigiesyquoeawog)); ogsaaqsaogcqiouy: $sieqmaaeyogyamwk = ManipulateArray::get($omauuckqmiemgegq, "\164\x6f\164\x61\154\124\151\x6d\x65"); if (!$sieqmaaeyogyamwk) { goto iwekmyyccgiyuecc; } $this->oguioqiqyaioiuca(strtoupper($sieqmaaeyogyamwk)); iwekmyyccgiyuecc: $yeiuicqomkekqeck = ManipulateArray::get($omauuckqmiemgegq, "\x73\x75\x70\160\x6c\151\x65\x73"); if (!is_array($yeiuicqomkekqeck)) { goto cwwmimggaaecmucw; } foreach ($yeiuicqomkekqeck as $momcykaoccoymeig => $egcsuueoacmkqwgy) { ++$momcykaoccoymeig; $this->gquekoigiqqkwiym((new HowToSupply())->usuqmwksoeaayaig($egcsuueoacmkqwgy->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); aomysykcgikegiau: } ikqqskkqqwmwssoo: cwwmimggaaecmucw: $qieqyuyaicouukye = ManipulateArray::get($omauuckqmiemgegq, "\x74\157\x6f\x6c\x73"); if (!is_array($qieqyuyaicouukye)) { goto ykomgumacooyomsk; } foreach ($qieqyuyaicouukye as $momcykaoccoymeig => $scsoukmiqiescesc) { ++$momcykaoccoymeig; $this->gocqaqicsamyaeqc((new HowToTool())->usuqmwksoeaayaig($scsoukmiqiescesc->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); ogqmesokykywseys: } awoaooyoeoyeeqee: ykomgumacooyomsk: $asuggasaseaacmqu = ManipulateArray::get($omauuckqmiemgegq, "\x73\x74\x65\160\x73"); if (!is_array($asuggasaseaacmqu)) { goto qmkaeeomgkwggoyo; } foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) { $meqocwsecsywiiqs = ManipulateArray::get($wyeyeaaekyoyimqu, self::qescuiwgsyuikume); $mieuwqqskaueukye = ManipulateArray::get($wyeyeaaekyoyimqu, "\151\156\x73\x74\162\x75\x63\164\151\157\x6e\163"); ++$momcykaoccoymeig; if (!($meqocwsecsywiiqs && is_array($mieuwqqskaueukye))) { goto gcckqucukawcasgk; } $omayqgkqwmuqgugu = new HowToStep(); $mcqieaigyeeyaksm = ManipulateArray::get($wyeyeaaekyoyimqu, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if ($mcqieaigyeeyaksm) { goto gicyayswqyuoekcq; } $mcqieaigyeeyaksm = Setting::ygyiswukccscuqmm(); gicyayswqyuoekcq: $omayqgkqwmuqgugu->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); foreach ($mieuwqqskaueukye as $wgywewwaswowuooi => $imiasuqakwyyyemq) { if (!$imiasuqakwyyyemq instanceof Instruction) { goto cuumeogeomowqisc; } ++$wgywewwaswowuooi; $omayqgkqwmuqgugu->asssmuisouigmaom($imiasuqakwyyyemq->uqeoyqiwywwmsiew()->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq("{$momcykaoccoymeig}\x2d{$wgywewwaswowuooi}"))); cuumeogeomowqisc: uiosisocuwokwkie: } iikiiioqiyegyaak: $omayqgkqwmuqgugu->eyqkogeiqauioamw("{$this->ycqquoiyyuesegsy()}\43\x73\164\x65\x70{$momcykaoccoymeig}")->usuqmwksoeaayaig($meqocwsecsywiiqs)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig); $this->mgqggiyywoageqmo($omayqgkqwmuqgugu); gcckqucukawcasgk: kosaqwikueyksqmw: } mqkmcysgoiaouiwm: qmkaeeomgkwggoyo: csammceowmqwaamq: parent::__construct($goiqeyeaqmicqiky); } public function scecwgoqwqwaamgq() { return $this->estimatedCost; } public function ecqgemyswuaswooa($cscgeyumqcskuukg) : self { $this->estimatedCost = $cscgeyumqcskuukg; return $this; } public function qscamskeayuqiosa() : ?string { return $this->totalTime; } public function oguioqiqyaioiuca(?string $sieqmaaeyogyamwk) : self { $this->totalTime = $sieqmaaeyogyamwk; return $this; } public function ocqmggygciqgeuek() { return $this->supply; } public function gquekoigiqqkwiym(?HowToSupply $egcsuueoacmkqwgy) { if (is_array($this->ocqmggygciqgeuek())) { goto ocaguquugeamqckq; } $this->supply = []; ocaguquugeamqckq: $this->supply[] = $egcsuueoacmkqwgy; return $this; } public function mgakwmcemaaqcogk($egcsuueoacmkqwgy) : self { $this->supply = $egcsuueoacmkqwgy; return $this; } public function asgqmkcukouykiie() { return $this->tool; } public function gocqaqicsamyaeqc(?HowToTool $scsoukmiqiescesc) { if (is_array($this->asgqmkcukouykiie())) { goto eekcoeikaeaaeyii; } $this->tool = []; eekcoeikaeaaeyii: $this->tool[] = $scsoukmiqiescesc; return $this; } public function ocqcogaoggsakqky($scsoukmiqiescesc) : self { $this->tool = $scsoukmiqiescesc; return $this; } public function ouwekiquyskqewwi() { return $this->step; } public function mgqggiyywoageqmo(?HowToStep $wyeyeaaekyoyimqu) { if (is_array($this->ouwekiquyskqewwi())) { goto cogywoqcqummsyus; } $this->step = []; cogywoqcqummsyus: $this->step[] = $wyeyeaaekyoyimqu; return $this; } public function ccwiuiwgkmiwamyk($wyeyeaaekyoyimqu) : self { $this->step = $wyeyeaaekyoyimqu; return $this; } }
