<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66069afd91cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\DataType; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToDirection; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToTip; class Instruction extends DataType { const sueuicugaemqiksg = "\164\x69\x70"; const mwmmmioksayswakq = "\x64\x69\162\145\143\x74\x69\x6f\156"; protected $text; protected $type = self::mwmmmioksayswakq; protected $position; public function __construct(string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { if (!(is_string($cmwygeyygwqaemaq) && $cmwygeyygwqaemaq)) { goto kwagwqyusyiyoaqs; } $cmwygeyygwqaemaq = ltrim($cmwygeyygwqaemaq); if (!($cmwygeyygwqaemaq[0] == "\43")) { goto eqkauqciwewmgeoi; } $cmwygeyygwqaemaq = rtrim(ltrim($cmwygeyygwqaemaq, "\x23")); $this->type = self::sueuicugaemqiksg; eqkauqciwewmgeoi: $this->text = $cmwygeyygwqaemaq; kwagwqyusyiyoaqs: $this->position = $kuuiuigeacouwmaa; } public function ykgcioecqcwwkime() : ?string { return $this->text; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function yqyeyqikcyswcaig() : ?int { return $this->position; } public function ggwmgmiswsqmcywi() : bool { return $this->gueasuouwqysmomu() == self::sueuicugaemqiksg; } public function uqeoyqiwywwmsiew() { switch ($this->gueasuouwqysmomu()) { case self::sueuicugaemqiksg: $aaqqkgyougeiueyq = new HowToTip(); goto yowsmsiyimmimemc; case self::mwmmmioksayswakq: default: $aaqqkgyougeiueyq = new HowToDirection(); goto yowsmsiyimmimemc; } kiqogmwcgcamwiig: yowsmsiyimmimemc: $aaqqkgyougeiueyq->kguaimkyumsuesem($this->ykgcioecqcwwkime())->weakiuagguweamee($this->yqyeyqikcyswcaig()); return $aaqqkgyougeiueyq; } }
