<?php
function get_header() {
    global $settings;
?>
<!DOCTYPE html>
<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-28037043-7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { window.dataLayer.push(arguments) }
        gtag('js', new Date());
        gtag('config', 'UA-28037043-7');
    </script>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.7/es5-shim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php L::W("BitcoinZ is the future of cryptocurrency. Welcome to decentralization."); ?>"/>
    <meta property="og:image" content="/images/logo.png">
    <link rel="icon" href="/favicon.ico">

    <title><?php L::W("Your Financial Freedom | BitcoinZ"); ?></title>

    <link rel="stylesheet" href="<?php siteUrl(); ?>css/stylelibs.css">
    <link rel="stylesheet" href="<?php siteUrl(); ?>css/components/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.min.css">
</head>
<body>
<?php
}
?>
