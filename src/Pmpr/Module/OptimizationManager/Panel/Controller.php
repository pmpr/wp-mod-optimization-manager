<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf3852180f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Panel; use Exception; use Pmpr\Module\DomainManager\Model\Domain as BaseDomain; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain; use Pmpr\Module\OptimizationManager\Model\Page; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x6f\160\164\151\155\x69\x7a\x61\x74\x69\x6f\156\55\155\141\156\x61\x67\145\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\145\x74\x2d\144\x6f\155\141\x69\x6e\163", [self::wwgusigoaksqmwsm => [$this, "\167\151\x71\165\x6d\x6b\x6d\x71\x6b\161\157\171\143\161\x79\x69"]]); $this->register("\57\x67\x65\x74\x2d\142\x75\144\x67\x65\x74\x73", [self::wwgusigoaksqmwsm => [$this, "\153\167\141\x75\157\x6b\141\157\141\x73\157\x6d\163\x69\155\153"]]); $this->register("\x2f\147\145\164\55\160\141\147\145\163", [self::wwgusigoaksqmwsm => [$this, "\x69\153\x65\147\x69\x77\x61\147\x6d\161\155\161\x67\171\x75\x79"]]); } public function koomwsoyuucccawk($aqmwamyiwgeeymqa, $meywaqqsugaoeyys) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto gygwewcqsmwqismo; } $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::weayyoewessosyko); if ($mokawwccycoiqeka) { goto mwysseaekcsiesmm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\x6d\x61\151\x6e\40\x6e\157\x74\40\160\x61\163\x73\x65\x64", PR__MDL__OPTIMIZATION_MANAGER), 400); goto amgsueumgaguceaa; mwysseaekcsiesmm: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $meywaqqsugaoeyys, [$meywaqqsugaoeyys::qkmqmaeuyokqgemg => $mokawwccycoiqeka]); amgsueumgaguceaa: gygwewcqsmwqismo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ikegiwagmqmqgyuy(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Page::symcgieuakksimmu()); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto uimeeckqksqeekqq; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $ciokmysiiuwmigum = BaseDomain::symcgieuakksimmu(); if (!($swgwkyqkakceqeia && $ueomouiqmosykioc && $ciokmysiiuwmigum)) { goto uykousayyomcaeaa; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); try { $siykeiywomwwuoiw = $ueomouiqmosykioc->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $ycoeoaakqyskgykq, self::ucmueuwwcmocgmig => [Ownership::myiiuekcoeksaasm, Ownership::gogsqoacoimiocqg], $swgwkyqkakceqeia->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $swgwkyqkakceqeia->myywwqkyiwawwquy($swgwkyqkakceqeia::qkmqmaeuyokqgemg)]], $ciokmysiiuwmigum->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $ciokmysiiuwmigum->kumuygiiqswoyasy(true)]]]); if ($siykeiywomwwuoiw) { goto ukqocwewouckikso; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x65\162\166\151\x63\145\40\x75\156\x61\166\141\151\x6c\141\142\154\x65\40\x72\x69\x67\150\x74\40\x6e\x6f\x77\x2e", PR__MDL__OPTIMIZATION_MANAGER), 503); goto ucqmumuygcywwqma; ukqocwewouckikso: $kugmgyukuauikwke = $ueomouiqmosykioc->iiqauwkoiguyeawu($siykeiywomwwuoiw); if ($kugmgyukuauikwke) { goto uougwgeyiokewkkm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\145\162\145\40\151\163\40\x6e\x6f\40\x6f\167\x6e\145\x72\163\150\x69\160\40\x66\x6f\162\x20\x79\x6f\165\x20\157\156\40\141\156\x79\40\144\157\155\141\x69\x6e", PR__MDL__OPTIMIZATION_MANAGER)); goto gommacygsykyussk; uougwgeyiokewkkm: $keccaugmemegoimu = $kugmgyukuauikwke; gommacygsykyussk: ucqmumuygcywwqma: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } uykousayyomcaeaa: uimeeckqksqeekqq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kwauokaoasomsimk(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Budget::symcgieuakksimmu()); } }
