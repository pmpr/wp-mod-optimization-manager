<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a46968840             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Model; use DateTime; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\DomainManager\Model\RelatedModel; use Pmpr\Module\OptimizationManager\Setting; use WC_Product_Variable; class Domain extends RelatedModel { const kqgagmgieeucmuik = "\x62\x75\144\x67\145\x74\163"; const msuggigqoeyawygq = "\145\x78\x70\x69\x72\x65\137\144\x61\164\145"; const skmoywacswaoygiw = "\x76\x61\x6c\x69\x64\x5f" . self::kqgagmgieeucmuik; public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ggiieomioscuigco(self::kqgagmgieeucmuik)->uwmyqckcyamwaiww(Budget::class)->ckgquisaimmgwuyu()->acokiqqgsmoqaeyu()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\102\165\x64\147\145\164\x73", PR__MDL__OPTIMIZATION_MANAGER)), $this->ggiieomioscuigco(self::yusuiaeueqwieqqq)->uwmyqckcyamwaiww(Page::class)->ckgquisaimmgwuyu()->acokiqqgsmoqaeyu()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\120\141\x67\145\163", PR__MDL__OPTIMIZATION_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { $ywoucyskcquysiwc = $this->oewoakqisgcmuukc($ywoucyskcquysiwc, $mksyucucyswaukig); return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function oewoakqisgcmuukc($ywoucyskcquysiwc, $mksyucucyswaukig) : array { $mkecsaoyggsmwmau = $this->iscemaoqqckmkago(self::kqgagmgieeucmuik, $mksyucucyswaukig); if (!$mkecsaoyggsmwmau) { goto kqksuugcgsyeoayy; } $kswooiskywsugoyw = []; $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $umkkkaqkwugkemce = Setting::aqasygcsqysmmyke(); $product = ManipulateWoocommerce::aqasygcsqysmmyke($umkkkaqkwugkemce); if (!$product instanceof WC_Product_Variable) { goto quwcqmyokicssyew; } $oksqskmgoqiqciis = $product->get_children(); quwcqmyokicssyew: $oksqskmgoqiqciis[] = $umkkkaqkwugkemce; foreach ($mkecsaoyggsmwmau as $gqswsiquqaayuakq) { $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg(ManipulateArray::get($gqswsiquqaayuakq, self::awkcoioakcaougmq)); if (!$umwqusowiqmyseom) { goto omugkkesagcyagmk; } foreach ($umwqusowiqmyseom->get_items() as $cawesmkieccckaae) { if (!$cawesmkieccckaae) { goto mosqsmqimqgqoase; } $swycooiesccmusas = ManipulateArray::get($cawesmkieccckaae->get_data(), "\x70\162\157\144\x75\x63\x74\x5f\151\x64"); if (!in_array($swycooiesccmusas, $oksqskmgoqiqciis)) { goto ayyweymyuuiauamo; } $kswooiskywsugoyw[] = [self::cwewykcqimckqycw => $this->eciukqcoqmyacwow($umwqusowiqmyseom->get_date_paid(), ManipulateSetting::yoaaussmackoisuw()), self::uiiqiokqwmccomiu => ManipulateWoocommerce::mcgaskyiamgqmqgu($cawesmkieccckaae->get_total()), self::ciywsqoeiymemsys => ManipulateWoocommerce::wcqicmcuiewessgy($umwqusowiqmyseom), self::squoamkioomemiyi => "\x74\x68\x69\163\x20\x66\x75\x6e\143\164\151\x6f\x6e\x61\154\151\164\x79\40\156\x6f\164\x20\167\x6f\162\153\x20\x79\145\164", self::yusuiaeueqwieqqq => $yoqasmiegcmcqaus->kamyqikiiuwqiiuw(self::ciyoccqkiamemcmm, ManipulateArray::get($gqswsiquqaayuakq, self::ciyoccqkiamemcmm), $gqswsiquqaayuakq), self::sqsuiimgeguwgmcg => $yoqasmiegcmcqaus->kamyqikiiuwqiiuw(self::sqsuiimgeguwgmcg, ManipulateArray::get($gqswsiquqaayuakq, self::sqsuiimgeguwgmcg), $gqswsiquqaayuakq), self::wcoquosyucmegcsq => $yoqasmiegcmcqaus->kamyqikiiuwqiiuw(self::wcoquosyucmegcsq, ManipulateArray::get($gqswsiquqaayuakq, self::wcoquosyucmegcsq), $gqswsiquqaayuakq), "\164\x72\x5f\x61\x74\x74\162\x73" => ["\144\x61\164\x61\x2d\150\162\145\x66" => $umwqusowiqmyseom->get_edit_order_url()]]; ayyweymyuuiauamo: mosqsmqimqgqoase: yqykqysmiquwoasu: } cmqucgoewuyieoyk: omugkkesagcyagmk: gimmuoqwckiseaik: } iqcogmsguwoikame: if (!$kswooiskywsugoyw) { goto ygcsmkuycoagwyou; } $ywoucyskcquysiwc["\x6f\162\x64\145\162\x73"] = [self::qgqyauaqwqmqseim => IconFontawesomeInterface::ayewuiieycgqomsw, self::qescuiwgsyuikume => __("\117\x72\x64\x65\x72\x73", PR__MDL__OPTIMIZATION_MANAGER), self::ssmskyqgcmeiayco => ManipulateHTML::kuumcaywkqiasisk($kswooiskywsugoyw, [self::cwewykcqimckqycw => __("\x4f\162\x64\x65\x72\40\x44\141\164\145\164\x69\155\145", PR__MDL__OPTIMIZATION_MANAGER), self::uiiqiokqwmccomiu => __("\x4f\x72\x64\145\162\40\x54\x6f\164\141\154", PR__MDL__OPTIMIZATION_MANAGER), self::ciywsqoeiymemsys => __("\117\x72\144\x65\162\40\x53\x74\141\164\165\x73", PR__MDL__OPTIMIZATION_MANAGER), self::squoamkioomemiyi => __("\x4f\162\144\x65\x72\40\x54\171\160\145", PR__MDL__OPTIMIZATION_MANAGER), self::yusuiaeueqwieqqq => __("\116\165\x6d\x62\x65\x72\40\157\146\x20\120\141\x67\145\163", PR__MDL__OPTIMIZATION_MANAGER), self::sqsuiimgeguwgmcg => __("\123\164\141\x72\164\x20\104\141\x74\x65", PR__MDL__OPTIMIZATION_MANAGER), self::wcoquosyucmegcsq => __("\105\x6e\x64\40\x44\141\164\145", PR__MDL__OPTIMIZATION_MANAGER)], ["\x63\154\x61\x73\163" => "\x74\141\x62\154\145\55\x73\164\x72\151\x70\145\x64\40\x74\x61\x62\154\145\55\x62\x6f\162\144\145\162\154\145\x73\163"])]; ygcsmkuycoagwyou: kqksuugcgsyeoayy: return $ywoucyskcquysiwc; } public function giiqwciomksuiymm($yygmoeguaqyumuui = []) : array { $yygmoeguaqyumuui[self::skmoywacswaoygiw] = __("\x56\141\x6c\151\x64\40\x42\165\144\147\x65\x74\163", PR__MDL__OPTIMIZATION_MANAGER); $yygmoeguaqyumuui[self::msuggigqoeyawygq] = __("\x4c\141\163\x74\x20\x45\x78\160\151\x72\x65\40\x44\x61\x74\145", PR__MDL__OPTIMIZATION_MANAGER); return parent::giiqwciomksuiymm($yygmoeguaqyumuui); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::msuggigqoeyawygq: $eeyksyiaqguqogak = Budget::symcgieuakksimmu()->oqomcmyuuakigusk([self::qkmqmaeuyokqgemg => $this->keeuqgyooycqoygw($mksyucucyswaukig), self::wcoquosyucmegcsq => [self::eugyciakiowwcuwm => "\76\x3d", self::ciyoccqkiamemcmm => new DateTime()]]); if (!$eeyksyiaqguqogak) { goto ssoucoucsgccekwe; } $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu(self::wcoquosyucmegcsq, ManipulateArray::get($eeyksyiaqguqogak, self::wcoquosyucmegcsq)); ssoucoucsgccekwe: goto iggyqogweyosuikc; case self::skmoywacswaoygiw: $eqgoocgaqwqcimie = 0; $mkecsaoyggsmwmau = $this->iscemaoqqckmkago(self::kqgagmgieeucmuik, $mksyucucyswaukig); if (!$mkecsaoyggsmwmau) { goto ywqgcegomwaiuquc; } foreach ($mkecsaoyggsmwmau as $gqswsiquqaayuakq) { $qmeuaeiseuacgiqc = ManipulateArray::get($gqswsiquqaayuakq, self::wcoquosyucmegcsq); $ggkaciewmeqmgckg = ManipulateArray::get($gqswsiquqaayuakq, self::sqsuiimgeguwgmcg); if (!ManipulateDatetime::awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc)) { goto eegqyykygiccaoeo; } $eqgoocgaqwqcimie += ManipulateArray::get($gqswsiquqaayuakq, self::ciyoccqkiamemcmm, 0); eegqyykygiccaoeo: miyqyeiwquwsacsm: } qkcyqocqqwmqgqww: ywqgcegomwaiuquc: goto iggyqogweyosuikc; } qqewoyookaskiuek: iggyqogweyosuikc: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }