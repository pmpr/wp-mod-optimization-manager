<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a28b6000fb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\OptimizationManager\Setting; use Pmpr\Module\OptimizationManager\Model\Page; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Remote extends Common { public function __construct() { $this->rest_base = "\162\x65\155\x6f\164\x65"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\145\x74\55\x61\160\x70\x73", [self::wwgusigoaksqmwsm => [$this, "\153\171\x6b\167\141\x65\x6d\155\x73\163\161\x73\x67\x75\x71\167"]]); $this->register("\x2f\x63\x68\x65\x63\153\55\x75\x72\x6c\x73", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\141\143\x65\x77\x65\x67\x69\x61\171\x77\x67\167\x73\141\161\153"]]); } public function acewegiaywgwsaqk(WP_REST_Request $aqmwamyiwgeeymqa) { if ($auwuoyyagaiegwae = array_filter((array) $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::eimuuyqioyqiqwgq, []))) { goto goeoymmqqqeeoime; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\x75\x69\x72\x65\x20\x70\x61\162\x61\x6d\x65\164\x65\x72\163\x20\x69\x73\x20\x6d\x69\x73\163\151\x6e\147\40\x6f\162\x20\165\x6e\143\157\x72\162\145\143\164\145\144", PR__MDL__OPTIMIZATION_MANAGER), 400); goto eiawsoasmscmqswa; goeoymmqqqeeoime: $wkaekswggyskcymu = ManipulateArray::get($auwuoyyagaiegwae, array_rand($auwuoyyagaiegwae)); $gwgucoaaqcwwciqq = ManipulateFormat::gooqqcmsyseiaikc($wkaekswggyskcymu, PHP_URL_HOST); $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq); if (is_wp_error($keccaugmemegoimu)) { goto qmiwsequckckoaei; } $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if ($iuekmkswcsacoawq = Page::symcgieuakksimmu()) { goto kecwuwwcwokuksyq; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: $ocqawgquwsqioses = $iuekmkswcsacoawq->ssiyoimagsskwsoi([$iuekmkswcsacoawq::auqoykcmsiauccao => $auwuoyyagaiegwae, $iuekmkswcsacoawq::ciywsqoeiymemsys => $iuekmkswcsacoawq::eqewsqmqmsiocaeg, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg], self::auqoykcmsiauccao); if ($ocqawgquwsqioses) { goto mswsoaimesegiiic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\x75\x72\x20\x72\145\x71\165\145\x73\x74\x20\160\x65\x72\155\141\x6c\x69\156\x6b\x73\40\151\163\x20\x6e\x6f\x74\x20\x76\x61\x6c\x69\x64\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto egasokooagakisiy; mswsoaimesegiiic: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\x65\161\x75\x65\x73\164\x20\x69\x73\40\x76\141\x6c\x69\x64", PR__MDL__OPTIMIZATION_MANAGER), [self::eimuuyqioyqiqwgq => $ocqawgquwsqioses]); egasokooagakisiy: qgegkeomwscwwiuw: qmiwsequckckoaei: eiawsoasmscmqswa: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kykwaemmssqsguqw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ygkcacsyyckescqs; } if ($usmiuwiumyygmucg = Setting::kykwaemmssqsguqw()) { goto ickcmqoiosquugwe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\x70\160\x73\x20\151\x73\x20\x65\155\x70\164\171\x2c\40\160\x6c\x65\141\x73\x65\40\x63\x6f\x6e\x74\x61\143\x74\x20\167\151\x74\x68\40\141\x64\x6d\x69\156\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $keccaugmemegoimu = $this->qasywwyamoesisyi('', $usmiuwiumyygmucg); qmeoaqmsuseueqiy: ygkcacsyyckescqs: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
