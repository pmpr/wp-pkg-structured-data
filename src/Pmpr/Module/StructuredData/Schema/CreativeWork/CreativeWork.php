<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240126d67fd7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Module\StructuredData\DataType\DateTime; use Pmpr\Module\StructuredData\Schema\CreativeWork\Comment\Comment; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\Rating; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Schema\Person; use Pmpr\Module\StructuredData\Schema\Thing; class CreativeWork extends Thing { protected $abstract; protected $author; protected $editor; protected $creator; protected $publisher; protected $award; protected $comment; protected $commentCount; protected $contentRating; protected $copyRightHolder; protected $copyRightYear; protected $headLine; protected $datePublished; protected $dateModified; protected $keywords; protected $about; protected $dateCreated; protected $mainEntity; protected $text; protected $provider; public function ssssceasyyuiyqmu(string $euqoowssgqscommq) : self { $this->abstract = $euqoowssgqscommq; return $this; } public function kwkigmoeyaecsicy() : string { return $this->abstract; } public function oyecyiciiuqooyio($qscaoekmoooeuyqg) { $this->author = $qscaoekmoooeuyqg; return $this; } public function mguqscccckuywsya() { return $this->author; } public function ggwuigemyukiywau(Person $igwkwmgowquoucyk) : self { $this->editor = $igwkwmgowquoucyk; return $this; } public function oiocaukeksiowcsw() : Person { return $this->editor; } public function yauugqacaaeucwoq($eiuuauwyukskgois) { $this->creator = $eiuuauwyukskgois; return $this; } public function auquqesgeuaeggcm() { return $this->creator; } public function qgkocaugaamsqscm($mcmgyiyokmuwqoyc) { $this->publisher = $mcmgyiyokmuwqoyc; return $this; } public function eicocscgqssuowue() { return $this->publisher; } public function yamcgqkwosywiwye(string $cmgumsammeamiwyk) : self { $this->award = $cmgumsammeamiwyk; return $this; } public function uksggyowccuweycc() : string { return $this->award; } public function wieaiquucwakewgy($aqqmosqmsuueyaes) : self { $this->comment = $aqqmosqmsuueyaes; return $this; } public function yagekskwwyqosqcs() : Comment { return $this->comment; } public function owykoqcycwauuioo(?string $gosysykeqkauccmw) : self { $this->commentCount = $gosysykeqkauccmw; return $this; } public function ymgsgecsiqeegseg() : ?string { return $this->commentCount; } public function ykumikyaccuwocyw($iokaoyagiqwsyoay) { $this->contentRating = $iokaoyagiqwsyoay; return $this; } public function kcmcqsmiececuwus() { return $this->contentRating; } public function qsccuwqacsasgyeu($seqmuusyqkmcyese) { $this->copyRightHolder = $seqmuusyqkmcyese; return $this; } public function yucoosycimyecuem() { return $this->copyRightHolder; } public function cqoookaiiygigkaq(int $yguosaqygkksqsoo) : self { $this->copyRightYear = $yguosaqygkksqsoo; return $this; } public function ciysqkcqgwgocogm() : int { return $this->copyRightYear; } public function kwcomqeygmcaegeo(string $eiomkygsqmgameee) : self { $this->headLine = $eiomkygsqmgameee; return $this; } public function qmokksywiiywwsow() : string { return $this->headLine; } public function kkqwmgsyqkqyqgge($gcuymekqeeqssoky) { $this->datePublished = $gcuymekqeeqssoky; return $this; } public function iwmqosaoogkuqemc() { return $this->datePublished; } public function akcmoueugeecmoqm($cuckcueoawmmqeua) { $this->dateModified = $cuckcueoawmmqeua; return $this; } public function keawisqwqcccggui() { return $this->dateModified; } public function ywssmgkikwksokge($ksmaqckuykgswwyg) : self { $this->keywords = $ksmaqckuykgswwyg; return $this; } public function cicesgyoamuuggao() : string { return $this->keywords; } public function keogoququwauweom($kgoqgmcsomguyeqq) { $this->about = $kgoqgmcsomguyeqq; return $this; } public function kowekgioaacecqus() { return $this->about; } public function ogoesumqawygewou($eyaouuceyyykggoc) { $this->dateCreated = $eyaouuceyyykggoc; return $this; } public function sgmwueyyuciacmye() { return $this->dateCreated; } public function kmwekywqqyigueyi() { return $this->mainEntity; } public function gcgaecmemumegiyq($kgcuukieymaqosmm) : self { $this->mainEntity = $kgcuukieymaqosmm; return $this; } public function ikueqmmawsgmgyiu(Thing $oikmcqwkmsyiicqs) : self { if (is_array($this->kmwekywqqyigueyi())) { goto mosqsmqimqgqoase; } $this->mainEntity = []; mosqsmqimqgqoase: $this->mainEntity[] = $oikmcqwkmsyiicqs; return $this; } public function ykgcioecqcwwkime() : ?string { return $this->text; } public function kguaimkyumsuesem(?string $cmwygeyygwqaemaq) : self { $this->text = $cmwygeyygwqaemaq; return $this; } public function kkcowsyecqiosuko() { return $this->provider; } public function oaqksmcekisgaqqw($iwigiqwyskocowwo) : self { $this->provider = $iwigiqwyskocowwo; return $this; } }
