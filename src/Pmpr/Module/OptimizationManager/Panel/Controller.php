<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a15e6c88b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Panel; use Exception; use Pmpr\Module\DomainManager\Model\Domain as BaseDomain; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain; use Pmpr\Module\OptimizationManager\Model\Page; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x6f\160\164\151\155\x69\172\141\164\x69\x6f\x6e\x2d\x6d\x61\156\141\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\164\55\144\x6f\x6d\x61\x69\x6e\x73", [self::wwgusigoaksqmwsm => [$this, "\167\151\161\x75\155\x6b\x6d\161\153\161\x6f\x79\143\161\171\x69"]]); $this->register("\x2f\147\x65\x74\x2d\142\x75\144\147\145\x74\x73", [self::wwgusigoaksqmwsm => [$this, "\153\x77\x61\x75\157\x6b\x61\x6f\x61\163\157\x6d\163\151\x6d\153"]]); $this->register("\x2f\x67\145\x74\x2d\x70\141\147\145\163", [self::wwgusigoaksqmwsm => [$this, "\x69\x6b\145\147\151\x77\141\x67\x6d\161\x6d\x71\147\x79\165\x79"]]); } public function koomwsoyuucccawk($aqmwamyiwgeeymqa, $meywaqqsugaoeyys) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto wyuemgggaqogsmsq; } $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::weayyoewessosyko); if ($mokawwccycoiqeka) { goto oomguqikqokqwgku; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\155\x61\151\x6e\x20\156\x6f\164\40\x70\x61\x73\163\145\x64", PR__MDL__OPTIMIZATION_MANAGER), 400); goto samwkqgwouggsguc; oomguqikqokqwgku: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $meywaqqsugaoeyys, [$meywaqqsugaoeyys::qkmqmaeuyokqgemg => $mokawwccycoiqeka]); samwkqgwouggsguc: wyuemgggaqogsmsq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ikegiwagmqmqgyuy(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Page::symcgieuakksimmu()); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ousiuuwgwkiyikyq; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $ciokmysiiuwmigum = BaseDomain::symcgieuakksimmu(); try { $siykeiywomwwuoiw = $ueomouiqmosykioc->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $ycoeoaakqyskgykq, self::ucmueuwwcmocgmig => [Ownership::myiiuekcoeksaasm, Ownership::gogsqoacoimiocqg], $swgwkyqkakceqeia->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $swgwkyqkakceqeia->myywwqkyiwawwquy($swgwkyqkakceqeia::qkmqmaeuyokqgemg)]], $ciokmysiiuwmigum->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $ciokmysiiuwmigum->kumuygiiqswoyasy(true)]]]); if ($siykeiywomwwuoiw) { goto miweggwqeiaeweia; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\x72\x76\151\x63\x65\x20\165\156\141\x76\x61\x69\154\x61\142\x6c\x65\x20\162\x69\x67\x68\x74\x20\x6e\x6f\x77\56", PR__MDL__OPTIMIZATION_MANAGER), 503); goto kqqiegkuqagcqsya; miweggwqeiaeweia: $kugmgyukuauikwke = $ueomouiqmosykioc->iiqauwkoiguyeawu($siykeiywomwwuoiw); if ($kugmgyukuauikwke) { goto guykyqecgswcsmws; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\150\x65\x72\145\x20\151\163\40\x6e\x6f\x20\157\167\x6e\x65\x72\x73\150\151\x70\x20\x66\157\162\40\x79\157\165\x20\x6f\156\x20\141\x6e\171\x20\144\157\x6d\x61\151\x6e", PR__MDL__OPTIMIZATION_MANAGER)); goto kkumywowcoycymeo; guykyqecgswcsmws: $keccaugmemegoimu = $kugmgyukuauikwke; kkumywowcoycymeo: kqqiegkuqagcqsya: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } ousiuuwgwkiyikyq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kwauokaoasomsimk(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Budget::symcgieuakksimmu()); } }
