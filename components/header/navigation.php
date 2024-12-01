<?php
function get_navigation() {
?>
<header id="top-nav" class="top-nav page-header">
    <div class="container">
        <a href="/" class="logo smooth-scroll">
            <img src="<?php siteUrl(); ?>images/logo.png" alt="logo" class="logo-white">
            <img src="<?php siteUrl(); ?>images/logo.png" alt="logo" class="logo-dark">
        </a>
        <nav class="top-menu">
            <ul class="sf-menu">
                <li><a href="/"><?php L::W("Home"); ?></a></li>
                <li><a href="<?php L::W("COMMUNITY_PAPER_URL"); ?>" target="_blank"><?php L::W("Community Paper"); ?></a></li>
                <li><a href="#benefits" class="smooth-scroll"><?php L::W("Benefits"); ?></a></li>
                <li><a href="#exchange" class="smooth-scroll"><?php L::W("Exchange"); ?></a></li>
                <li><a href="#wallets" class="smooth-scroll"><?php L::W("Wallets"); ?></a></li>
                <li><a href="https://forum.btcz.rocks/t/pools-that-love-the-bitcoinz-community/51" target="_blank"><?php L::W("Pools"); ?></a></li>
                <?php include(__DIR__ . '/menu-items.php'); ?>
            </ul>
        </nav>
        <?php include(__DIR__ . '/mobile-menu.php'); ?>
    </div>
</header>
<?php
}
?>
