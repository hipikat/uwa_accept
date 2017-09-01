<!DOCTYPE html>
<?

include('default_vars.inc');

if ( isset($_GET['view']) ) {
    $view = $_GET['view'];
    if ( $view == 'welcome' ) {
        include('vars-welcome.inc');
    }
    elseif ( $view == 'sso' ) {
        include('vars-sso.inc');
    }
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

<? #include('core_includes.inc'); ?>
    <!-- common libraries -->
    <link rel="stylesheet" type="text/css" href="https://static.weboffice.uwa.edu.au/visualid/lib/font-awesome/font-awesome.4.latest.css" />
    <script type="text/javascript" src="https://static.weboffice.uwa.edu.au/visualid/lib/jquery/jquery-1.11.latest.js"></script>

    <!-- core styles -->
    <link rel="stylesheet" type="text/css" href="https://static.weboffice.uwa.edu.au/visualid/core-rebrand/css/uwacore.css" />
    <link rel="stylesheet" type="text/css" href="https://static.weboffice.uwa.edu.au/visualid/core-rebrand/css/megamenu.css" />

    <!-- core scripts -->
    <script type="text/javascript" src="https://static.weboffice.uwa.edu.au/visualid/core-rebrand/js/uwacore.js"></script>
    <script type="text/javascript" src="https://static.weboffice.uwa.edu.au/visualid/core-rebrand/js/megamenu.js"></script>

    <!-- metadata settings -->
    <meta name="uwamenu.searchdomain" content="pheme.uwa.edu.au" />
    <!--<meta name="uwamenu.remotesitemapurl" content="[https://www.url.to/sitemap]" />-->
    <!--<meta name="google.analytics.id" content="[UA-0000000-1]" />-->
    <!--<meta name="google.tagmanager.id" content="[GTM-XXXXXX]" />-->

    <!-- UWA Accept overrides -->
    <!--<link rel="stylesheet" type="text/css" href="styles/uwa-accept.css" />-->
    <link rel="stylesheet" type="text/css" href="//static.weboffice.uwa.edu.au/visualid/core-rebrand/css/devices/wings.css" />
    <link rel="stylesheet" type="text/css" href="//static.weboffice.uwa.edu.au/visualid/core-rebrand/css/devices/forms.css" />
    <script type="text/javascript" src="//static.weboffice.uwa.edu.au/visualid/core-rebrand/js/devices/forms.js"></script>

    <!-- other items -->
    <title><?= $page_title ?> : <?= $site_title ?> : The University of Western Australia</title>
</head>

<body class="style-version-two">
    <!--[if lte IE 9]><div id="legacy-browser"><![endif]-->

    <h1 id="sitehomelink"><a href="[site url]"><?= $site_title ?></a></h1>
    <h2 id="pagetitle"><?= $page_title ?></h2>

    <a id="top"></a>
    <div id="centrecontainer" class="centrecontainer" role="main">
        <div class="contentwrapper">
            <div class="content">
                <!-- ### START PAGE CONTENT ### --><?

    if ( $view == 'welcome' ) {
        include('content-welcome.inc');
    } elseif ( $view == 'sso' ) {
        include('content-sso.inc');
    }

              ?><!-- ### END PAGE CONTENT ### -->
            </div>
        </div>
    </div>

    <div id="uwacore-data">

        <!-- optional footer social icons -->
        <div id="uwacore-footer-extras">
            <ul class="social-icons">
                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" title="YouTube"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
        </div>

        <!-- optional breadcrumb trail -->
        <ol id="uwacore-breadcrumbs">
            <li><a href="https://www.uwa.edu.au">UWA Home</a>
            </li>
            <li><a href="[site url]"><?= $site_title ?></a>
            </li>
            <li><a href="<?= $inner_page_url ?>"><?= $inner_page_title ?></a>
            </li>
            <li class="current"><?= $page_title ?></li>
        </ol>

        <!-- "this page" link in footer for technical/admin info -->
        <div id="uwacore-footer-pageinfo">
            <dl class="columns-small">
                <dt>Updated</dt>
                <dd>[date]</dd>
                <dt>Feedback</dt>
                <dd><a href="mailto:[contact-email@uwa.edu.au]">[contact-email@uwa.edu.au]</a></a>
                </dd>
                <dt>Content ID</dt>
                <dd>[Content management system, asset ID or template name]</dd>
            </dl>
        </div>

        <!-- Menu navigation links. The top level links are also added to the footer -->
        <div id="uwamenu-navigation">
            <ul>
                <li><a href="http://...">Level 1 link</a>
                </li>
                <li><a href="http://...">Level 1 link</a>
                    <ul>
                        <li><a class="pageon" href="http://...">Level 2 link with pageon class for active page</a>
                            <ul>
                                <li>
                                    <a href="http://...">Level 3 link</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://...">Level 2 link</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!--[if lte IE 9]></div><![endif]-->

</body>
</html>
