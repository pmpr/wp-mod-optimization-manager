<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6221373b04e1a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\OptimizationManager\Setting; use Pmpr\Package\OptimizationManager\Model\Page; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Remote extends Common { public function __construct() { $this->rest_base = "\x72\x65\x6d\x6f\164\145"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\164\x2d\141\x70\160\x73", ["\143\141\x6c\x6c\x62\141\x63\x6b" => [$this, "\x6b\171\153\x77\x61\145\x6d\x6d\163\x73\x71\x73\147\165\x71\167"]]); $this->register("\57\143\x68\145\x63\x6b\x2d\x75\x72\x6c\x73", ["\155\145\x74\x68\x6f\144\x73" => self::qucyckeykeuuaquw, "\x63\141\154\154\x62\x61\143\x6b" => [$this, "\x61\143\x65\167\x65\x67\151\x61\171\167\x67\167\x73\x61\x71\x6b"]]); } public function acewegiaywgwsaqk(WP_REST_Request $aqmwamyiwgeeymqa) { $auwuoyyagaiegwae = array_filter((array) $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x75\162\x6c\163", [])); $migiiksoiymissge = ManipulateArray::get(array_values($auwuoyyagaiegwae), 0); $gwgucoaaqcwwciqq = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_HOST); $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq); if (!is_wp_error($keccaugmemegoimu) && $auwuoyyagaiegwae) { goto sqiciiuwmykocycc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\x71\165\151\162\x65\40\160\141\162\x61\x6d\x65\164\145\162\163\40\151\x73\x20\155\151\x73\163\x69\x6e\x67\x20\x6f\x72\x20\165\x6e\x63\157\162\162\x65\x63\164\145\144", PR__PKG__OPTIMIZATION_MANAGER), 400); goto eequksumcoogyoem; sqiciiuwmykocycc: $akyiigeggqowmqqq = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $ocqawgquwsqioses = $iuekmkswcsacoawq->ssiyoimagsskwsoi([$iuekmkswcsacoawq::auqoykcmsiauccao => $auwuoyyagaiegwae, $iuekmkswcsacoawq::ciywsqoeiymemsys => $iuekmkswcsacoawq::eqewsqmqmsiocaeg, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $akyiigeggqowmqqq], self::auqoykcmsiauccao); if ($ocqawgquwsqioses) { goto kiqogmwcgcamwiig; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\162\x20\162\x65\x71\x75\x65\x73\x74\x20\160\145\162\155\x61\154\151\156\x6b\x73\40\151\163\x20\156\x6f\x74\x20\x76\141\x6c\x69\144\56", PR__PKG__OPTIMIZATION_MANAGER)); goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\145\161\x75\x65\x73\164\x20\x69\x73\x20\166\x61\x6c\151\144", PR__PKG__OPTIMIZATION_MANAGER), ["\165\x72\x6c\x73" => $ocqawgquwsqioses]); iomcaiwewsawiamu: eequksumcoogyoem: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kykwaemmssqsguqw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ocokwuuquaokmasc; } $usmiuwiumyygmucg = Setting::kykwaemmssqsguqw(); if ($usmiuwiumyygmucg && is_array($usmiuwiumyygmucg)) { goto uukumskkeggaowck; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x61\x70\x70\163\40\151\x73\40\x65\155\160\x74\x79\54\x20\160\x6c\x65\x61\163\x65\x20\x63\x6f\156\x74\141\x63\164\x20\x77\151\164\x68\x20\141\144\x6d\151\156", PR__PKG__OPTIMIZATION_MANAGER)); goto cggowoquuiwqkyew; uukumskkeggaowck: $keccaugmemegoimu = $this->qasywwyamoesisyi('', $usmiuwiumyygmucg); cggowoquuiwqkyew: ocokwuuquaokmasc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
