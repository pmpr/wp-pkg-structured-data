<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66069afd91cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Module\StructuredData\Schema\Action\Action; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; class Thing extends Base { protected ?string $url = null; protected ?string $name = null; protected $mainEntityOfPage = null; protected ?ImageObject $image = null; protected ?string $identifier = null; protected ?string $description = null; protected ?string $alternateName = null; protected ?Action $potentialAction = null; protected array $sameAs = []; public function __construct($goiqeyeaqmicqiky = true) { } public function eiswegiqykyigwig() : ?string { return $this->identifier; } public function siiuycgkowwuyuka(?string $owqaeesoaygymmcy) { $this->identifier = $owqaeesoaygymmcy; return $this; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) { $this->name = $ymqmyyeuycgmigyo; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) { $this->description = $ukwokcuqauuosmoo; return $this; } public function suegwaomueaiseeo() : ?string { return $this->url; } public function eyqkogeiqauioamw(?string $eeamcawaiqocomwy) { $this->url = $eeamcawaiqocomwy; return $this; } public function gowiaikecoyuieic(string $scukiocsysuaqwoy) : Thing { $this->alternateName = $scukiocsysuaqwoy; return $this; } public function osmigsawqmkissoy() : string { return $this->alternateName; } public function uqeimkauiqaemkio(Action $yuqosykcmykcgayi) : Thing { $this->potentialAction = $yuqosykcmykcgayi; return $this; } public function cuiwyawscgeoeqas() : Action { return $this->potentialAction; } public function gqiiwauggswiogqy($smqakouyugyoecee) { $this->mainEntityOfPage = $smqakouyugyoecee; return $this; } public function ysmuiiiomckwykya() { return $this->mainEntityOfPage; } public function mwiamauscyiwogsu(ImageObject $mcqieaigyeeyaksm) : Thing { $this->image = $mcqieaigyeeyaksm; return $this; } public function qaeeusqkgwagwaqc() { return $this->image; } public function yuikseiqmmkcisas() : array { return $this->sameAs; } public function sceiycyikekgiqgg(?string $eeamcawaiqocomwy) : self { if (!$eeamcawaiqocomwy) { goto wmywuusgukmmaams; } $this->sameAs[] = $eeamcawaiqocomwy; wmywuusgukmmaams: return $this; } public function qeqwyeuussowiaac(?array $auwuoyyagaiegwae) : self { foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sceiycyikekgiqgg($eeamcawaiqocomwy); ooeausyowguqicuo: } gkyawqqcmigqgaiq: return $this; } }
