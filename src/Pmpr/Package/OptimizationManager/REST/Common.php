<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62213851740ad             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\REST; use Exception; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\OptimizationManager\Model\Domain; use Pmpr\Package\DomainManager\Model\Domain as OriginDomain; use WP_REST_Request; abstract class Common extends RESTController { public function __construct() { parent::__construct(); $this->namespace .= "\57\157\160\164\151\x6d\x69\172\x61\x74\x69\x6f\x6e\55\x6d\141\156\x61\x67\x65\x72"; } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq = null) { if ($gwgucoaaqcwwciqq) { goto cecuyayqoioasumi; } $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); cecuyayqoioasumi: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); $immcykkykeqgkgwg = Domain::symcgieuakksimmu(); $yqimoiiocigqiski = OriginDomain::symcgieuakksimmu(); try { if ($gwgucoaaqcwwciqq && strlen($esuksqieigiqcaie) === 32) { goto qgoiooayqmqqsiok; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x59\157\165\x72\x20\162\x65\161\x75\x65\x73\164\x20\x69\163\40\x6e\157\164\40\166\141\x6c\151\144", PR__PKG__OPTIMIZATION_MANAGER), 400); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $siykeiywomwwuoiw = $yqimoiiocigqiski->kqewyqqqiyiouaou([self::ciyoccqkiamemcmm => $gwgucoaaqcwwciqq, $yqimoiiocigqiski::igswcauwsgmeougs => $esuksqieigiqcaie, $immcykkykeqgkgwg->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$yqimoiiocigqiski->kumuygiiqswoyasy(true), $immcykkykeqgkgwg->myywwqkyiwawwquy($immcykkykeqgkgwg::qkmqmaeuyokqgemg)]]]); if ($siykeiywomwwuoiw) { goto qiaqsassksqiuyae; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\123\145\x72\166\x69\x63\x65\x20\165\156\x61\166\141\151\154\x61\142\154\x65\x20\x72\151\147\x68\x74\40\156\x6f\x77\56", PR__PKG__OPTIMIZATION_MANAGER)); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $sogksuscggsicmac = $yqimoiiocigqiski->awkaaqmauiuwwsca($siykeiywomwwuoiw, [self::NAME, self::ciyoccqkiamemcmm, $immcykkykeqgkgwg::qkmqmaeuyokqgemg, $immcykkykeqgkgwg->kumuygiiqswoyasy(true)]); qogqewiwmwiwskgm: qwigomakwmyiwkgo: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk($wgaoewqkwgomoaai->sagusgigmkeysock(), 500); } if ($sogksuscggsicmac) { goto myoicgcuugciueis; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x44\157\155\x61\x69\156\x20\x6e\157\x74\40\166\141\x6c\151\x64", PR__PKG__OPTIMIZATION_MANAGER), 400); myoicgcuugciueis: return $sogksuscggsicmac; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($this->wwawisckiqeueoua($aqmwamyiwgeeymqa)); } }
