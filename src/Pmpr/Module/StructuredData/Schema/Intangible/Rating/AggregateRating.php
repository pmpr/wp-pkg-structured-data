<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654ad689b7d5b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\Rating; use Pmpr\Module\StructuredData\Schema\Thing; class AggregateRating extends Rating { protected ?int $reviewCount = 0; protected ?int $ratingCount = 0; protected ?Thing $itemReviewed = null; public function __construct($qqyuqswckkcomeak = null, $goiqeyeaqmicqiky = true) { if (!($qqyuqswckkcomeak && $goiqeyeaqmicqiky)) { goto msemumccgceyugmg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::qiyqwyiiwykeccmo, 0); $qkcymeiwcsikkkkk = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::yokmsocosssowgke, 0); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::yewgggaqoacewaai, 0); $this->aqgscesisoeawose((int) $gaeqamemwmwsyukm)->euaugmcwosukseuy((int) $qkcymeiwcsikkkkk)->squsoiakemiuoouq(round((float) $wiiqgewkwwkaukyo, 2)); msemumccgceyugmg: parent::__construct($goiqeyeaqmicqiky); } public function iiqgqiuayuwcueys() : ?Thing { return $this->itemReviewed; } public function mwyyceoeyyyqsiou(?Thing $ccqeayaegooouysc) { $this->itemReviewed = $ccqeayaegooouysc; return $this; } public function wemamaiqweumqsqo() : ?int { return $this->ratingCount; } public function aqgscesisoeawose(?int $yoecwgecueuaaueu) { $this->ratingCount = $yoecwgecueuaaueu; return $this; } public function mykgeucqkcaaakce() : ?int { return $this->reviewCount; } public function euaugmcwosukseuy(?int $geosgykscusuqmae) { $this->reviewCount = $geosgykscusuqmae; return $this; } }
