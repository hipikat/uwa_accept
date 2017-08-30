<!DOCTYPE html>
<html id="core-rebrand" lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- the above compatability tag MUST be first -->
    <meta name="language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta id="responsive-viewport" name="viewport" content="width=device-width, target-densitydpi=medium-dpi, initial-scale=1.0,   maximum-scale=2.0">

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
    <meta name="uwamenu.remotesitemapurl" content="[https://www.url.to/sitemap]" />
    <meta name="uwamenu.searchdomain" content="[domain.edu.au]" />
    <meta name="google.analytics.id" content="[UA-0000000-1]" />
    <meta name="google.tagmanager.id" content="[GTM-XXXXXX]" />

    <!-- other items -->
    <title>[Page Title] : [Site Title] : The University of Western Australia</title>
</head>

<body class="style-version-two">
    <!--[if lte IE 9]><div id="legacy-browser"><![endif]-->

    <h1 id="sitehomelink"><a href="[site url]">[Site Title]</a></h1>
    <h2 id="pagetitle">[Page Title]</h2>

    <a id="top"></a>
    <div id="centrecontainer" class="centrecontainer" role="main">
        <div class="contentwrapper">
            <div class="content">
                <!-- ### START PAGE CONTENT ### -->
                <? phpinfo(); ?>
                <!-- ### END PAGE CONTENT ### -->
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
            <li><a href="[site url]">Site Title</a>
            </li>
            <li><a href="[inner page url]">[Inner page title]</a>
            </li>
            <li class="current">[Current page title]</li>
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
