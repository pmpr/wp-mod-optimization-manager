<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a28b6000fb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Model; use DateTime; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\RelatedModel; use Pmpr\Module\OptimizationManager\Setting; use WC_Product_Variable; class Domain extends RelatedModel { const kqgagmgieeucmuik = "\x62\165\x64\147\x65\164\x73"; const msuggigqoeyawygq = "\145\170\x70\x69\162\x65\137\144\141\164\x65"; const skmoywacswaoygiw = "\x76\x61\x6c\x69\144\137" . self::kqgagmgieeucmuik; public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->eoaomaokwkwqyqiq(self::kqgagmgieeucmuik)->uwmyqckcyamwaiww(Budget::class)->ckgquisaimmgwuyu()->acokiqqgsmoqaeyu()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\102\x75\x64\x67\145\164\163", PR__MDL__OPTIMIZATION_MANAGER)), $this->eoaomaokwkwqyqiq(self::yusuiaeueqwieqqq)->uwmyqckcyamwaiww(Page::class)->ckgquisaimmgwuyu()->acokiqqgsmoqaeyu()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\120\x61\147\x65\x73", PR__MDL__OPTIMIZATION_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { $ywoucyskcquysiwc = $this->oewoakqisgcmuukc($ywoucyskcquysiwc, $mksyucucyswaukig); return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function oewoakqisgcmuukc($ywoucyskcquysiwc, $mksyucucyswaukig) : array { $mkecsaoyggsmwmau = $this->iscemaoqqckmkago(self::kqgagmgieeucmuik, $mksyucucyswaukig); if (!$mkecsaoyggsmwmau) { goto sockeswygwcskeuq; } $kswooiskywsugoyw = []; $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $umkkkaqkwugkemce = Setting::aqasygcsqysmmyke(); $product = ManipulateWoocommerce::aqasygcsqysmmyke($umkkkaqkwugkemce); if (!$product instanceof WC_Product_Variable) { goto gcckqucukawcasgk; } $oksqskmgoqiqciis = $product->get_children(); gcckqucukawcasgk: $oksqskmgoqiqciis[] = $umkkkaqkwugkemce; foreach ($mkecsaoyggsmwmau as $gqswsiquqaayuakq) { $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg(ManipulateArray::get($gqswsiquqaayuakq, self::awkcoioakcaougmq)); if (!$umwqusowiqmyseom) { goto ugqwuugsweqgmywk; } foreach ($umwqusowiqmyseom->get_items() as $cawesmkieccckaae) { if (!$cawesmkieccckaae) { goto gmwykkouysyaqwqm; } $swycooiesccmusas = ManipulateArray::get($cawesmkieccckaae->get_data(), "\160\x72\157\x64\165\x63\x74\137\151\x64"); if (!in_array($swycooiesccmusas, $oksqskmgoqiqciis, true)) { goto cogywoqcqummsyus; } $kswooiskywsugoyw[] = [self::cwewykcqimckqycw => $this->eciukqcoqmyacwow($umwqusowiqmyseom->get_date_paid(), ManipulateSetting::yoaaussmackoisuw()), self::uiiqiokqwmccomiu => ManipulateWoocommerce::mcgaskyiamgqmqgu($cawesmkieccckaae->get_total()), self::ciywsqoeiymemsys => ManipulateWoocommerce::wcqicmcuiewessgy($umwqusowiqmyseom), self::squoamkioomemiyi => "\x74\x68\x69\163\40\146\165\x6e\x63\x74\x69\157\156\141\x6c\151\164\x79\40\156\157\164\40\167\157\162\153\40\171\x65\164", self::yusuiaeueqwieqqq => $yoqasmiegcmcqaus->kamyqikiiuwqiiuw(self::ciyoccqkiamemcmm, ManipulateArray::get($gqswsiquqaayuakq, self::ciyoccqkiamemcmm), $gqswsiquqaayuakq), self::sqsuiimgeguwgmcg => $yoqasmiegcmcqaus->kamyqikiiuwqiiuw(self::sqsuiimgeguwgmcg, ManipulateArray::get($gqswsiquqaayuakq, self::sqsuiimgeguwgmcg), $gqswsiquqaayuakq), self::wcoquosyucmegcsq => $yoqasmiegcmcqaus->kamyqikiiuwqiiuw(self::wcoquosyucmegcsq, ManipulateArray::get($gqswsiquqaayuakq, self::wcoquosyucmegcsq), $gqswsiquqaayuakq), "\x74\162\x5f\141\164\164\162\x73" => ["\x64\x61\x74\x61\x2d\x68\x72\x65\x66" => $umwqusowiqmyseom->get_edit_order_url()]]; cogywoqcqummsyus: gmwykkouysyaqwqm: eekcoeikaeaaeyii: } ocaguquugeamqckq: ugqwuugsweqgmywk: csammceowmqwaamq: } qmkaeeomgkwggoyo: if (!$kswooiskywsugoyw) { goto uaukmuiwskcemcsw; } $ywoucyskcquysiwc["\x6f\162\144\x65\x72\163"] = [self::qgqyauaqwqmqseim => IconInterface::eskyoqmwkuiysymc, self::qescuiwgsyuikume => __("\117\x72\144\145\162\x73", PR__MDL__OPTIMIZATION_MANAGER), self::ssmskyqgcmeiayco => ManipulateHTML::kuumcaywkqiasisk($kswooiskywsugoyw, [self::cwewykcqimckqycw => __("\117\x72\144\x65\x72\x20\x44\141\164\x65\x74\151\155\x65", PR__MDL__OPTIMIZATION_MANAGER), self::uiiqiokqwmccomiu => __("\x4f\x72\x64\x65\x72\40\x54\x6f\x74\141\154", PR__MDL__OPTIMIZATION_MANAGER), self::ciywsqoeiymemsys => __("\x4f\162\x64\145\x72\40\x53\x74\141\x74\x75\163", PR__MDL__OPTIMIZATION_MANAGER), self::squoamkioomemiyi => __("\x4f\x72\x64\145\x72\x20\x54\171\x70\145", PR__MDL__OPTIMIZATION_MANAGER), self::yusuiaeueqwieqqq => __("\x4e\165\155\142\145\x72\x20\x6f\146\x20\x50\x61\x67\x65\163", PR__MDL__OPTIMIZATION_MANAGER), self::sqsuiimgeguwgmcg => __("\123\x74\141\x72\164\40\104\x61\164\145", PR__MDL__OPTIMIZATION_MANAGER), self::wcoquosyucmegcsq => __("\105\156\144\x20\x44\x61\164\x65", PR__MDL__OPTIMIZATION_MANAGER)], ["\143\154\141\x73\163" => "\x74\141\x62\154\x65\55\x73\164\x72\151\x70\x65\x64\40\x74\141\x62\x6c\145\55\142\x6f\162\144\145\x72\154\145\163\163"])]; uaukmuiwskcemcsw: sockeswygwcskeuq: return $ywoucyskcquysiwc; } public function giiqwciomksuiymm($yygmoeguaqyumuui = []) : array { $yygmoeguaqyumuui[self::skmoywacswaoygiw] = __("\x56\x61\x6c\151\144\40\102\x75\144\x67\x65\164\163", PR__MDL__OPTIMIZATION_MANAGER); $yygmoeguaqyumuui[self::msuggigqoeyawygq] = __("\x4c\x61\163\x74\40\x45\170\x70\151\162\145\x20\104\x61\x74\x65", PR__MDL__OPTIMIZATION_MANAGER); return parent::giiqwciomksuiymm($yygmoeguaqyumuui); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::msuggigqoeyawygq: $eeyksyiaqguqogak = Budget::symcgieuakksimmu()->oqomcmyuuakigusk([self::qkmqmaeuyokqgemg => $this->keeuqgyooycqoygw($mksyucucyswaukig), self::wcoquosyucmegcsq => [self::eugyciakiowwcuwm => "\76\x3d", self::ciyoccqkiamemcmm => new DateTime()]]); if (!$eeyksyiaqguqogak) { goto cscusseysqygsoiy; } $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu(self::wcoquosyucmegcsq, ManipulateArray::get($eeyksyiaqguqogak, self::wcoquosyucmegcsq)); cscusseysqygsoiy: goto mkwkkmkgiqiamacc; case self::skmoywacswaoygiw: $eqgoocgaqwqcimie = 0; $mkecsaoyggsmwmau = $this->iscemaoqqckmkago(self::kqgagmgieeucmuik, $mksyucucyswaukig); if (!$mkecsaoyggsmwmau) { goto cgyakcqgugqgkqiw; } foreach ($mkecsaoyggsmwmau as $gqswsiquqaayuakq) { $qmeuaeiseuacgiqc = ManipulateArray::get($gqswsiquqaayuakq, self::wcoquosyucmegcsq); $ggkaciewmeqmgckg = ManipulateArray::get($gqswsiquqaayuakq, self::sqsuiimgeguwgmcg); if (!ManipulateDatetime::awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc)) { goto uegouoiuyoqkcscg; } $eqgoocgaqwqcimie += ManipulateArray::get($gqswsiquqaayuakq, self::ciyoccqkiamemcmm, 0); uegouoiuyoqkcscg: mggeqkcksyaymcsa: } isgwkwacoyimiauk: cgyakcqgugqgkqiw: goto mkwkkmkgiqiamacc; } uaqackioaiqwcocy: mkwkkmkgiqiamacc: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
