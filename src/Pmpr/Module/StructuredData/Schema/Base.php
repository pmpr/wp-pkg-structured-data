<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281b80c82e5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\StructuredData\DataType\Identifier; use Pmpr\Module\StructuredData\StructuredData; use WP_User; class Base implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = null; protected ?string $type = null; protected bool $isGlobal = false; public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function mwikyscisascoeea() : ?string { if ($this->id) { goto ssoucoucsgccekwe; } $this->iaqckqwoiseyqaku(); ssoucoucsgccekwe: return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : Base { $this->id = $aokagokqyuysuksm; return $this; } public function iaqckqwoiseyqaku(?Identifier $owqaeesoaygymmcy = null) { $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); $wamcomkuwysqgwgk = "\45\x31\44\163\x2f\45\62\44\x73\x2f"; $migiiksoiymissge = null; $ccamueccusigaaio = null; $momcykaoccoymeig = null; $sqeykgyoooqysmca = null; if (!$owqaeesoaygymmcy) { goto qkcyqocqqwmqgqww; } $migiiksoiymissge = $owqaeesoaygymmcy->ycqquoiyyuesegsy(); $ccamueccusigaaio = $owqaeesoaygymmcy->squsacgomqgkakaw(); $momcykaoccoymeig = $owqaeesoaygymmcy->mwikyscisascoeea(); $sqeykgyoooqysmca = $owqaeesoaygymmcy->gueasuouwqysmomu(); qkcyqocqqwmqgqww: if ($migiiksoiymissge) { goto miyqyeiwquwsacsm; } $migiiksoiymissge = $this->ycqquoiyyuesegsy($this->cykmceoageywgkqs(), $yyimiwcuegayoskq); miyqyeiwquwsacsm: $migiiksoiymissge = trailingslashit($migiiksoiymissge); if ($ccamueccusigaaio instanceof WP_User) { goto ywqgcegomwaiuquc; } if ($ccamueccusigaaio && is_string($ccamueccusigaaio)) { goto wmmggowmigekyoso; } goto eegqyykygiccaoeo; ywqgcegomwaiuquc: $migiiksoiymissge .= sprintf($wamcomkuwysqgwgk, "\165\163\x65\162", ManipulateUser::mwikyscisascoeea($ccamueccusigaaio, true)); goto eegqyykygiccaoeo; wmmggowmigekyoso: $migiiksoiymissge .= "{$ccamueccusigaaio}\57"; eegqyykygiccaoeo: if ($sqeykgyoooqysmca) { goto soqqemyioggmoakg; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); soqqemyioggmoakg: if (!$momcykaoccoymeig) { goto acaqummmoyiemqss; } $sqeykgyoooqysmca .= "\x2d{$momcykaoccoymeig}"; acaqummmoyiemqss: return $this->ggiaseqygioygumq("{$migiiksoiymissge}\43{$sqeykgyoooqysmca}"); } public function cyamgsaeyiqasmcc() { return new Identifier(); } public function gueasuouwqysmomu() { if ($this->type) { goto suswcqoyyqkkquuo; } $this->aseocggwwegcmqes(ManipulateString::mkwcwqkqeqkqyggc($this)); suswcqoyyqkkquuo: return $this->type; } public function mewggysoioyqegcw(string $oaukocmsckciqaok) { return $this->{$oaukocmsckciqaok}; } public function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie !== null)) { goto eeqesooyqagwawae; } $this->{$oaukocmsckciqaok} = $eqgoocgaqwqcimie; eeqesooyqagwawae: return $this; } public function kmykkqwsssqqmwmg($uomewyckeuqoqocu = [], $oomggoqacsumwqqu = false) { if ($uomewyckeuqoqocu) { goto oqugqwcyomiaaoqu; } $uomewyckeuqoqocu = $this->kikmasogcikysciu(); oqugqwcyomiaaoqu: array_filter($uomewyckeuqoqocu); $uomewyckeuqoqocu = ["\100\143\x6f\156\x74\x65\170\x74" => "\x68\x74\164\160\72\x2f\57\x73\x63\150\145\x6d\x61\56\157\x72\147\57"] + $uomewyckeuqoqocu; $qouiiuamucsomays = ''; if (!$uomewyckeuqoqocu) { goto hoeeyiowekaeemko; } if ($oomggoqacsumwqqu && strnatcmp(phpversion(), "\x35\56\x34\56\x30") >= 0) { goto foeeqckqsyockkak; } $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); goto iekumemscwieugqw; foeeqckqsyockkak: $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_PRETTY_PRINT | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); iekumemscwieugqw: hoeeyiowekaeemko: return $qouiiuamucsomays; } public function kikmasogcikysciu() { $sogksuscggsicmac = ["\x40\164\171\x70\145" => $this->gueasuouwqysmomu(), "\x40\x69\x64" => $this->mwikyscisascoeea()]; $aowmesqseaiqimyu = ["\x74\171\160\x65", "\151\144", "\x69\x73\x47\154\157\142\141\154"]; foreach (get_object_vars($this) as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (in_array($uusmaiomayssaecw, $aowmesqseaiqimyu)) { goto wiysogeqqwgioyka; } $uusmaiomayssaecw = $this->ougekwycicscwquc($uusmaiomayssaecw); if (is_array($eqgoocgaqwqcimie)) { goto suqkuqygkkgwyaie; } if ($eqgoocgaqwqcimie instanceof Thing) { goto gaomwagkcciesyqy; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto aegysmeecgcgayyw; gaomwagkcciesyqy: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->kikmasogcikysciu(); aegysmeecgcgayyw: goto soaccwqimeksgwiw; suqkuqygkkgwyaie: $eqiiwaeiswqmusqm = []; foreach ($eqgoocgaqwqcimie as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { $wgywewwaswowuooi = $this->ougekwycicscwquc($wgywewwaswowuooi); if ($mokouoooiwsmcmiu instanceof Thing) { goto uqqaiagaeqgqgaiy; } $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu; goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu->kikmasogcikysciu(); esuiysskoweawsue: uguigkcmukuouway: } qicwaskssogcokgm: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqiiwaeiswqmusqm; soaccwqimeksgwiw: wiysogeqqwgioyka: usquiuuyiyqaeyiu: } kymkucucyeoeikim: $sogksuscggsicmac = array_filter($sogksuscggsicmac); return $sogksuscggsicmac; } private function ougekwycicscwquc($eqgoocgaqwqcimie) { if (!(strpos($eqgoocgaqwqcimie, "\x5f") !== false)) { goto skkamseieeusycye; } $eqgoocgaqwqcimie = str_replace("\x5f", "\x2d", $eqgoocgaqwqcimie); skkamseieeusycye: return $eqgoocgaqwqcimie; } public function qcgakseyaikigqco($post = null) : ?string { return $this->sasweaqkmcaqweec(ManipulatePost::qcgakseyaikigqco($post)); } public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) { return StructuredData::symcgieuakksimmu()->ycqquoiyyuesegsy($sycgeiyakseiumqy, $yyimiwcuegayoskq); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : Base { $this->type = $sqeykgyoooqysmca; return $this; } public function weymkusmeageugsu($post = null) { return ManipulatePost::squyiyimquqicqke("\143", $post, false); } public function osswsoymmgisqmoy($post = null) { return ManipulatePost::oukqamgqowciwoum("\x63", $post, false); } public function owmuuoycwiskaeme($mkuwoiyskieqciqe) { $owmuuoycwiskaeme = ''; if (empty($mkuwoiyskieqciqe)) { goto cgiscsqwwgqqaeqi; } $immmocykksywgkqu = floor($mkuwoiyskieqciqe / 86400); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 86400; $kqqiasykicusiqaw = floor($mkuwoiyskieqciqe / 3600); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 3600; $scuieskcukagwiys = floor($mkuwoiyskieqciqe / 60); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 60; $owmuuoycwiskaeme = sprintf("\x50\x25\x64\x44\124\x25\x64\110\45\144\x4d\x25\x64\x53", $immmocykksywgkqu, $kqqiasykicusiqaw, $scuieskcukagwiys, $mkuwoiyskieqciqe); cgiscsqwwgqqaeqi: return $owmuuoycwiskaeme; } public function sasweaqkmcaqweec(?string $sociqikgoyemqaac) : ?string { if (mb_detect_encoding($sociqikgoyemqaac, "\165\x74\146\x2d\x38", true)) { goto syiqkaasoueowwui; } $sociqikgoyemqaac = utf8_encode($sociqikgoyemqaac); syiqkaasoueowwui: return $sociqikgoyemqaac; } }
