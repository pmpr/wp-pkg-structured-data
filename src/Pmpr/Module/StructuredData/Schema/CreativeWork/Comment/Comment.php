<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281b80c82e5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Comment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWork; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\Rating; use Pmpr\Module\StructuredData\Schema\Person; class Comment extends CreativeWork { public function __construct($aqqmosqmsuueyaes = null, $goiqeyeaqmicqiky = true) { if (!($goiqeyeaqmicqiky && $aqqmosqmsuueyaes)) { goto qmuwoecuacmkwgem; } $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes); $this->oyecyiciiuqooyio(new Person($aqqmosqmsuueyaes))->ykumikyaccuwocyw((new Rating())->squsoiakemiuoouq($this->sscegwueamckwmcy("\x67\x65\x74\x5f\x72\141\164\x69\x6e\147\137\x61\166\x65\x72\141\x67\145", 0, ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes)))->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($aokagokqyuysuksm)))->ogoesumqawygewou(ManipulateComment::squyiyimquqicqke($aqqmosqmsuueyaes, "\x59\x2d\x6d\55\144\40\110\72\151\72\163", false))->gucwmccyimoagwcm(ManipulateComment::souwykwwmyygqyqi($aqqmosqmsuueyaes))->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($aqqmosqmsuueyaes)->ggiaseqygioygumq(ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes))); qmuwoecuacmkwgem: parent::__construct($goiqeyeaqmicqiky); } }
