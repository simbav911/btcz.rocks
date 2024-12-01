<?php
function render_slider() {
?>
<div id="top" class="slider">
    <div id="preloader">
        <div id="status"></div>
    </div>
    <div class="full-slider intro">
        <div data-image="<?php siteUrl(); ?>images/backgrounds/mountains.jpg" class="slide bg-mask background-image full-vh">
            <div class="container-slide vertical-align center head-desc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="description-slide">
                                <h2><?php L::W("Visit our new Community website"); ?></h2>
                                <div class="buttons-section1">
                                    <a href="http://getbtcz.com" target="_blank" class="btn dark-btn1 large-btn1"><?php L::W("www.getbtcz.com"); ?></a>
                                </div>
                            </div>
                            <br><br>
                            <div class="heading-title-big">
                                <?php L::W("It's Your Coin"); ?><br>
                                <span><?php L::W("BitcoinZ: The true Bitcoin 2.0"); ?></span>
                            </div>
                            <div class="description-slide"><?php L::W("Welcome to the decentralization"); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
