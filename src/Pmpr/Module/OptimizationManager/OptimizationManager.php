<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66868667851c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\x70\164\151\155\151\172\x61\x74\151\x6f\156\x20\115\x61\x6e\141\x67\x65\162", PR__MDL__OPTIMIZATION_MANAGER); }]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\154\x6f\147\151\156\x5f\x72\x65\x64\x69\x72\x65\143\x74", "\165\162\154\x64\145\x63\157\144\x65"); $this->aqaqisyssqeomwom("\142\x61\143\153\x6c\151\x6e\x6b\137\x6d\x61\156\x61\x67\145\x72\x5f\155\x6f\x64\165\x6c\x65\163", [$this, "\x79\x77\x63\165\x65\x79\x67\157\x73\x61\x79\x73\155\145\161\x71"])->aqaqisyssqeomwom("\143\x6f\x6d\x70\x6f\156\145\156\x74\137\155\165\154\x74\x69\x5f\x73\x74\x65\x70\x5f\x70\x72\157\x64\x75\143\164\137\157\x62\x6a\x65\x63\164", [$this, "\145\151\145\x77\157\x73\x6b\167\x61\x73\155\x63\171\x69\x65\x67"], 99, 3); } public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\123\165\x62\x73\143\x72\151\160\164\151\x6f\x6e", self::goqwwcuaqoyouoya)) { goto cecuyayqoioasumi; } Subscription::symcgieuakksimmu(); cecuyayqoioasumi: } public function skwukgcqgqeeoocm($mksyucucyswaukig, $icwicymcioeyeyek) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $syqougokmmgaoaee = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa); $eumseywaqskomggw = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::weayyoewessosyko . self::mswocgcucqoaesaa); try { $umwqusowiqmyseom = null; $uamcoiueqaamsqma = ''; $gukqamyquokaeeai = Product::symcgieuakksimmu(); $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); if (!$gukqamyquokaeeai->auyygcmgumaikako($syqougokmmgaoaee)) { goto cggowoquuiwqkyew; } $wyogkamcgoseimuk = null; if (!($yeyeakoqoeecqcuw = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::yuqaqwkmmeuawswk, 0))) { goto qogqewiwmwiwskgm; } $umwqusowiqmyseom = $aqauykcugwiqkumq->igiwycommqemseky($yeyeakoqoeecqcuw); if (!(!$umwqusowiqmyseom || ($wyogkamcgoseimuk = $umwqusowiqmyseom->get_item($yeyeakoqoeecqcuw)))) { goto qiaqsassksqiuyae; } $this->yqkwsouguwgoywcw(__("\x43\141\x6e\x20\x6e\x6f\164\40\x66\x69\x6e\144\40\157\x72\x64\145\x72\40\x6f\162\40\157\x72\x64\145\162\x20\x69\x74\x65\x6d\56", PR__MDL__OPTIMIZATION_MANAGER)); qiaqsassksqiuyae: qogqewiwmwiwskgm: if (!($eumseywaqskomggw && $syqougokmmgaoaee)) { goto uukumskkeggaowck; } $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = Domain::symcgieuakksimmu(); $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($eumseywaqskomggw); if (!$wwwcwiueuuyyokia) { goto qwigomakwmyiwkgo; } $kosiykkwwqmqwoqs = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto myoicgcuugciueis; qwigomakwmyiwkgo: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $eumseywaqskomggw, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto qgoiooayqmqqsiok; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\103\x61\x6e\x20\156\x6f\x74\x20\143\x72\145\x61\164\x65\40\157\x70\164\40\144\157\x6d\x61\x69\x6e\x3a\x20\x25\163", PR__MDL__OPTIMIZATION_MANAGER)); qgoiooayqmqqsiok: $kosiykkwwqmqwoqs = $sogksuscggsicmac[self::gouqcwikiiygyasc]; myoicgcuugciueis: if ($kosiykkwwqmqwoqs) { goto sqiciiuwmykocycc; } $uamcoiueqaamsqma = __("\104\x6f\155\x61\x69\156\40\151\163\40\162\145\161\x75\x69\x72\145\40\x74\157\40\x61\x64\x64\x20\x61\40\142\165\x64\x67\145\x74\56", PR__MDL__OPTIMIZATION_MANAGER); goto eequksumcoogyoem; sqiciiuwmykocycc: $ggkaciewmeqmgckg = date("\131\55\x6d\x2d\144"); $isweyuoisomqyaag = null; if ($umwqusowiqmyseom) { goto cuykwgmswkskqkyi; } $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::iiooageieusuyomy => self::yygyasgygkeqacou, $yoqasmiegcmcqaus::ciyoccqkiamemcmm => 0, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs]); if ($weesokuqyggkegcg) { goto csscmcacoikwsecs; } $akoqwmessouuyeke = ManipulateWoocommerce::aeockkkqmycaawia($gukqamyquokaeeai->aqasygcsqysmmyke(), $gukqamyquokaeeai::smsioacowoikwikc, false, true); $isweyuoisomqyaag = $gukqamyquokaeeai->kkyysaymmqmqykam($akoqwmessouuyeke, [$gukqamyquokaeeai::imeuukiiccuqqosc => $ggkaciewmeqmgckg]); csscmcacoikwsecs: goto kuicqywysciceggs; cuykwgmswkskqkyi: $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $yeyeakoqoeecqcuw]); if ($weesokuqyggkegcg) { goto asmecuqiyyswueqe; } $kuguwoaesuqsqysu = $wyogkamcgoseimuk->get_meta($gukqamyquokaeeai::iskqcquwkyuscqmg); $ggkaciewmeqmgckg = $gkyciwoiiisgywcs->get($kuguwoaesuqsqysu, $gukqamyquokaeeai::imeuukiiccuqqosc, $ggkaciewmeqmgckg); $isweyuoisomqyaag = $gukqamyquokaeeai->oyqguwgqyigmuwow($wyogkamcgoseimuk, $kuguwoaesuqsqysu); asmecuqiyyswueqe: kuicqywysciceggs: if (!$weesokuqyggkegcg) { goto kiqogmwcgcamwiig; } $uamcoiueqaamsqma = __("\102\165\x64\147\x65\164\x20\167\151\x74\150\40\x72\x65\x71\x75\145\163\164\x65\x64\x20\144\141\x74\141\40\141\x6c\x72\x65\x61\x64\171\40\x65\170\151\163\x74\x2e", PR__MDL__OPTIMIZATION_MANAGER); goto iomcaiwewsawiamu; kiqogmwcgcamwiig: if (!($wwgucssaecqekuek = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, self::ysskgssgwuwmqwym))) { goto yowsmsiyimmimemc; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy); $owiuekcekysskaoe = $gkyciwoiiisgywcs->get($wwgucssaecqekuek, self::wcoquosyucmegcsq); $mksyucucyswaukig = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, self::ckmqoekmugkggeym); if (!($mksyucucyswaukig && ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, $gukqamyquokaeeai::smsioacowoikwikc))) { goto mkwskuycuyguqqok; } $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, $yoqasmiegcmcqaus::iiooageieusuyomy => $iqaosyayeiuaisqi, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs]); mkwskuycuyguqqok: if ($weesokuqyggkegcg) { goto kwagwqyusyiyoaqs; } $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::wcoquosyucmegcsq => $owiuekcekysskaoe, $yoqasmiegcmcqaus::iiooageieusuyomy => $iqaosyayeiuaisqi, $yoqasmiegcmcqaus::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, $yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $yeyeakoqoeecqcuw]; $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto sciwggaeogcoesiu; } $uamcoiueqaamsqma = sprintf(__("\x42\165\x64\x67\x65\x74\x20\x77\x69\x74\150\40\x6c\x65\166\145\154\40\x25\x73\x20\141\x6e\144\40\166\141\154\x75\145\x20\x25\163\x20\141\x64\x64\x65\144\40\x73\x75\143\x63\x65\163\x73\146\165\x6c\154\x79\x2e", PR__MDL__OPTIMIZATION_MANAGER), $iqaosyayeiuaisqi, $eqgoocgaqwqcimie); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $uamcoiueqaamsqma = $this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]); eqkauqciwewmgeoi: kwagwqyusyiyoaqs: yowsmsiyimmimemc: iomcaiwewsawiamu: eequksumcoogyoem: uukumskkeggaowck: cggowoquuiwqkyew: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } if (!$uamcoiueqaamsqma) { goto ocokwuuquaokmasc; } $this->caokeucsksukesyo()->mmmcswscsiecscwg()->mscqqcmmkkiqwcua($uamcoiueqaamsqma, $umwqusowiqmyseom ?: $this); ocokwuuquaokmasc: } public function eiewoskwasmcyieg($mksyucucyswaukig, $wksoawcgagcgoask, $product) : ?Product { if (!($product && $this->cqusmgskowmesgcg() === $wksoawcgagcgoask)) { goto yiwiqaqmwiogawym; } $mksyucucyswaukig = Product::symcgieuakksimmu($wksoawcgagcgoask, $product); yiwiqaqmwiogawym: return $mksyucucyswaukig; } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = Setting::symcgieuakksimmu()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ocwsuwyiiasigqaa, 0); } }
