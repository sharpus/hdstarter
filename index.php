<?php
require_once 'engine/routing.php';
if ($inc == '404') {
    header("Status: 404 Not Found");
    include_once '404.html';
    exit;
}
$sServerName = $_SERVER['SERVER_NAME'];
$sPhpSelf = $_SERVER['PHP_SELF'];
$sPhpSelf = str_replace('/index.php', '', $sPhpSelf);
$sUrl = 'http://' . $sServerName . $sPhpSelf;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo ($inc === 'home') ? 'Company Name | Company Slogan' : $title . ' | Company Name'; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!--<meta name="robots" value="noindex,nofollow">-->

        <link rel="stylesheet" href="<?php echo $sUrl; ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo $sUrl; ?>/css/main.css">

        <script src="<?php echo $sUrl; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <nav class="main-menu">
                <ul class="clearfix">
                    <li<?php echo ($inc === 'home') ? ' class="active"' : ''; ?>><a href="<?php echo $sUrl; ?>/" class="home ir">Strona główna</a></li>
                    <li<?php echo ($inc === 'o-firmie') ? ' class="active"' : ''; ?>><a href="<?php echo $sUrl; ?>/o-firmie.html">O firmie</a></li>
                    <li<?php echo ($inc === 'oferta') ? ' class="active"' : ''; ?>><a href="<?php echo $sUrl; ?>/oferta.html">Oferta</a></li>
                    <li<?php echo ($inc === 'kontakt') ? ' class="active"' : ''; ?>><a href="<?php echo $sUrl; ?>/kontakt.html">Kontakt</a></li>
                </ul>
            </nav>        

            <section id="content">
                <?php include_once 'inc/' . $inc . '.php'; ?>  
            </section> 

            <footer>
                &copy; 2013<?php echo (date('Y') > 2013) ? '-' . date('Y') : ''; ?> <a href="http://hdprint.pl/">HD Print</a>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $sUrl; ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <script src="<?php echo $sUrl; ?>/js/plugins.js"></script>
        <script src="<?php echo $sUrl; ?>/js/main.js"></script>
    </body>
</html>
