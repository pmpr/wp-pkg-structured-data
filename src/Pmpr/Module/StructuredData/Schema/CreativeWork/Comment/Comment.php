<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663336d97ac3c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Comment; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWork; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\Rating; use Pmpr\Module\StructuredData\Schema\Person; class Comment extends CreativeWork { public function __construct($comment = null, $goiqeyeaqmicqiky = true) { if (!($goiqeyeaqmicqiky && $comment)) { goto cggowoquuiwqkyew; } $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $qqyuqswckkcomeak = $this->ocksiywmkyaqseou("\162\x61\x74\151\156\x67\137\x67\x65\x74\x5f\x76\x61\154\x75\x65", [], $kuowggqsyksiyygi->cikwsikikwcmqwou($comment)); $aokagokqyuysuksm = $kuowggqsyksiyygi->iooowgsqoyqseyuu($comment); $this->oyecyiciiuqooyio(new Person($comment))->ykumikyaccuwocyw((new Rating())->squsoiakemiuoouq($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qqyuqswckkcomeak, self::yewgggaqoacewaai, 0))->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($aokagokqyuysuksm)))->ogoesumqawygewou($kuowggqsyksiyygi->squyiyimquqicqke($comment, "\x59\x2d\155\55\x64\x20\110\72\x69\72\x73", false))->gucwmccyimoagwcm($this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ykgcioecqcwwkime($comment))->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($comment)->ggiaseqygioygumq($aokagokqyuysuksm)); cggowoquuiwqkyew: parent::__construct($goiqeyeaqmicqiky); } }
