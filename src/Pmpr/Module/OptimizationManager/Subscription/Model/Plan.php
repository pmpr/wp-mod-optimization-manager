<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668400e7ecf4b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Model; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio; use Pmpr\Common\Subscription\Model\Plan as BaseClass; use Pmpr\Module\OptimizationManager\Subscription\Interfaces\CommonInterface; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class Plan extends BaseClass implements CommonInterface { use EngineTrait; public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::qymgycqkoqecugsi)->gswweykyogmsyawy(__("\x53\165\142\x73\x63\162\x69\x70\x74\x69\x6f\156\163", PR__MDL__OPTIMIZATION_MANAGER))->ckgquisaimmgwuyu(Subscription::class)->acokiqqgsmoqaeyu()); parent::ewaqwooqoqmcoomi(); } public function asgweuiucesqyocq() : Collection { $aiowsaccomcoikus = parent::asgweuiucesqyocq(); $aiowsaccomcoikus->cuomeiwckekemywm(__("\117\156\x6c\x79\x20\x74\150\x65\40\146\x69\162\x73\x74\40\143\x6f\x69\156\x20\x74\171\160\x65\40\x72\165\154\x65\x20\151\x73\40\x69\156\143\154\x75\144\x65\144\x20\151\156\40\x74\150\x65\40\163\165\142\163\143\x72\x69\160\x74\151\157\x6e\40\160\x72\157\143\145\x73\x73\56", PR__MDL__OPTIMIZATION_MANAGER), self::smkwuwawwaqyimcq); $couuyeucwooyseic = $aiowsaccomcoikus->ygwimyogyaqgumam(self::cwuyiqcqccegmmis); if (!$couuyeucwooyseic instanceof Radio) { goto mqkmcysgoiaouiwm; } $couuyeucwooyseic->kesomeowemmyygey(self::mykiyeswieqamagm, __("\103\x6f\x69\156", PR__MDL__OPTIMIZATION_MANAGER))->qyucewwiggkyeaso(self::kqesaikwiwcgimuk, [self::wuawcaggsyeaaswe, self::ecygggyugmmoeaky])->qyucewwiggkyeaso(self::mykiyeswieqamagm, [self::mykiyeswieqamagm, self::cgiaykosmmoyuagu, self::wogaqauoigwyaoig]); mqkmcysgoiaouiwm: $aiowsaccomcoikus->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::mykiyeswieqamagm)->gswweykyogmsyawy(__("\x43\x6f\151\156", PR__MDL__OPTIMIZATION_MANAGER))->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::cgiaykosmmoyuagu)->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\103\x72\x69\164\151\x63\141\x6c\40\x43\123\123\40\125\163\141\147\145", PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__("\106\x6f\x72\40\141\x6c\154\40\x64\145\x76\151\143\x65\163\50\104\x65\163\x6b\164\x6f\160\40\46\x20\115\x6f\x62\151\154\x65\51", PR__MDL__OPTIMIZATION_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wogaqauoigwyaoig)->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\127\x65\x62\40\x56\x69\164\141\154\40\x55\x73\141\x67\145", PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__("\x46\157\x72\x20\x61\154\x6c\x20\144\145\x76\x69\x63\x65\x73\x28\x44\x65\x73\153\164\157\x70\x20\46\40\115\157\142\x69\154\145\x29", PR__MDL__OPTIMIZATION_MANAGER))); return $aiowsaccomcoikus; } public function asosocqswygacyyk($gesuaewsacmmwoeo) : array { $gmcgeogogyqsgawk = parent::asosocqswygacyyk($gesuaewsacmmwoeo); $acqqmqmcquukaqsc = $gmcgeogogyqsgawk[self::eeeoygaqqmoukaeg] ?? []; if (!is_array($acqqmqmcquukaqsc)) { goto uiosisocuwokwkie; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $cosmgoaiwuamyesi = $ekuqiqmikiicgoss[self::mykiyeswieqamagm] ?? ''; $caokcyqaukiegscs = $ekuqiqmikiicgoss[self::wogaqauoigwyaoig] ?? ''; $youuqiqsoowygoag = $ekuqiqmikiicgoss[self::cgiaykosmmoyuagu] ?? ''; if (!($cosmgoaiwuamyesi !== '' && $caokcyqaukiegscs !== '' && $youuqiqsoowygoag !== '')) { goto iikiiioqiyegyaak; } $gmcgeogogyqsgawk[self::mykiyeswieqamagm] = $cosmgoaiwuamyesi; $gmcgeogogyqsgawk[self::wogaqauoigwyaoig] = $youuqiqsoowygoag; $gmcgeogogyqsgawk[self::cgiaykosmmoyuagu] = $caokcyqaukiegscs; goto kosaqwikueyksqmw; iikiiioqiyegyaak: gicyayswqyuoekcq: } kosaqwikueyksqmw: uiosisocuwokwkie: return $gmcgeogogyqsgawk; } }