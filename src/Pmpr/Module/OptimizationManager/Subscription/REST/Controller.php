<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b6188ad9125             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\REST; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\REST\Controller as BaseClass; use Pmpr\Module\OptimizationManager\Subscription\Interfaces\CommonInterface; use Pmpr\Module\OptimizationManager\Subscription\Model\Extra; use Pmpr\Module\OptimizationManager\Subscription\Model\Plan; use Pmpr\Module\OptimizationManager\Subscription\Model\Subscription; use Pmpr\Module\OptimizationManager\Setting as ModuleSetting; use Pmpr\Module\OptimizationManager\Subscription\Setting; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass implements CommonInterface { use EngineTrait; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->rest_base .= "\x2f\163\165\142\x73\143\x72\151\160\164\151\x6f\x6e"; } public function register_routes() { $this->register("\x2f\141\x64\144\x2d\x75\x73\141\x67\145", [self::wwgusigoaksqmwsm => [$this, "\x73\x6b\x6b\171\x73\x75\161\161\x79\163\x69\157\x69\x77\x77\147"], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::okeuagwgwkmiokac => [self::myikkigscysoykgy => [self::squoamkioomemiyi => "\141\162\x72\141\171", self::eqkeooqcsscoggia => __("\101\143\x74\x69\157\x6e\x73", PR__MDL__OPTIMIZATION_MANAGER)], self::sygmkaeayiiouiwm => [self::squoamkioomemiyi => "\x73\164\x72\x69\156\147", self::eqkeooqcsscoggia => __("\124\157\153\x65\x6e", PR__MDL__OPTIMIZATION_MANAGER)]]]); $this->register("\57\x63\150\141\x6e\147\x65\x2d\165\x73\141\x67\145\163\x2d\x73\x74\141\x74\x75\x73", [self::wwgusigoaksqmwsm => [$this, "\141\x6d\x6b\157\x75\155\x71\x69\x77\171\141\x71\165\153\157\x77"], self::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, self::okeuagwgwkmiokac => [self::oquukmukaoqegcuk => [self::squoamkioomemiyi => "\x61\162\x72\141\171", self::eqkeooqcsscoggia => __("\x55\x73\x61\147\145\40\111\104\x73", PR__MDL__OPTIMIZATION_MANAGER)], self::ciywsqoeiymemsys => [self::squoamkioomemiyi => "\163\164\162\x69\156\x67", self::eqkeooqcsscoggia => __("\125\x73\141\x67\x65\163\40\x53\x74\x61\164\x75\163", PR__MDL__OPTIMIZATION_MANAGER)], self::sygmkaeayiiouiwm => [self::squoamkioomemiyi => "\x73\164\162\151\156\x67", self::eqkeooqcsscoggia => __("\x54\157\153\145\x6e", PR__MDL__OPTIMIZATION_MANAGER)]]]); $this->register("\57\147\145\164\55\160\165\162\143\x68\141\163\x65\163", [self::wwgusigoaksqmwsm => [$this, "\153\x73\x79\x6b\x75\x61\171\x6b\171\x79\x75\161\147\163\x77\x67"], self::okeuagwgwkmiokac => [self::imywcsggckkcywgk => [self::squoamkioomemiyi => "\x73\x74\x72\151\x6e\x67", self::eqkeooqcsscoggia => __("\x50\141\147\x65", PR__MDL__OPTIMIZATION_MANAGER)]]]); $this->register("\x2f\x67\145\x74\55\x64\141\x74\x61", [self::wwgusigoaksqmwsm => [$this, "\163\145\x79\171\x69\x71\x6d\x67\167\x79\155\x79\x75\155\x6f\x71"]]); } public function seyyiqmgwymyumoq(WP_REST_Request $aqmwamyiwgeeymqa) { $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); if ($esuksqieigiqcaie && $gwgucoaaqcwwciqq) { goto gaomwagkcciesyqy; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto aegysmeecgcgayyw; gaomwagkcciesyqy: $qwgquweoiskugckg = 0; $umwagewoweuckiso = null; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq); $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto usquiuuyiyqaeyiu; } $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $umwagewoweuckiso = $goqqimcssiyagkwy->mkiwiwaquqeegaik($wqykqusigegasqeg); if ($umwagewoweuckiso) { goto kymkucucyeoeikim; } $ekucuuaawysekyca = $goqqimcssiyagkwy->mkiwiwaquqeegaik($wqykqusigegasqeg, false); if ($ekucuuaawysekyca) { goto hoeeyiowekaeemko; } $akqaumomesyiuiym = $goqqimcssiyagkwy->imicysmecoiycoqc(); if (!$akqaumomesyiuiym) { goto iekumemscwieugqw; } $sogksuscggsicmac = $goqqimcssiyagkwy->subscribe($wqykqusigegasqeg, $akqaumomesyiuiym); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto foeeqckqsyockkak; } $umwagewoweuckiso = $sogksuscggsicmac; foeeqckqsyockkak: iekumemscwieugqw: hoeeyiowekaeemko: kymkucucyeoeikim: $qwgquweoiskugckg = $goqqimcssiyagkwy->xowkiecqumsskiec($wqykqusigegasqeg); usquiuuyiyqaeyiu: $omouioamescuegke = Plan::symcgieuakksimmu(); $omcwcsgeyeyoiwyi = Subscription::symcgieuakksimmu(); $kekgkgqeyesmkywu = $omouioamescuegke->qyaiiayimwmuomey(false); $qsqwqsymmqeoqwcu = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kekgkgqeyesmkywu as $gesuaewsacmmwoeo) { $ogaeiucyqmowuqms = $omouioamescuegke->keeuqgyooycqoygw($gesuaewsacmmwoeo); $oggygmyiawqsyecy = $goqqimcssiyagkwy->gsmygqkksqsseoeq(); if (!$oggygmyiawqsyecy) { goto uqqaiagaeqgqgaiy; } $oggygmyiawqsyecy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\164\145\160" => 4, "\164\141\162\147\x65\164" => $ogaeiucyqmowuqms, "\x6f\162\144\145\162\137\164\171\x70\145" => "\x70\154\141\x6e"], $oggygmyiawqsyecy); uqqaiagaeqgqgaiy: $gmcgeogogyqsgawk = $omouioamescuegke->asosocqswygacyyk($gesuaewsacmmwoeo); $gmcgeogogyqsgawk = [$omouioamescuegke::uomuwqaqggoekwwg => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::uomuwqaqggoekwwg, false), $omouioamescuegke::mykiyeswieqamagm => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::mykiyeswieqamagm), $omouioamescuegke::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::quumookoiuysuyuw), $omouioamescuegke::owimkwkiwawmeicq => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::owimkwkiwawmeicq), $omouioamescuegke::eeeyoywyquqywwoo => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::eeeyoywyquqywwoo), $omouioamescuegke::iuqumwggccmcuyem => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::iuqumwggccmcuyem), $omouioamescuegke::qscwcyiaqccoayqk => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::qscwcyiaqccoayqk), $omouioamescuegke::ueasagmikqewqcay => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::ueasagmikqewqcay, 0), $omouioamescuegke::iysgkeueasmuwmcq => $oggygmyiawqsyecy, $omouioamescuegke::quywusioaoakumaw => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::quywusioaoakumaw), $omouioamescuegke::wogaqauoigwyaoig => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::wogaqauoigwyaoig, 0), $omouioamescuegke::cgiaykosmmoyuagu => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::cgiaykosmmoyuagu, 0)]; $qsqwqsymmqeoqwcu[$ogaeiucyqmowuqms] = $gmcgeogogyqsgawk; if (!((int) $ogaeiucyqmowuqms === (int) $omcwcsgeyeyoiwyi->qogaqkcsogcqiaic($umwagewoweuckiso, $omcwcsgeyeyoiwyi::kiwgokskimawckie))) { goto esuiysskoweawsue; } $umwagewoweuckiso[self::qescuiwgsyuikume] = $gmcgeogogyqsgawk[self::qescuiwgsyuikume]; esuiysskoweawsue: uguigkcmukuouway: } qicwaskssogcokgm: $keccaugmemegoimu = $this->qasywwyamoesisyi('', ["\143\x6f\x69\156\163" => $qwgquweoiskugckg, "\x70\154\141\x6e\x73" => $qsqwqsymmqeoqwcu, "\x65\170\x74\x72\141\x5f\143\157\x69\156\x73" => $goqqimcssiyagkwy->ycmmosmyyiycyeug(true), "\x73\165\x62\x73\x63\x72\x69\160\164\151\157\x6e" => $umwagewoweuckiso]); aegysmeecgcgayyw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); if ($esuksqieigiqcaie && $gwgucoaaqcwwciqq) { goto cgiscsqwwgqqaeqi; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq); if (!is_wp_error($mokawwccycoiqeka)) { goto wiysogeqqwgioyka; } $keccaugmemegoimu = $mokawwccycoiqeka; goto skkamseieeusycye; wiysogeqqwgioyka: if ($mokawwccycoiqeka) { goto suqkuqygkkgwyaie; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\141\156\40\x6e\157\x74\40\x64\x65\164\145\x63\164\40\x79\x6f\165\162\40\144\x6f\x6d\x61\151\x6e\x2e\40\x70\154\x65\x61\163\145\x20\x63\157\156\164\141\x63\164\40\x75\163\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto soaccwqimeksgwiw; suqkuqygkkgwyaie: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk, 1); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\131\x6f\165\162\x20\122\145\x71\x75\x65\x73\164\40\151\x73\40\166\141\154\x69\x64\56", PR__MDL__OPTIMIZATION_MANAGER), ["\145\x78\164\x72\141\163" => $this->kiyymmqeuqucwggg(Extra::symcgieuakksimmu(), $wqykqusigegasqeg, $suaemuyiacqyugsm), "\x73\165\x62\x73\143\162\x69\x70\164\151\x6f\x6e\x73" => $this->kiyymmqeuqucwggg(Subscription::symcgieuakksimmu(), $wqykqusigegasqeg, $suaemuyiacqyugsm)]); soaccwqimeksgwiw: skkamseieeusycye: syiqkaasoueowwui: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amkoumqiwyaqukow(WP_REST_Request $aqmwamyiwgeeymqa) { $mgegoogckgsumooq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::sygmkaeayiiouiwm); $iueymcwwscwqkiyq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ciywsqoeiymemsys); $yayiceymsscqcsoy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::oquukmukaoqegcuk); if ($mgegoogckgsumooq && $yayiceymsscqcsoy && is_array($yayiceymsscqcsoy) && $iueymcwwscwqkiyq && in_array($iueymcwwscwqkiyq, [self::amcogigwsaqssuai, self::uasuowkaguiwoouw], true)) { goto gkyawqqcmigqgaiq; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto ooeausyowguqicuo; gkyawqqcmigqgaiq: if ($this->ycocqiwisouieuig($mgegoogckgsumooq)) { goto cmegwsegsosyqcai; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\x72\x20\162\x65\161\165\145\x73\164\40\x69\163\x20\156\157\164\40\166\141\x6c\x69\144\40\141\156\x64\x20\162\x65\x71\165\x65\x73\x74\x65\144\40\x72\x6f\165\164\145\x20\x64\157\145\x73\40\x6e\157\x74\x20\x65\170\x69\x73\x74\163\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto wmywuusgukmmaams; cmegwsegsosyqcai: foreach ($yayiceymsscqcsoy as $wwcmeousycqgqwws) { $this->uykissogmuaaocsg()->ysqwckqmysqyuuow($wwcmeousycqgqwws, $iueymcwwscwqkiyq); ewymsmkkiksgwysk: } giaacoqqqsekcayy: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x55\x73\141\147\145\x73\40\x73\x74\141\164\x75\163\x65\x73\x20\143\150\141\156\x67\x65\144\x20\163\x75\143\x63\x65\x73\163\146\165\154\154\x79\x2e", PR__MDL__OPTIMIZATION_MANAGER)); wmywuusgukmmaams: ooeausyowguqicuo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function skkysuqqysioiwwg(WP_REST_Request $aqmwamyiwgeeymqa) { $mgegoogckgsumooq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::sygmkaeayiiouiwm); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); $ccowyogiqwikkkie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::myikkigscysoykgy); if ($mgegoogckgsumooq && $esuksqieigiqcaie && $ccowyogiqwikkkie && is_array($ccowyogiqwikkkie)) { goto wkeuuycukmuqiaom; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto wakmayaoqoskekqy; wkeuuycukmuqiaom: if ($this->ycocqiwisouieuig($mgegoogckgsumooq)) { goto ueigkucgaucgeimc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\165\x72\40\162\x65\161\x75\x65\163\x74\x20\x69\x73\x20\x6e\157\164\40\166\x61\154\151\x64\40\x61\156\x64\x20\x72\x65\x71\165\145\x73\x74\x65\x64\x20\162\157\x75\164\145\x20\144\x6f\x65\x73\40\156\157\164\40\x65\170\151\163\164\163\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto sggawugoykqcmsug; ueigkucgaucgeimc: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie); if ($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka)) { goto wgewmqieuamsoayy; } $keccaugmemegoimu = $mokawwccycoiqeka; goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $umwagewoweuckiso = $goqqimcssiyagkwy->mkiwiwaquqeegaik($wqykqusigegasqeg); if ($umwagewoweuckiso) { goto omqiayeucoioqoao; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\x65\155\x73\x20\164\x68\x65\40\x64\x6f\155\141\x69\156\x20\150\x61\163\40\x6e\157\x20\x76\x61\x6c\151\144\40\x73\165\142\163\143\162\x69\160\164\x69\157\x6e\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto ugqaaewwmkocwwgy; omqiayeucoioqoao: $smowyuyseuwiaiei = $goqqimcssiyagkwy->cuwsksauyogikoks($wqykqusigegasqeg, $ccowyogiqwikkkie); if ($smowyuyseuwiaiei > 0) { goto cewmoqyysgsmuiya; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\103\141\x6e\40\x6e\157\164\x20\x63\141\x6c\143\165\154\141\164\145\x20\x79\x6f\x75\x72\x20\162\x65\161\x75\x65\x73\x74\x65\x64\40\x61\143\x74\151\x6f\156\163\40\x63\x6f\x69\156\x20\x61\155\x6f\x75\156\164\56", PR__MDL__OPTIMIZATION_MANAGER), 400); goto igooksugieceoege; cewmoqyysgsmuiya: if ($yayiceymsscqcsoy = $goqqimcssiyagkwy->iimacqcwqcucqcwo($wqykqusigegasqeg, $smowyuyseuwiaiei, self::sgoswgskyiiwkyuo)) { goto egyyiccaeeiooaua; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\141\156\x20\x6e\x6f\164\x20\x61\144\x64\40\x75\x73\x61\x67\145\40\146\157\x72\40\162\x65\161\165\x65\163\164\145\144\x20\x64\x6f\x6d\141\x69\156\56", PR__MDL__OPTIMIZATION_MANAGER), 403); goto scisgsyemmsekgos; egyyiccaeeiooaua: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\125\163\141\x67\145\x73\40\x61\x64\144\145\144\x20\x73\x75\x63\143\x65\x73\x73\x66\165\154\154\x79\x2e", PR__MDL__OPTIMIZATION_MANAGER), [self::sqcsaeqsycmuiiso => $smowyuyseuwiaiei, self::oquukmukaoqegcuk => $yayiceymsscqcsoy]); scisgsyemmsekgos: igooksugieceoege: ugqaaewwmkocwwgy: kqgcyoscsusgoaqi: sggawugoykqcmsug: wakmayaoqoskekqy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function kiyymmqeuqucwggg($meywaqqsugaoeyys, $wqykqusigegasqeg, $suaemuyiacqyugsm) : array { $geeyaumoyycymeks = $meywaqqsugaoeyys instanceof Subscription; $omouioamescuegke = Plan::symcgieuakksimmu(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); $umkkkaqkwugkemce = 0; if ($geeyaumoyycymeks) { goto qmuwoecuacmkwgem; } $umkkkaqkwugkemce = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::ysogiyumowssousm, 0); qmuwoecuacmkwgem: $ymiyawysimukkoso = $meywaqqsugaoeyys->aeggeuqycwawueqy($meywaqqsugaoeyys->wkmkqaiwuqouweye(self::kuqwimiimiqsimgo, $wqykqusigegasqeg), [self::imywcsggckkcywgk => $suaemuyiacqyugsm, self::wosqwewmqmyweqea => false]); $cyymykkuugqaugia = []; $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); foreach ($ymiyawysimukkoso[self::qwumqqyuasyskkkc] as $igqsaukqcqscimok) { $icwicymcioeyeyek = []; $igqsaukqcqscimok = (array) $igqsaukqcqscimok; if ($geeyaumoyycymeks) { goto msemumccgceyugmg; } $cosmgoaiwuamyesi = $meywaqqsugaoeyys->qogaqkcsogcqiaic($igqsaukqcqscimok, self::ciyoccqkiamemcmm, 0); if (!($cosmgoaiwuamyesi > 0)) { goto eogwckcymuugikuy; } $icwicymcioeyeyek[self::ciyoccqkiamemcmm] = $cosmgoaiwuamyesi; eogwckcymuugikuy: goto wagqgeqymeqoeuyi; msemumccgceyugmg: $zkoismskyqiakggu = (array) $omouioamescuegke->akkkoiiymmamsauc($igqsaukqcqscimok[Subscription::kiwgokskimawckie] ?? 0); if (!$zkoismskyqiakggu) { goto eeauyscekuckoues; } $umkkkaqkwugkemce = $zkoismskyqiakggu[Plan::uecoocasykucckuu] ?? 0; eeauyscekuckoues: $icwicymcioeyeyek["\x70\154\x61\x6e"] = $omouioamescuegke->uikgwcuascgeissw($zkoismskyqiakggu); $icwicymcioeyeyek[self::icymuyeowqaciyyu] = $meywaqqsugaoeyys->qogaqkcsogcqiaic($igqsaukqcqscimok, self::icymuyeowqaciyyu); wagqgeqymeqoeuyi: $aumscagymwyyicag = 0; if (!($umkkkaqkwugkemce && ($gkkgcoiwayaccqgm = $meywaqqsugaoeyys->qogaqkcsogcqiaic($igqsaukqcqscimok, self::awkcoioakcaougmq)))) { goto asiqwuoswmigcaki; } $mgwmckosekeimqms = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->wasgwsogmuquqeaa($gkkgcoiwayaccqgm); foreach ($mgwmckosekeimqms as $cawesmkieccckaae) { if (!($umkkkaqkwugkemce === $aqauykcugwiqkumq->scwwywwaeuumakiq($cawesmkieccckaae))) { goto wcugqegqsuuuwqao; } $aumscagymwyyicag = $cawesmkieccckaae->get_total(); wcugqegqsuuuwqao: iwsuawwqomaowuii: } qoqskyuuwueqkquk: asiqwuoswmigcaki: $cyymykkuugqaugia[] = [self::gouqcwikiiygyasc => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok), self::kumuoysauoagaiiy => $meywaqqsugaoeyys->qogaqkcsogcqiaic($igqsaukqcqscimok, $meywaqqsugaoeyys::CREATED_AT), self::uiwqcumqkgikqyue => $icwicymcioeyeyek, self::acymsykymkiewqsy => $cgceoyqmmwumqyqa->aumscagymwyyicag($aumscagymwyyicag)]; mwsmsguqqkcwiiuk: } owmuceyswmgueasi: return [self::qwumqqyuasyskkkc => $cyymykkuugqaugia, self::ycuusiweasqygwiw => $ymiyawysimukkoso[self::ycuusiweasqygwiw]]; } private function ycocqiwisouieuig($mgegoogckgsumooq) : bool { return $mgegoogckgsumooq === "\61\62\x33\x34\x35"; } }
