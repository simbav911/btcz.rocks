<?php
// Explorer menu item
?>
<li>
    <a href="#"><?php L::W("Explorer"); ?></a>
    <ul>
        <li><a href="https://explorer.btcz.rocks/" target="_blank">explorer.btcz.rocks</a></li>
        <li><a href="https://btczexplorer.blockhub.info/" target="_blank">btczexplorer.blockhub.info</a></li>
    </ul>
</li>

<?php // Social menu item ?>
<li>
    <a href="#" class="smooth-scroll"><?php L::W("Social"); ?></a>
    <ul>
        <li><a href="https://forum.btcz.rocks" target="_blank">BitcoinZ Forum</a></li>					
        <li><a href="https://www.facebook.com/BTCZCommunity/" target="_blank">Facebook</a></li>
        <li><a href="https://slack.btcz.rocks/" target="_blank">Slack</a></li>
        <li><a href="https://twitter.com/BitcoinZTeam" target="_blank">Twitter</a></li>
        <li><a href="https://t.me/btczofficialgroup" target="_blank">Telegram</a></li>
        <li><a href="https://discordapp.com/invite/u3dkbFs" target="_blank">Discord</a></li>
        <li><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank">Reddit</a></li>
        <li><a href="https://bitcointalk.org/index.php?topic=3086664.0" target="_blank"><?php L::W("Bitcointalk Forum Topic"); ?></a></li>
    </ul>
</li>

<?php // Language selection menu item ?>
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
