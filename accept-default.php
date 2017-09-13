<?php

include('default_vars.inc');

# The 'view' GET variable determines the page to draw
if ( isset($_GET['view']) ) {
    $view = $_GET['view'];
    if ( $view == 'welcome' ) {
        include('vars-welcome.inc');
    } elseif ( $view == 'sso' ) {
        include('vars-sso.inc');
    } elseif ( $view == 'signout' ) {
        include('vars-signout.inc');
    }
# Default to the Welcome screen, if none is specified
} else {
    if ( strpos($_SERVER['REQUEST_URI'], '?') === false ) {
        $addendum = '?view=welcome';
    } else {
        $addendum = '&view=welcome';
    }
    header('Location: ' . $_SERVER['REQUEST_URI'] . $addendum);
}

# Use local Rebrand resources (CSS, JS, et al.), if the GET variable
# 'local_core' exists, and is truthy.
if ( isset($_GET['local_core']) && $_GET['local_core'] ) {
    $core_prefix = '/rebrand';
} else {
    $core_prefix = '//static.weboffice.uwa.edu.au/visualid/core-rebrand';
}


?>
<html id="core-rebrand" lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- the above prevents ie8 defaulting to ie7 on intranet and must be first -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">

    <!-- target a single DPI. -->
    <meta id="responsive-viewport" name="viewport" content="width=device-width, target-densitydpi=medium-dpi, initial-scale=1.0, maximum-scale=2.0">

    <!-- common libraries -->
    <link rel="stylesheet" type="text/css" href="//static.weboffice.uwa.edu.au/visualid/lib/font-awesome/font-awesome.4.latest.css" />
    <script type="text/javascript" src="//static.weboffice.uwa.edu.au/visualid/lib/jquery/jquery-1.11.latest.js"></script>

    <!-- core styles -->
    <link rel="stylesheet" type="text/css" href="<?= $core_prefix ?>/css/uwacore.css" />
    <link rel="stylesheet" type="text/css" href="<?= $core_prefix ?>/css/megamenu.css" />

    <!-- core scripts -->
    <script type="text/javascript" src="<?= $core_prefix ?>/js/uwacore.js"></script>
    <script type="text/javascript" src="<?= $core_prefix ?>/js/megamenu.js"></script>

    <!-- metadata settings -->
    <meta name="uwamenu.searchdomain" content="pheme.uwa.edu.au" />
    <!--<meta name="uwamenu.remotesitemapurl" content="[https://www.url.to/sitemap]" />-->
    <!--<meta name="google.analytics.id" content="[UA-0000000-1]" />-->
    <!--<meta name="google.tagmanager.id" content="[GTM-XXXXXX]" />-->

    <!-- UWA Accept style/script overrides -->
    <link rel="stylesheet" type="text/css" href="//static.weboffice.uwa.edu.au/visualid/sites/uwa_accept/styles/uwa-accept.css" />
    <link rel="stylesheet" type="text/css" href="<?= $core_prefix ?>/css/devices/wings.css" />
    <link rel="stylesheet" type="text/css" href="<?= $core_prefix ?>/css/devices/forms.css" />
    <script type="text/javascript" src="<?= $core_prefix ?>/js/devices/forms.js"></script>

    <!-- other items -->
    <title><?= $inner_page_title ?> : <?= $site_title ?> : The University of Western Australia</title>
</head>

<body class="style-version-two site-uwa-accept">
    <!--[if lte IE 9]><div id="legacy-browser"><![endif]-->

    <h2 id="sitehomelink"><a href="https://www.pheme.uwa.edu.au">Pheme</a></h1>
    <!--<h2><a href="<?= $site_url ?>"><?= $site_title ?></a></h2>-->
    <h1 id="pagetitle"><?= $inner_page_title ?></h1>

    <a id="top"></a>
    <div id="centrecontainer" class="centrecontainer" role="main">
        <div class="contentwrapper padding-bottom-none">
            <div class="content">
                <!-- ### START PAGE CONTENT ### --><?

    if ( $view == 'welcome' ) {
        include('content-welcome.inc');
    } elseif ( $view == 'sso' ) {
        include('content-sso.inc');
    } elseif ( $view == 'signout' ) {
        include('content-signout.inc');
    }

              ?><!-- ### END PAGE CONTENT ### -->
            </div>
        </div>
    </div>

    <div id="uwacore-data">

        <!-- optional footer social icons -->
        <div id="uwacore-footer-extras">
            <ul class="social-icons">
                <li><a href="https://twitter.com/uwanews" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/universitywa" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://www.linkedin.com/company/university-of-western-australia" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="http://instagram.com/universitywa" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="http://www.youtube.com/user/universitywa" title="YouTube"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
        </div>

        <!-- optional breadcrumb trail -->
        <ol id="uwacore-breadcrumbs">
            <li><a href="http://www.uwa.edu.au">UWA Home</a></li>
            <li><a href="http://www.uwa.edu.au">UWA Home</a></li>
            <li><a href="http://pheme.uwa.edu.au">Pheme</a></li>
            <li class="current"><a href="<?= $inner_page_url ?>"><?= $inner_page_title ?></a></li>
        </ol>

        <!-- Menu navigation links. The top level links are also added to the footer -->
        <div id="uwamenu-navigation" role="navigation">
            <ul>
                <li<? if ( $view == 'welcome' ) { echo ' class="pageon"'; } ?>><a href="TODO">Welcome to Pheme</a></li>
                <li<? if ( $view == 'sso' ) { echo ' class="pageon"'; } ?>><a href="TODO">Single sign-on</a></li>
            </ul>
        </div>
    </div>

    <!--[if lte IE 9]></div><![endif]-->

</body>
</html>
