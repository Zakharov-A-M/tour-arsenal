<!--<ul class="nav nav-list side-menu">-->
<!--    <li class="active ">-->
<!--        <a href="../rybalka"> $json->services->menu->fishing</a>-->
<!--    </li>-->
<!--    <li class=" ">-->
<!--        <a href="../okhota"> $json->services->menu->hunting</a>-->
<!--    </li>-->
<!--    <li class=" ">-->
<!--        <a href="../banya">$json->services->menu->bathhouse </a>-->
<!--    </li>-->
<!--    <li class=" ">-->
<!--        <a href="../dosug-v-lesu-griby-yagody">$json->services->menu->relaxInForrest </a>-->
<!--    </li>-->
<!--    <li class=" ">-->
<!--        <a href="../dopolnitelnye-uslugi"> $json->services->menu->additionalServices </a>-->
<!--    </li>-->
<!--    <li class=" ">-->
<!--        <a href="../zimnie-razvlecheniya"> $json->services->menu->winterInter</a>-->
<!--    </li>-->
<!--</ul>-->


<ul class="nav nav-list side-menu">
    <li class="<?=  strripos($_SERVER["REQUEST_URI"], '/services/rybalka') !== false ? 'active' : ''; ?> ">
        <a href="<?= $siteURL ?>services/rybalka">Рыбалка</a>
    </li>
    <li class="<?=  strripos($_SERVER["REQUEST_URI"], '/services/okhota') !== false ? 'active' : ''; ?>">
        <a href="<?= $siteURL ?>services/okhota">Охота</a>
    </li>
    <li class="<?=  strripos($_SERVER["REQUEST_URI"], '/services/banya') !== false ? 'active' : ''; ?>">
        <a href="<?= $siteURL ?>services/banya">Баня</a>
    </li>
    <li class="<?=  strripos($_SERVER["REQUEST_URI"], '/services/dosug-v-lesu-griby-yagody') !== false ? 'active' : ''; ?>">
        <a href="<?= $siteURL ?>services/dosug-v-lesu-griby-yagody">Досуг в лесу (грибы-ягоды)</a>
    </li>
    <li class="<?=  strripos($_SERVER["REQUEST_URI"], '/services/dopolnitelnye-uslugi') !== false ? 'active' : ''; ?>">
        <a href="<?= $siteURL ?>services/dopolnitelnye-uslugi">Дополнительные услуги</a>
    </li>
    <li class="<?=  strripos($_SERVER["REQUEST_URI"], '/services/zimnie-razvlecheniya') !== false ? 'active' : ''; ?>">
        <a href="<?= $siteURL ?>services/zimnie-razvlecheniya">Зимние развлечения</a>
    </li>
</ul>