<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f76a412065             |
    |_______________________________________|
*/
 namespace Pmpr\Package\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\StructuredData\Schema\CreativeWork\Comment\Comment; use Pmpr\Package\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Package\StructuredData\Schema\Organization\Organization; use Pmpr\Package\StructuredData\Schema\Person; use WP_Comment; class BlogPosting extends SocialMediaPosting { public function __construct($post = null, $goiqeyeaqmicqiky = true) { if (!($post && $goiqeyeaqmicqiky)) { goto cgiscsqwwgqqaeqi; } $qscaoekmoooeuyqg = $this->sscegwueamckwmcy("\x63\x61\156\137\163\150\x6f\167\x5f\x61\165\x74\150\157\x72\x5f\151\156\x5f\x70\x6f\x73\164\137\163\x69\156\147\154\145", false) ? new Person($post) : new Organization(); $kmmywmgcgwceeqii = ManipulatePost::weescwwgqgiyumyw($post, "\160\157\x73\164\x5f\164\141\147", [self::ymckmcsiymwqucoq => "\x6e\x61\x6d\x65\x73"]); $this->ywssmgkikwksokge($kmmywmgcgwceeqii)->oyecyiciiuqooyio($qscaoekmoooeuyqg)->mwiamauscyiwogsu(new ImageObject($post))->wieaiquucwakewgy($this->ueqesykkqeaeeoyg($post))->owykoqcycwauuioo(ManipulatePost::ymgsgecsiqeegseg($post)); cgiscsqwwgqqaeqi: parent::__construct($goiqeyeaqmicqiky); } private function ueqesykkqeaeeoyg($post) { $kcagcoeuiasswusq = []; $wueaugmymmoawukq = ManipulatePost::waoeigwigksoikgu($post, ["\x73\x74\x61\164\x75\163" => "\x61\160\160\162\157\x76\145", "\164\x79\x70\x65" => "\143\157\155\155\145\x6e\x74"]); if (!is_array($wueaugmymmoawukq)) { goto cmegwsegsosyqcai; } foreach ($wueaugmymmoawukq as $uusmaiomayssaecw => $aqqmosqmsuueyaes) { if (!$aqqmosqmsuueyaes instanceof WP_Comment) { goto ewymsmkkiksgwysk; } $kcagcoeuiasswusq[] = new Comment($aqqmosqmsuueyaes); ewymsmkkiksgwysk: giaacoqqqsekcayy: } syiqkaasoueowwui: cmegwsegsosyqcai: return $kcagcoeuiasswusq; } }
