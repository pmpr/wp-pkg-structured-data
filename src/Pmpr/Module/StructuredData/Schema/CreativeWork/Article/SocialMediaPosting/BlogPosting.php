<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffc9a4b7bec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\StructuredData\Schema\CreativeWork\Comment\Comment; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Schema\Person; use WP_Comment; class BlogPosting extends SocialMediaPosting { public function __construct($post = null, $goiqeyeaqmicqiky = true) { if (!($post && $goiqeyeaqmicqiky)) { goto iwekmyyccgiyuecc; } $qscaoekmoooeuyqg = $this->sscegwueamckwmcy("\x63\141\156\137\163\x68\x6f\x77\137\141\x75\x74\x68\157\x72\x5f\x69\156\137\x70\x6f\x73\x74\137\163\x69\156\147\154\x65", false) ? new Person($post) : new Organization(); $kmmywmgcgwceeqii = ManipulatePost::weescwwgqgiyumyw($post, self::ocsomysosuqaimuc, [self::ymckmcsiymwqucoq => self::emgcgiseaoouacge]); $this->ywssmgkikwksokge($kmmywmgcgwceeqii)->oyecyiciiuqooyio($qscaoekmoooeuyqg)->mwiamauscyiwogsu(new ImageObject($post))->wieaiquucwakewgy($this->ueqesykkqeaeeoyg($post))->owykoqcycwauuioo(ManipulatePost::ymgsgecsiqeegseg($post)); iwekmyyccgiyuecc: parent::__construct($goiqeyeaqmicqiky); } private function ueqesykkqeaeeoyg($post) { $kcagcoeuiasswusq = []; $wueaugmymmoawukq = ManipulatePost::waoeigwigksoikgu($post, ["\x73\164\x61\164\165\163" => "\141\x70\x70\162\x6f\166\145", "\164\x79\160\145" => "\x63\x6f\x6d\155\x65\x6e\x74"]); if (!is_array($wueaugmymmoawukq)) { goto awoaooyoeoyeeqee; } foreach ($wueaugmymmoawukq as $uusmaiomayssaecw => $aqqmosqmsuueyaes) { if (!$aqqmosqmsuueyaes instanceof WP_Comment) { goto cwwmimggaaecmucw; } $kcagcoeuiasswusq[] = new Comment($aqqmosqmsuueyaes); cwwmimggaaecmucw: aomysykcgikegiau: } ikqqskkqqwmwssoo: awoaooyoeoyeeqee: return $kcagcoeuiasswusq; } }
