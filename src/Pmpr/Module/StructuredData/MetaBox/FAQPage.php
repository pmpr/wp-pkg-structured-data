<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a24784d3dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\StructuredData\Setting\Setting; class FAQPage extends Tab { const sqgaeeagsegecugi = "\x66\141\x71\x5f\155\141\151\156\137\145\x6e\164\x69\164\x79"; const kuygeqomywoykkai = "\x71\x75\x65\x73\164\151\157\156"; const eeiymeksiysiuemu = "\x61\x6e\163\167\x65\x72"; public function ieoqyoeecukogies($post) { $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($post); if (!$oammesyieqmwuwyi) { goto gygwewcqsmwqismo; } echo $this->iuygowkemiiwqmiw("\146\141\161\x5f\154\x69\163\x74", [self::qgqyauaqwqmqseim => IconInterface::ucomcyskmkiqysee, self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::qescuiwgsyuikume => __("\x46\x41\x51", PR__MDL__STRUCTURED_DATA)]); gygwewcqsmwqismo: parent::ieoqyoeecukogies($post); } public function seyyiqmgwymyumoq($post = null) { $post = ManipulatePost::get($post); $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto uimeeckqksqeekqq; } $agkmksicugiqcucq = []; if (!$post) { goto uykousayyomcaeaa; } $kgcuukieymaqosmm = ManipulatePost::igawqaomowicuayw(self::sqgaeeagsegecugi, $post); if (!($kgcuukieymaqosmm && is_array($kgcuukieymaqosmm))) { goto ucqmumuygcywwqma; } foreach ($kgcuukieymaqosmm as $igqsaukqcqscimok) { $cgiaqqwoogcwuuwq = ManipulateArray::get($igqsaukqcqscimok, self::kuygeqomywoykkai); $wqckkkeieieqasqk = ManipulateArray::get($igqsaukqcqscimok, self::eeiymeksiysiuemu); if (!($cgiaqqwoogcwuuwq && $wqckkkeieieqasqk)) { goto ukqocwewouckikso; } $agkmksicugiqcucq[] = [$cgiaqqwoogcwuuwq, $wqckkkeieieqasqk]; ukqocwewouckikso: gommacygsykyussk: } uougwgeyiokewkkm: ucqmumuygcywwqma: uykousayyomcaeaa: $icwicymcioeyeyek = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, [self::kuygeqomywoykkai, self::eeiymeksiysiuemu]); $this->mgoekicaagiaeuki($icwicymcioeyeyek); uimeeckqksqeekqq: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $ywoucyskcquysiwc[] = Setting::sgsmqaoowiyocqaa("\146\141\161\137\x74\x61\x62", __("\x46\101\121", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::sqgaeeagsegecugi)->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::kuygeqomywoykkai, __("\121\x75\x65\163\x74\x69\157\x6e", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::eeiymeksiysiuemu, __("\101\156\163\x77\145\x72", PR__MDL__STRUCTURED_DATA))->qsecygiycssgacqs(5)->qigsyyqgewgskemg("\167\x2d\155\144\55\61\60\x30"))->usosgsaaimqcysyk())->saemoowcasogykak(IconInterface::qscwsaqyuyomumoc); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
