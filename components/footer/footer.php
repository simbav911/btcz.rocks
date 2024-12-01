<?php
function render_footer() {
?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; <?php echo date('Y'); ?> BitcoinZ. <?php L::W("All rights reserved."); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="<?php siteUrl(); ?>js/libs.js.pagespeed.ce.Av_NAtkm4V.js"></script>
    <script type="text/javascript" src="<?php siteUrl(); ?>js/common.js.pagespeed.ce.hW1NRi6zyn.js"></script>
</body>
</html>
<?php
}
?>
