<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11c1e8366             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\DataType; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToDirection; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToTip; class Instruction extends DataType { const sueuicugaemqiksg = "\164\151\x70"; const mwmmmioksayswakq = "\144\151\162\x65\x63\164\x69\157\156"; protected $text; protected $type = self::mwmmmioksayswakq; protected $position; public function __construct(string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { if (!(is_string($cmwygeyygwqaemaq) && $cmwygeyygwqaemaq)) { goto uukumskkeggaowck; } $cmwygeyygwqaemaq = ltrim($cmwygeyygwqaemaq); if (!($cmwygeyygwqaemaq[0] == "\x23")) { goto eequksumcoogyoem; } $cmwygeyygwqaemaq = rtrim(ltrim($cmwygeyygwqaemaq, "\x23")); $this->type = self::sueuicugaemqiksg; eequksumcoogyoem: $this->text = $cmwygeyygwqaemaq; uukumskkeggaowck: $this->position = $kuuiuigeacouwmaa; } public function ykgcioecqcwwkime() : ?string { return $this->text; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function yqyeyqikcyswcaig() : ?int { return $this->position; } public function ggwmgmiswsqmcywi() : bool { return $this->gueasuouwqysmomu() == self::sueuicugaemqiksg; } public function uqeoyqiwywwmsiew() { switch ($this->gueasuouwqysmomu()) { case self::sueuicugaemqiksg: $aaqqkgyougeiueyq = new HowToTip(); goto cggowoquuiwqkyew; case self::mwmmmioksayswakq: default: $aaqqkgyougeiueyq = new HowToDirection(); goto cggowoquuiwqkyew; } ocokwuuquaokmasc: cggowoquuiwqkyew: $aaqqkgyougeiueyq->kguaimkyumsuesem($this->ykgcioecqcwwkime())->weakiuagguweamee($this->yqyeyqikcyswcaig()); return $aaqqkgyougeiueyq; } }
