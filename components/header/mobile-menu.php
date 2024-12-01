<?php
// Mobile menu component
?>
<a href="#" class="toggle-mnu"><span></span></a>
<div id="mobile-menu">
    <div class="inner-wrap">
        <nav>
            <ul class="nav_menu">
                <li class="menu-item-has-children current-menu-item">
                    <a href="#"><?php L::W("Lang"); ?></a>
                    <ul class="sub-menu">
                        <?php
                        foreach(L::GetAvailableLanguages() as $langMeta) {
                            echo('<li><a href="'. siteUrl('//', true) .'?lang='. $langMeta["short"] .'"><span class="flag-icon-background flag-icon-'. $langMeta["icon"] .'"></span> '. $langMeta["native"] .' ('. $langMeta["in_english"] .')</a></li>');
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="<?php L::W("COMMUNITY_PAPER_URL"); ?>" target="_blank"><?php L::W("Community Paper"); ?></a></li>
                <li><a href="#benefits" class="smooth-scroll"><?php L::W("Benefits"); ?></a></li>
                <li><a href="#exchange" class="smooth-scroll"><?php L::W("Exchange"); ?></a></li>
                <li><a href="#wallets" class="smooth-scroll"><?php L::W("Wallets"); ?></a></li>
                <li><a href="https://forum.btcz.rocks/t/pools-that-love-the-bitcoinz-community/51" target="_blank"><?php L::W("Pools"); ?></a></li>
                <?php include(__DIR__ . '/mobile-menu-items.php'); ?>
            </ul>
        </nav>
    </div>
</div>
