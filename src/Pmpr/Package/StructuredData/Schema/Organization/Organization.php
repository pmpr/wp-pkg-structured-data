<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f76a412065             |
    |_______________________________________|
*/
 namespace Pmpr\Package\StructuredData\Schema\Organization; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Package\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Package\StructuredData\Schema\Intangible\Language; use Pmpr\Package\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Package\StructuredData\Schema\Intangible\StructuredValue\ContactPoint\ContactPoint; use Pmpr\Package\StructuredData\Schema\Intangible\StructuredValue\ContactPoint\PostalAddress; use Pmpr\Package\StructuredData\Schema\Place\Place; use Pmpr\Package\StructuredData\Schema\Thing; use Pmpr\Package\StructuredData\Setting\Setting; class Organization extends Thing { protected $logo = null; protected ?string $email = null; protected array $contactPoint = []; protected ?string $telephone = null; protected ?string $areaServed = null; protected ?PostalAddress $address = null; protected ?AggregateRating $aggregateRating = null; public function __construct($goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!$goiqeyeaqmicqiky) { goto asiqwuoswmigcaki; } $this->wqkwkoysgkaaewkc(Setting::gckekgcikugasqwu())->usuqmwksoeaayaig(get_bloginfo("\156\x61\155\x65"))->eyqkogeiqauioamw(ManipulateServer::gmigwwwmwemyaayy())->gucwmccyimoagwcm(get_bloginfo("\x64\x65\163\x63\x72\x69\160\x74\151\157\156"))->iaqckqwoiseyqaku(); asiqwuoswmigcaki: parent::__construct($goiqeyeaqmicqiky); } public function cseqaqmuaswgwuoo() : string { return $this->email; } public function oeogosayocuskygw(string $owaiikyuwwwmswgc) { $this->email = $owaiikyuwwwmswgc; return $this; } public function gckekgcikugasqwu() { return $this->logo; } public function wqkwkoysgkaaewkc($weowoqykiyuqcwam) { $this->logo = $weowoqykiyuqcwam; return $this; } public function wuoiwkucmsqqeeme() : string { return $this->telephone; } public function sweikoswukusgwwo(string $mseqekmwiimayuek) { $this->telephone = $mseqekmwiimayuek; return $this; } public function oeaeiissukoeowwe() : ?AggregateRating { return $this->aggregateRating; } public function nsqwikmawcqqyayk(?AggregateRating $gggmygsysokgmaiq) { $this->aggregateRating = $gggmygsysokgmaiq; return $this; } public function muuoiamcuueieaoi() { return $this->address; } public function cseiuayiuyawqqkw(PostalAddress $iuwcwgqmsmawoigq) { $this->address = $iuwcwgqmsmawoigq; return $this; } public function mcaeeegmmcmkeyik(ContactPoint $wywawoqwkeackwck) : Organization { $this->contactPoint[] = $wywawoqwkeackwck; return $this; } public function eeiacwskeoykcgmu() : array { return $this->contactPoint; } public function qmgkkgiuwuwiamyi($amcgcekcaqaiayuu) : Organization { $this->areaServed = $amcgcekcaqaiayuu; return $this; } public function gcygcoaugumeyaas() : string { return $this->areaServed; } }
